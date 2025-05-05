<?php

namespace App\Services;

use App\Models\ApiToken;
use Illuminate\Support\Facades\Http;
use Exception;

class TravClanAuthService
{
    protected $baseUrl;
    protected $merchantId;
    protected $userId;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('travclan.base_url');
        $this->merchantId = config('travclan.merchant_id');
        $this->userId = config('travclan.user_id');
        $this->apiKey = config('travclan.api_key');
    }

    /**
     * Get Access Token (either from DB or by fetching a new one)
     *
     * @return string
     */
    public function getAccessToken()
    {
        $token = ApiToken::where('provider', 'travclan')->first();

        // Check if a valid token exists
        if ($this->isTokenValid($token)) {
            return $token->access_token;
        }

        // Refresh token if available or fetch a new one
        return $this->refreshOrFetchNewToken($token);
    }

    /**
     * Check if the existing token is still valid
     *
     * @param ApiToken|null $token
     * @return bool
     */
    protected function isTokenValid($token)
    {
        return $token && $token->expires_at && $token->expires_at->gt(now()->addMinutes(1));
    }

    /**
     * Refresh the token if a refresh token exists or fetch a new one
     *
     * @param ApiToken|null $token
     * @return string
     */
    protected function refreshOrFetchNewToken($token)
    {

        if ($token && $token->refresh_token) {
            return $this->refreshAccessToken($token->refresh_token);
        }

        return $this->fetchNewAccessToken();
    }

    /**
     * Fetch a new access token from the TravClan API
     *
     * @return string
     * @throws Exception
     */
    protected function fetchNewAccessToken()
    {
        $response = Http::acceptJson()->post("{$this->baseUrl}/authentication/internal/service/login", [
            'merchant_id' => $this->merchantId,
            'user_id' => $this->userId,
            'api_key' => $this->apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            \Log::info('TravClan token response:', $data); // Add this for debugging
            return $this->storeTokenData($data);
        }

        throw new Exception('Failed to fetch token: ' . $response->body());
    }

    /**
     * Refresh the access token using the provided refresh token
     *
     * @param string $refreshToken
     * @return string
     * @throws Exception
     */
    protected function refreshAccessToken($refreshToken)
    {
        $response = Http::acceptJson()->post("{$this->baseUrl}/authentication/internal/service/refresh", [
            'refresh_token' => $refreshToken,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return $this->storeTokenData($data, $refreshToken);
        }

        // Fallback to fetching a new token
        return $this->fetchNewAccessToken();
    }

    /**
     * Store the fetched or refreshed token data
     *
     * @param array $data
     * @param string|null $refreshToken
     * @return string
     */
    protected function storeTokenData($data, $refreshToken = null)
    {
        // Log the data to check its structure
        \Log::info('Storing token data:', $data);
        
        // Access the correct keys from the response
        $accessToken = $data['AccessToken'] ?? null;
        $refreshToken = $data['RefreshToken'] ?? $refreshToken;
        $expiresIn = $data['expires_in'] ?? 3600; // default to 3600 seconds if not set
    
        if (!$accessToken) {
            throw new Exception('Access Token is missing in the API response.');
        }
    
        ApiToken::updateOrCreate(
            ['provider' => 'travclan'],
            [
                'access_token' => $accessToken,
                'refresh_token' => $refreshToken,
                'expires_at' => now()->addSeconds($expiresIn),
            ]
        );
    
        return $accessToken;
    }
    
}
