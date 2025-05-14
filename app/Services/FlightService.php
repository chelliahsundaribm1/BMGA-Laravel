<?php

namespace App\Services;

use App\Models\ApiToken;
use Illuminate\Support\Facades\Http;
use Exception;

class FlightService
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


    public function searchFlights(array $validated)
{
    $token = $this->getTravclanToken();
    if (!$token) {
        return [
            'status' => false,
            'error' => 'Travclan access token not found.'
        ];
    }

    $payload = $validated;
    if ($validated['journeyType'] === 1) {
        unset($payload['preferredReturnDepartureTime']);
    }

    $response = Http::withHeaders($this->travclanHeaders($token))
        ->post('https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/search', $payload);

    if ($response->successful()) {
        return [
            'status' => true,
            'data' => $response->json()
        ];
    }

    return [
        'status' => false,
        'error' => $response->json()
    ];
}

}
