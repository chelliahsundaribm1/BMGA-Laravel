<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TravClanService
{
    protected $baseUrl;
    protected $merchantId;
    protected $userId;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl    = config('travclan.base_url');
        $this->merchantId = config('travclan.merchant_id');
        $this->userId     = config('travclan.user_id');
        $this->apiKey     = config('travclan.api_key');
    }

    public function authenticate()
    {
        $response = Http::acceptJson()->post("{$this->baseUrl}/authentication/internal/service/login", [
            'merchant_id' => $this->merchantId,
            'user_id'     => $this->userId,
            'api_key'     => $this->apiKey,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('TravClan Auth Failed: ' . $response->body());
    }

    public function refreshToken($refreshToken)
    {
        $response = Http::acceptJson()->post("{$this->baseUrl}/authentication/internal/service/refresh", [
            'refresh_token' => $refreshToken,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('TravClan Refresh Token Failed: ' . $response->body());
    }
}
