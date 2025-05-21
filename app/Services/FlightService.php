<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FlightService
{
    protected TravClanAuthService $authService;

    public function __construct(TravClanAuthService $authService)
    {
        $this->authService = $authService;
    }

    private function travclanHeaders(string $token): array
    {
        return [
            'Authorization'       => 'Bearer ' . $token,
            'Authorization-Type'  => 'external-service',
            'Content-Type'        => 'application/json',
            'Accept'              => 'application/json; charset=utf-8',
            'source'              => 'website',
        ];
    }

    public function searchFlights(array $validated): array
    {
        $token = $this->authService->getAccessToken();

        if (!$token) {
            return [
                'status' => false,
                'error'  => 'Travclan access token not found.',
            ];
        }

        // Remove return time if one-way
        if ($validated['journeyType'] === 1) {
            unset($validated['preferredReturnDepartureTime']);
        }

        $url = config('travclan.flight_search_url');

        $response = Http::withHeaders($this->travclanHeaders($token))
            ->timeout(60)
            ->retry(2, 5000)
            ->post($url, $validated);

        if ($response->successful()) {
            return [
                'status' => true,
                'data'   => $response->json(),
            ];
        }

        return [
            'status' => false,
            'error'  => $response->json(),
        ];
    }

    public function getFlightFromSearchResults(array $results, string $resultIndex): ?array
    {
        $flights = collect($results['outboundFlights'] ?? [])
            ->merge($results['inboundFlights'] ?? []);

        return $flights->firstWhere('rI', $resultIndex);
    }


public function getFareRules(string $traceId, string $resultIndex): array
{
    $token = $this->authService->getAccessToken();
// dd($token);
    if (!$token) {
        return [
            'status' => false,
            'error' => 'Travclan access token not found.',
        ];
    }

    $payload = [
        'traceId' => $traceId,
        'resultIndex' => $resultIndex,
    ];

        $url = config('travclan.flight_fare_url');
// dd($url);
    $response = Http::withHeaders($this->travclanHeaders($token))
        ->timeout(10)
        ->retry(2, 200)
        ->post($url, $payload);

    if ($response->successful()) {
        return [
            'status' => true,
            'data' => $response->json('results.0.fareRuleDetail', []),
        ];
    }

    return [
        'status' => false,
        'error' => $response->json('errorMessage') ?? 'Failed to fetch fare rules',
    ];
}

public function createItinerary(array $items, string $traceId): array
{
    $token = $this->authService->getAccessToken();

    if (!$token) {
        return [
            'status' => false,
            'error' => 'Travclan access token not found.',
        ];
    }

    $payload = [
        'traceId' => $traceId,
        'items' => $items,
    ];
// dd($token, $payload);
    $url = config('travclan.create_itinerary_url');

    $response = Http::withHeaders($this->travclanHeaders($token))
        ->timeout(20)
        ->retry(2, 500)
        ->post($url, $payload);

        // dd($response);
    if ($response->successful()) {
        return [
            'status' => true,
            'data' => $response->json('results'),
        ];
    }

    return [
        'status' => false,
        'error' => $response->json('errorMessage') ?? 'Failed to create itinerary.',
    ];
}




    

}
