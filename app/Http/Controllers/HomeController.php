<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\FlightClass;
use App\Models\Locations;
use App\Services\FlightService;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {

        $locations = Locations::all();
        $airlines = Airlines::paginate(6);
        $flightclass =  FlightClass::all();

        return view('welcome', compact('locations', 'airlines', 'flightclass'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('contact');
    }

    public function flight()
    {
        $airlines = Airlines::withCount('flights')->orderByDesc('flights_count')->limit(24)->get();
        return view('flight', compact('airlines'));
    }

    public function hotel()
    {
        return view('hotel');
    }

    public function car()
    {
        return view('car');
    }

    public function cruise()
    {
        return view('cruise');
    }

    public function tour()
    {
        return view('tour');
    }

    public function comingsoon()
    {
        return view('comingsoon');
    }

    public function flightSearch(Request $request, FlightService $flightService)
    {
        $airlines = Airlines::withCount('flights')->orderByDesc('flights_count')->limit(24)->get();
        $airlineLogo = Airlines::all();
        $flights = [];
        $error = null;
        $totalFlightsCount = 0;
        $airlineFlightCounts = [];

        if ($request->has('origin') && $request->has('destination')) {
            try {
                $validated = $this->validateAndPrepareRequest($request);
                $result = $flightService->searchFlights($validated);

                if ($result['status']) {
                    $response = $result['data']['response'];
                    $sortKey = $request->get('sort');

                    $processed = $this->processFlightResults($response['results'] ?? [], $request, $sortKey, $response['traceId'] ?? null);

                    $flights = $processed['flights'];
                    $totalFlightsCount = $this->getTotalFlightsCount($response);
                    $airlineFlightCounts = $this->getCombinedAirlineCounts($response);
                } else {
                    $error = $result['error']['errorMessage'] ?? 'Unknown error occurred';
                }
            } catch (\Illuminate\Validation\ValidationException $e) {
                $error = 'Invalid search parameters: ' . implode(', ', $e->errors());
            } catch (\Exception $e) {
                $error = 'An error occurred while searching for flights';
            }
        }

        return view('flightsearch', [
            'airlines' => $airlines,
            'flights' => $flights,
            'error' => $error,
            'airlinelogo' => $airlineLogo,
            'totalFlightsCount' => $totalFlightsCount,
            'airlineFlightCounts' => $airlineFlightCounts,
            'sort' => $request->get('sort')
        ]);
    }



    /**
     * Validate and prepare request data
     */
    private function validateAndPrepareRequest(Request $request): array
    {
        $data = $request->all();

        // Type casting
        $data['directFlight'] = isset($data['directFlight'])
            ? filter_var($data['directFlight'], FILTER_VALIDATE_BOOLEAN)
            : false;

        $numericFields = [
            'adultCount' => 1,
            'childCount' => 0,
            'infantCount' => 0,
            'journeyType' => 1,
            'flightCabinClass' => 1
        ];

        foreach ($numericFields as $field => $default) {
            $data[$field] = isset($data[$field]) ? (int) $data[$field] : $default;
        }

        // Date formatting
        $departureField = ($data['journeyType'] == 2)
            ? 'multiPreferredDeparture'
            : 'preferredDepartureTime';

        foreach ([$departureField, 'preferredReturnDepartureTime'] as $key) {
            if (!empty($data[$key]) && !preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/', $data[$key])) {
                $parsed = DateTime::createFromFormat('d-m-Y', $data[$key]);
                $data[$key] = $parsed ? $parsed->format('Y-m-d\TH:i:s') : null;
            }
        }

        $request->merge($data);

        return $request->validate([
            'directFlight' => 'required|boolean',
            'adultCount' => 'required|integer|min:1',
            'childCount' => 'required|integer|min:0',
            'infantCount' => 'required|integer|min:0',
            'journeyType' => 'required|integer|in:1,2',
            'origin' => 'required|string|size:3',
            'destination' => 'required|string|size:3',
            'preferredDepartureTime' => 'required|date_format:Y-m-d\TH:i:s',
            'preferredReturnDepartureTime' => 'nullable|date_format:Y-m-d\TH:i:s',
            'flightCabinClass' => 'required|integer',
        ]);
    }

    /**
     * Process flight results with filtering and sorting
     */
    private function processFlightResults(array $results, Request $request, ?string $sortKey, ?string $traceId): array
    {
        return [
            'flights' => [
                'outboundFlights' => $this->appendFareRules(
                    $this->sortFlights($this->filterFlights($results['outboundFlights'] ?? [], $request), $sortKey),
                    $traceId
                ),
                'inboundFlights' => $this->appendFareRules(
                    $this->sortFlights($this->filterFlights($results['inboundFlights'] ?? [], $request), $sortKey),
                    $traceId
                ),
            ],
        ];
    }

    // private function appendFareRules(array $flights, string $traceId): array
    // {
    //     return collect($flights)->map(function ($flight) use ($traceId) {
    //         try {
    //             $resultIndex = $flight['resultIndex'] ?? null;
    //             if ($traceId && $resultIndex) {
    //                 $fareRulesResponse = Http::post(config('services.flight.fare_rules_endpoint'), [
    //                     'traceId' => $traceId,
    //                     'resultIndex' => $resultIndex
    //                 ]);

    //                 if ($fareRulesResponse->ok()) {
    //                     $fareRules = $fareRulesResponse->json('results')[0] ?? [];
    //                     $flight['fareRules'] = $fareRules['fareRuleDetail'] ?? null;
    //                 }
    //             }
    //         } catch (\Exception $e) {
    //             $flight['fareRules'] = null;
    //         }
    //         return $flight;
    //     })->toArray();
    // }

    private function appendFareRules(array $flights, string $traceId): array
    {
        return collect($flights)->map(function ($flight) use ($traceId) {
            try {
                if (empty($flight['fareRules']) && $traceId && !empty($flight['resultIndex'])) {
                    $fareRulesResponse = Http::timeout(3)
                        ->retry(2, 100)
                        ->post(config('services.flight.fare_rules_endpoint'), [
                            'traceId' => $traceId,
                            'resultIndex' => $flight['resultIndex']
                        ]);

                    if ($fareRulesResponse->successful()) {
                        $flight['fareRules'] = $fareRulesResponse->json('results.0.fareRuleDetail', []);
                    }
                }
            } catch (\Exception $e) {
                // Log error if needed
                $flight['fareRules'] = [];
            }

            // Ensure we always have an array
            $flight['fareRules'] = $flight['fareRules'] ?? [];

            return $flight;
        })->toArray();
    }

    /**
     * Filter flights based on request parameters
     */
    private function filterFlights(array $flights, Request $request): array
    {
        return collect($flights)->filter(function ($flight) use ($request) {
            if (empty($flight['sg'])) {
                return false;
            }

            $segment = $flight['sg'][0];

            // Stop filter
            if ($request->filled('stops')) {
                $stops = (int) $request->input('stops');
                $actualStops = count($flight['sg']) - 1;

                if ($stops === 2) {
                    if ($actualStops < 2) return false;
                } elseif ($actualStops !== $stops) {
                    return false;
                }
            }

            // Airline filter
            if (
                $request->filled('airlines') &&
                !in_array($segment['al']['alC'], (array) $request->input('airlines'))
            ) {
                return false;
            }

            // Refundable filter
            if (
                $request->filled('refundable') &&
                $flight['iR'] !== ($request->input('refundable') == 'true')
            ) {
                return false;
            }

            // Fare type filter
            if (
                $request->filled('fareType') &&
                $flight['fareIdentifier']['code'] !== $request->input('fareType')
            ) {
                return false;
            }

            // Price range filter
            $price = $flight['pF'] ?? 0;
            if ($request->filled('price_min') && $price < (int) $request->input('price_min')) return false;
            if ($request->filled('price_max') && $price > (int) $request->input('price_max')) return false;

            // Time filters
            $departureTime = Carbon::parse($segment['or']['dT']);
            $arrivalTime = Carbon::parse($segment['ds']['aT']);

            if ($request->filled('dep_from') && $departureTime->hour < (int) $request->input('dep_from')) return false;
            if ($request->filled('dep_to') && $departureTime->hour > (int) $request->input('dep_to')) return false;
            if ($request->filled('arr_from') && $arrivalTime->hour < (int) $request->input('arr_from')) return false;
            if ($request->filled('arr_to') && $arrivalTime->hour > (int) $request->input('arr_to')) return false;

            return true;
        })->values()->toArray();
    }

    /**
     * Sort flights based on criteria
     */
    private function sortFlights(array $flights, ?string $sort): array
    {
        $sortMap = [
            'price_low_high' => ['pF', 'asc'],
            'price_high_low' => ['pF', 'desc'],
            'duration_short' => ['sg.0.dr', 'asc'],
            'duration_long' => ['sg.0.dr', 'desc'],
            'early_departure' => ['sg.0.or.dT', 'asc'],
            'late_departure' => ['sg.0.or.dT', 'desc'],
            'early_arrival' => ['sg.0.ds.aT', 'asc'],
            'late_arrival' => ['sg.0.ds.aT', 'desc'],
        ];

        if (isset($sortMap[$sort])) {
            [$key, $direction] = $sortMap[$sort];
            return collect($flights)->sortBy($key, SORT_REGULAR, $direction === 'desc')->values()->toArray();
        }

        return $flights;
    }

    /**
     * Get total flight count from response
     */
    private function getTotalFlightsCount(array $response): int
    {
        return count($response['results']['outboundFlights'] ?? []) +
            count($response['results']['inboundFlights'] ?? []);
    }

    /**
     * Combine airline counts from inbound/outbound
     */
    private function getCombinedAirlineCounts(array $response): array
    {
        $outbound = collect($response['facets']['airlines']['outbound'] ?? []);
        $inbound = collect($response['facets']['airlines']['inbound'] ?? []);

        return $outbound->merge($inbound)
            ->groupBy('code')
            ->map(function ($flights) {
                return [
                    'code' => $flights[0]['code'],
                    'name' => $flights[0]['name'],
                    'count' => $flights->sum('count'),
                ];
            })
            ->values()
            ->toArray();
    }

    public function searchLocations(Request $request)
    {
        $searchTerm = $request->input('search');

        if (empty($searchTerm)) {
            return response()->json([]);
        }

        $locations = Locations::where('city', 'like', '%' . $searchTerm . '%')
            ->orWhere('country', 'like', '%' . $searchTerm . '%')
            ->take(10)
            ->get(['id', 'city', 'country']);

        return response()->json($locations);
    }
}
