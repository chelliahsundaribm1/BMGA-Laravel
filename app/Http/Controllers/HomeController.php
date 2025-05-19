<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\FlightClass;
use App\Models\Locations;
use App\Services\FlightService;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'locations' => Locations::all(),
            'airlines' => Airlines::paginate(6),
            'flightclass' => FlightClass::all(),
        ]);
    }

    public function aboutus() { return view('aboutus'); }
    public function contact() { return view('contact'); }
    public function hotel() { return view('hotel'); }
    public function car() { return view('car'); }
    public function cruise() { return view('cruise'); }
    public function tour() { return view('tour'); }
    public function comingsoon() { return view('comingsoon'); }

    public function flight()
    {
        $airlines = Airlines::withCount('flights')
            ->orderByDesc('flights_count')
            ->limit(24)
            ->get();

        return view('flight', compact('airlines'));
    }

    public function flightSearch(Request $request, FlightService $flightService)
    {
        $airlines = Airlines::withCount('flights')->orderByDesc('flights_count')->limit(24)->get();
        $airlineLogo = Airlines::all();
        $cabinClasses = FlightClass::all();
        $flightclass = FlightClass::all();


        $flights = [];
        $error = null;
        $traceId = null;
        $resultIds = [];
        $faresets = [];
        $totalFlightsCount = 0;
        $airlineFlightCounts = [];

        if ($request->has(['origin', 'destination'])) {
            try {
                $validated = $this->validateAndPrepareRequest($request);
                $result = $flightService->searchFlights($validated);

                if ($result['status']) {
                    $response = $result['data']['response'];
                    $traceId = $response['traceId'] ?? Str::uuid()->toString();
                    Cache::put("flight_results_{$traceId}", $response['results'], now()->addMinutes(30));

                    $resultIds = collect($response['results']['outboundFlights'] ?? [])
                        ->pluck('rI')
                        ->merge(collect($response['results']['inboundFlights'] ?? [])->pluck('rI'))
                        ->unique()
                        ->values()
                        ->toArray();

                    $processed = $this->processFlightResults($response['results'] ?? [], $request, $request->get('sort'), $traceId);
                    $flights = $processed['flights'];
                    $totalFlightsCount = $this->getTotalFlightsCount($response);
                    $airlineFlightCounts = $this->getCombinedAirlineCounts($response);
                    $faresets = $this->getFaresets($response);
                } else {
                    $error = $result['error']['errorMessage'] ?? 'Unknown error occurred';
                }
            } catch (\Illuminate\Validation\ValidationException $e) {
                $error = 'Invalid search parameters: ' . implode(', ', Arr::flatten($e->errors()));
            } catch (\Exception $e) {
                $error = 'An error occurred while searching for flights';
            }
        }
// dd(array_column($flights['outboundFlights'], 'sg'));
// dd($flights['outboundFlights'][210]);
        return view('flightsearch', compact(
            'airlines', 'flights', 'error', 'airlineLogo', 'totalFlightsCount',
            'airlineFlightCounts', 'traceId', 'resultIds', 'cabinClasses', 'faresets','flightclass'
        ))->with('sort', $request->get('sort'));
    }

    private function getFaresets(array $response): array
    {
        return collect($response['results']['outboundFlights'] ?? [])
            ->merge($response['results']['inboundFlights'] ?? [])
            ->unique('rI')
            ->values()
            ->toArray();
    }

    private function validateAndPrepareRequest(Request $request): array
    {
        $data = $request->all();

        $data['directFlight'] = filter_var($data['directFlight'] ?? false, FILTER_VALIDATE_BOOLEAN);

        foreach ([
            'adultCount' => 1, 'childCount' => 0, 'infantCount' => 0,
            'journeyType' => 1, 'flightCabinClass' => 1
        ] as $field => $default) {
            $data[$field] = (int)($data[$field] ?? $default);
        }

        $departureField = $data['journeyType'] == 2 ? 'multiPreferredDeparture' : 'preferredDepartureTime';

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

    private function processFlightResults(array $results, Request $request, ?string $sortKey, ?string $traceId): array
    {
        return [
            'flights' => [
                'outboundFlights' => $this->appendFareRules($this->sortFlights($this->filterFlights($results['outboundFlights'] ?? [], $request), $sortKey), $traceId),
                'inboundFlights' => $this->appendFareRules($this->sortFlights($this->filterFlights($results['inboundFlights'] ?? [], $request), $sortKey), $traceId),
            ],
        ];
    }

    private function appendFareRules(array $flights, string $traceId): array
    {
        return collect($flights)->map(function ($flight) use ($traceId) {
            try {
                if (empty($flight['fareRules']) && !empty($flight['resultIndex'])) {
                    $response = Http::timeout(3)->retry(2, 100)->post(
                        config('services.flight.fare_rules_endpoint'),
                        ['traceId' => $traceId, 'resultIndex' => $flight['resultIndex']]
                    );

                    if ($response->successful()) {
                        $flight['fareRules'] = $response->json('results.0.fareRuleDetail', []);
                    }
                }
            } catch (\Exception $e) {
                $flight['fareRules'] = [];
            }
            return $flight;
        })->toArray();
    }

    private function filterFlights(array $flights, Request $request): array
    {
        return collect($flights)->filter(function ($flight) use ($request) {
            if (empty($flight['sg'])) return false;

            $segment = $flight['sg'][0];
            $stops = (int)$request->input('stops');
            $actualStops = count($flight['sg']) - 1;

            if ($request->filled('stops')) {
                if ($stops === 2 && $actualStops < 2) return false;
                if ($stops !== 2 && $actualStops !== $stops) return false;
            }

            if ($request->filled('airlines') && !in_array($segment['al']['alC'], (array)$request->input('airlines'))) return false;
            if ($request->filled('refundable') && $flight['iR'] !== ($request->input('refundable') == 'true')) return false;
            if ($request->filled('fareType') && ($flight['fareIdentifier']['code'] ?? '') !== $request->input('fareType')) return false;

            $price = $flight['pF'] ?? 0;
            if ($request->filled('price_min') && $price < (int)$request->input('price_min')) return false;
            if ($request->filled('price_max') && $price > (int)$request->input('price_max')) return false;

            $departureTime = Carbon::parse($segment['or']['dT']);
            $arrivalTime = Carbon::parse($segment['ds']['aT']);

            if ($request->filled('dep_from') && $departureTime->hour < (int)$request->input('dep_from')) return false;
            if ($request->filled('dep_to') && $departureTime->hour > (int)$request->input('dep_to')) return false;
            if ($request->filled('arr_from') && $arrivalTime->hour < (int)$request->input('arr_from')) return false;
            if ($request->filled('arr_to') && $arrivalTime->hour > (int)$request->input('arr_to')) return false;

            return true;
        })->values()->toArray();
    }

    private function sortFlights(array $flights, ?string $sort): array
    {
        $map = [
            'price_low_high' => ['pF', 'asc'],
            'price_high_low' => ['pF', 'desc'],
            'duration_short' => ['sg.0.dr', 'asc'],
            'duration_long' => ['sg.0.dr', 'desc'],
            'early_departure' => ['sg.0.or.dT', 'asc'],
            'late_departure' => ['sg.0.or.dT', 'desc'],
            'early_arrival' => ['sg.0.ds.aT', 'asc'],
            'late_arrival' => ['sg.0.ds.aT', 'desc'],
        ];

        if (!isset($map[$sort])) return $flights;

        [$key, $dir] = $map[$sort];
        return collect($flights)->sortBy($key, SORT_REGULAR, $dir === 'desc')->values()->toArray();
    }

    private function getTotalFlightsCount(array $response): int
    {
        return count($response['results']['outboundFlights'] ?? []) + count($response['results']['inboundFlights'] ?? []);
    }

    private function getCombinedAirlineCounts(array $response): array
    {
        $outbound = collect($response['facets']['airlines']['outbound'] ?? []);
        $inbound = collect($response['facets']['airlines']['inbound'] ?? []);

        return $outbound->merge($inbound)
            ->groupBy('code')
            ->map(fn($flights) => [
                'code' => $flights[0]['code'],
                'name' => $flights[0]['name'],
                'count' => $flights->sum('count'),
            ])->values()->toArray();
    }

    public function showFlightDetails(Request $request, FlightService $flightService)
    {
        $request->validate([
            'traceId' => 'required|string',
            'resultIndex' => 'required|string',
        ]);

        $traceId = $request->traceId;
        $resultIndex = $request->resultIndex;
        $searchResults = Cache::get("flight_results_{$traceId}");

        if (!$searchResults) return back()->withErrors(['error' => 'Search session expired or not found.']);

        $flight = $flightService->getFlightFromSearchResults($searchResults, $resultIndex);
        if (!$flight) return back()->withErrors(['error' => 'Flight not found in search results.']);

        $fareResult = $flightService->getFareRules($traceId, $resultIndex);
        if (!$fareResult['status']) return back()->withErrors(['error' => 'Fare rules not found for the selected flight.']);

        return view('flightdetails', [
            'flight' => $flight,
            'traceId' => $traceId,
            'fareRules' => $fareResult['data'],
        ]);
    }

    public function searchLocations(Request $request)
    {
        $searchTerm = $request->input('search');
        if (empty($searchTerm)) return response()->json([]);

        return response()->json(
            Locations::where('city', 'like', "%{$searchTerm}%")
                ->orWhere('country', 'like', "%{$searchTerm}%")
                ->take(10)
                ->get(['id', 'city', 'country'])
        );
    }
}