<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\FlightClass;
use App\Models\Locations;
use App\Services\FlightService;
use DateTime;
use Illuminate\Http\Request;

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

    public function flightsearch(Request $request, FlightService $flightService)
    {
        $airlines = Airlines::withCount('flights')->orderByDesc('flights_count')->limit(24)->get();
        $flights = null;
        $error = null;
        $airlinelogo = Airlines::all();

        if ($request->has('origin') && $request->has('destination')) {
            // Validate input
            $data = $request->all();
            // Cast boolean
            if (isset($data['directFlight'])) {
                $data['directFlight'] = filter_var($data['directFlight'], FILTER_VALIDATE_BOOLEAN);
            }

            // Cast numbers
            $data['adultCount'] = isset($data['adultCount']) ? (int) $data['adultCount'] : 0;
            $data['childCount'] = isset($data['childCount']) ? (int) $data['childCount'] : 0;
            $data['infantCount'] = isset($data['infantCount']) ? (int) $data['infantCount'] : 0;
            $data['journeyType'] = isset($data['journeyType']) ? (int) $data['journeyType'] : 1;
            $data['flightCabinClass'] = isset($data['flightCabinClass']) ? (int) $data['flightCabinClass'] : 1;

            // Determine which departure field to use based on journeyType
            $departureField = ($data['journeyType'] == 2) ? 'multiPreferredDeparture' : 'preferredDepartureTime';

            // Process dates
            foreach ([$departureField, 'preferredReturnDepartureTime'] as $key) {
                if (!empty($data[$key]) && !preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/', $data[$key])) {
                    $parsed = DateTime::createFromFormat('d-m-Y', $data[$key]);
                    $data[$key] = $parsed ? $parsed->format('Y-m-d\TH:i:s') : null;
                }
            }

            // Inject cleaned values back into request for validation
            $request->merge($data);

            $validated = $request->validate([
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

            $result = $flightService->searchFlights($validated);
            $flights = []; // <-- Default to empty array
            $error = null;

            // if ($result['status']) {
            //     $flights = $result['data']['response']['results']['outboundFlights'] ?? [];
            // } else {
            //     $error = $result['status'] ? null : ($result['error']['errorMessage'] ?? 'Unknown error');
            // }

            // Sort the flights based on the requested sort option
          if ($result['status']) {
            $response = $result['data']['response'];
            $sortKey = $request->get('sort');

            $outbound = $response['results']['outboundFlights'] ?? [];
            $inbound = $response['results']['inboundFlights'] ?? [];

            $flights = [
                'outboundFlights' => $this->sortFlights($outbound, $sortKey),
                'inboundFlights' => $this->sortFlights($inbound, $sortKey),
            ];

            // 👉 Total flight count
            $totalFlightsCount = count($outbound) + count($inbound);

            // 👉 Combine inbound and outbound airline facet data
            $outboundAirlines = collect($response['facets']['airlines']['outbound'] ?? []);
            $inboundAirlines = collect($response['facets']['airlines']['inbound'] ?? []);

            $airlineFlightCounts = $outboundAirlines
                ->merge($inboundAirlines)
                ->groupBy('code')
                ->map(function ($flights) {
                    return [
                        'code' => $flights[0]['code'],
                        'name' => $flights[0]['name'],
                        'count' => $flights->sum('count'),
                    ];
                })->values()->toArray();

        } else {
            $error = $result['error']['errorMessage'] ?? 'Unknown error';
            $totalFlightsCount = 0;
            $airlineFlightCounts = [];
        }


        // return view('flightsearch', compact('airlines', 'flights', 'error', 'airlinelogo'));
        return view('flightsearch', compact('airlines', 'flights', 'error', 'airlinelogo', 'totalFlightsCount', 'airlineFlightCounts'))->with('sort', $request->get('sort'));

    }
}

    private function sortFlights(array $flights, ?string $sort): array
    {
        return match ($sort) {
            'price_low_high' => collect($flights)->sortBy('pF')->values()->toArray(),
            'price_high_low' => collect($flights)->sortByDesc('pF')->values()->toArray(),
            'newest' => collect($flights)->sortByDesc(fn($f) => $f['sg'][0]['or']['dT'] ?? '')->values()->toArray(),
            default => $flights, 
        };
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
