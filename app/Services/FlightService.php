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
}
