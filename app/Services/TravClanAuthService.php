<?php

namespace App\Services;

use App\Models\ApiToken;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

class TravClanAuthService
{
    protected string $baseUrl;
    protected string $merchantId;
    protected string $userId;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('travclan.base_url');
        $this->merchantId = config('travclan.merchant_id');
        $this->userId = config('travclan.user_id');
        $this->apiKey = config('travclan.api_key');
    }

    public function getAccessToken(): string
    {
        $token = ApiToken::where('provider', 'travclan')->first();

        if ($this->isTokenValid($token)) {
            return $token->access_token;
        }

        return $this->refreshOrFetchNewToken($token);
    }

    protected function isTokenValid(?ApiToken $token): bool
    {
        try {
            return $token && $token->expires_at && $token->expires_at->gt(now()->addMinute());
        } catch (\Throwable $e) {
            Log::warning('Token validation failed', ['exception' => $e]);
            return false;
        }
    }

    protected function refreshOrFetchNewToken(?ApiToken $token): string
    {
        if ($token && $token->refresh_token) {
            return $this->refreshAccessToken($token->refresh_token);
        }

        return $this->fetchNewAccessToken();
    }

    protected function fetchNewAccessToken(): string
    {
        $url = $this->baseUrl . config('travclan.login_endpoint');

        $response = Http::acceptJson()->post($url, [
            'merchant_id' => $this->merchantId,
            'user_id'     => $this->userId,
            'api_key'     => $this->apiKey,
        ]);

        if ($response->successful()) {
            return $this->storeTokenData($response->json());
        }

        Log::error('TravClan token fetch failed', ['response' => $response->body()]);
        throw new Exception('Failed to fetch access token.');
    }

    protected function refreshAccessToken(string $refreshToken): string
    {
        $url = $this->baseUrl . config('travclan.refresh_endpoint');

        $response = Http::acceptJson()->post($url, [
            'refresh_token' => $refreshToken,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return $this->storeTokenData($data, $data['RefreshToken'] ?? $refreshToken);
        }

        Log::warning('TravClan token refresh failed, falling back to new login', ['response' => $response->body()]);
        return $this->fetchNewAccessToken();
    }

    protected function storeTokenData(array $data, ?string $refreshToken = null): string
    {
        $accessToken = $data['AccessToken'] ?? null;
        $refreshToken = $data['RefreshToken'] ?? $refreshToken;
        $expiresIn = $data['expires_in'] ?? 3600;

        if (!$accessToken) {
            Log::error('Access token missing in TravClan response', $data);
            throw new Exception('Access Token is missing in the API response.');
        }

        ApiToken::updateOrCreate(
            ['provider' => 'travclan'],
            [
                'access_token'  => $accessToken,
                'refresh_token' => $refreshToken,
                'expires_at'    => now()->addSeconds($expiresIn),
            ]
        );

        Log::info('TravClan token stored/updated successfully');
        return $accessToken;
    }
}
