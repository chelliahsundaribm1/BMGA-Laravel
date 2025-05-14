<?php

namespace App\Http\Controllers;

use App\Models\ApiToken;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FlightsController extends Controller
{
    private function getTravclanToken()
    {
        return ApiToken::where('provider', 'travclan')->first()?->access_token;
        
    }

    private function travclanHeaders($token): array
    {
        return [
            'Authorization' => 'Bearer ' . $token,
            'Authorization-Type' => 'external-service',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json; charset=utf-8',
            'source' => 'website',
        ];
    }

    private function respond($response, $successMessage = null)
    {
        if ($response->successful()) {
            return response()->json([
                'status' => true,
                'message' => $successMessage ?? 'Success',
                'data' => $response->json()
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'API Error',
            'error' => $response->json()
        ], $response->status());
    }


       public function searchFlights(Request $request)
    {
        
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
            'flightCabinClass' => 'required|integer|in:1,2,3',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        $payload = $validated;
        if ($validated['journeyType'] === 1) {
            unset($payload['preferredReturnDepartureTime']);
        }

        $response = Http::withHeaders($this->travclanHeaders($token))
            ->post('https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/search', $payload);

        return $this->respond($response, 'Flights retrieved successfully');
    }


    public function getFareRules(Request $request)
    {
        $validated = $request->validate([
            'traceId' => 'required|string',
            'resultIndex' => 'required|string',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        $response = Http::withHeaders($this->travclanHeaders($token))
            ->post('https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/fare-rules', $validated);

        return $this->respond($response, 'Fare rules retrieved successfully');
    }

    public function createItinerary(Request $request)
    {
        $validated = $request->validate([
            'traceId' => 'required|string',
            'items' => 'required|array',
            'items.*.type' => 'required|string',
            'items.*.resultIndex' => 'required|string',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        $response = Http::withHeaders($this->travclanHeaders($token))
            ->post('https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/itinerary', $validated);

        return $this->respond($response, 'Itinerary created successfully');
    }

    public function getItinerary(Request $request, $itineraryCode)
    {
        $request->validate([
            'traceId' => 'required|string',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        $traceId = $request->query('traceId');

        $response = Http::withHeaders($this->travclanHeaders($token))
            ->get("https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/itinerary/{$itineraryCode}", [
                'traceId' => $traceId,
            ]);

        return $this->respond($response, 'Itinerary fetched successfully');
    }

    public function storePassengerCollection(Request $request, $itineraryCode)
    {
        $validated = $request->validate([
            'traceId' => 'required|string',
            'passengers' => 'required|array|min:1',
            'passengers.*.title' => 'required|string',
            'passengers.*.firstName' => 'required|string',
            'passengers.*.lastName' => 'required|string',
            'passengers.*.passportNumber' => 'required|string',
            'passengers.*.passportExpiry' => 'required|date',
            'passengers.*.gender' => 'required|string',
            'passengers.*.isLeadPax' => 'required|boolean',
            'passengers.*.paxType' => 'required|integer',
            'passengers.*.addressLineOne' => 'required|string',
            'passengers.*.addressLineTwo' => 'required|string',
            'passengers.*.city' => 'required|string',
            'passengers.*.cellCountryCode' => 'required|string',
            'passengers.*.contactNumber' => 'required|string',
            'passengers.*.countryCode' => 'required|string',
            'passengers.*.countryName' => 'required|string',
            'passengers.*.dateOfBirth' => 'required|date',
            'passengers.*.email' => 'required|email',
            'passengers.*.frequentFlyerAirlineCode' => 'nullable|string',
            'passengers.*.frequentFlyerNumber' => 'nullable|string',
            'passengers.*.gstCompanyAddress' => 'required|string',
            'passengers.*.gstCompanyContactNumber' => 'required|string',
            'passengers.*.gstCompanyEmail' => 'required|email',
            'passengers.*.gstCompanyName' => 'required|string',
            'passengers.*.gstNumber' => 'required|string',
            'passengers.*.nationality' => 'required|string',
            'passengers.*.ssr' => 'nullable|array',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        try {
            $url = "https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/itinerary/{$itineraryCode}/passenger-collections";

            $response = Http::withHeaders($this->travclanHeaders($token))
                ->post($url, $validated);

            return $this->respond($response, 'Passenger collection saved successfully');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Exception occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }



    public function reprice(Request $request, $itineraryCode)
    {
        $validated = $request->validate([
            'traceId' => 'required|string',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        $url = "https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/itinerary/{$itineraryCode}/fare-quote";

        $response = Http::withHeaders($this->travclanHeaders($token))
            ->post($url, ['traceId' => $validated['traceId']]);

        return $this->respond($response, 'Fare quote retrieved successfully');
    }


    public function bookFlight(Request $request, $itineraryCode)
    {
        $validated = $request->validate([
            'traceId' => 'required|string',
            'isPriceChangeAccepted' => 'required|boolean',
        ]);

        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        try {
            $url = "https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/itinerary/{$itineraryCode}/book";

            $response = Http::withHeaders($this->travclanHeaders($token))
                ->post($url, $validated);

            return $this->respond($response, 'Flight booked successfully');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Exception occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function getBookingDetails($bookingCode)
    {
        $token = $this->getTravclanToken();
        if (!$token) {
            return response()->json(['error' => 'Travclan access token not found.'], 401);
        }

        try {
            $url = "https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/bookings/{$bookingCode}";

            $response = Http::withHeaders($this->travclanHeaders($token))
                ->get($url);

            return $this->respond($response, 'Booking details fetched successfully');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Exception occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function getWalletBalance()
    {
        try {
            $token = $this->getTravclanToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Authorization-Type' => 'external-service',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'source' => 'website',
            ])->get('https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/wallet');

            if ($response->successful()) {
                return response()->json([
                    'wallet_balance' => $response->json(),
                ]);
            }

            return response()->json([
                'error' => $response->json(),
            ], $response->status());
        } catch (\Exception $e) {
            Log::error('Wallet balance fetch failed: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }


    public function showFlightResults(Request $request)
{
    $validated = $request->validate([
        'Radio' => 'required|in:oneway,roundtrip',
        'quantity' => 'required|array|min:1|max:3',
        'cabin-class' => 'required|in:Economy,Business,First'
    ]);

    // Map UI inputs to API structure
    $journeyType = $validated['Radio'] === 'oneway' ? 1 : 2;
    $flightCabinClass = match($validated['cabin-class']) {
        'Economy' => 1,
        'Business' => 2,
        'First' => 3,
    };

    $payload = [
        'directFlight' => false, // or true based on user input
        'adultCount' => (int) $validated['quantity'][0] ?? 1,
        'childCount' => (int) $validated['quantity'][1] ?? 0,
        'infantCount' => (int) $validated['quantity'][2] ?? 0,
        'journeyType' => $journeyType,
        'origin' => 'DEL', // Placeholder – replace with real input
        'destination' => 'DXB', // Placeholder – replace with real input
        'preferredDepartureTime' => now()->addDays(7)->format('Y-m-d\TH:i:s'),
        'preferredReturnDepartureTime' => $journeyType === 2 ? now()->addDays(14)->format('Y-m-d\TH:i:s') : null,
        'flightCabinClass' => $flightCabinClass,
    ];

    $token = $this->getTravclanToken();
    if (!$token) {
        return back()->with('error', 'Travclan token not available');
    }

    if ($journeyType === 1) {
        unset($payload['preferredReturnDepartureTime']);
    }

    $response = Http::withHeaders($this->travclanHeaders($token))
        ->post('https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/search', $payload);

    $flights = $response->json()['data'] ?? [];

    return view('user.flights', compact('flights'));
}

}
