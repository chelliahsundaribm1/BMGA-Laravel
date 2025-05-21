<?php

return [
    'base_url' => env('TRAVCLAN_BASE_URL'),
    'merchant_id' => env('TRAVCLAN_MERCHANT_ID'),
    'user_id' => env('TRAVCLAN_USER_ID'),
    'api_key' => env('TRAVCLAN_API_KEY'),
    'login_endpoint' => '/authentication/internal/service/login',
    'refresh_endpoint' => '/authentication/internal/service/refresh',
    'flight_search_url' => env('TRAVCLAN_FLIGHT_SEARCH_URL', 'https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/search'),
    'flight_fare_url' => env('TRAVCLAN_FARE_URL', 'https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/fare-rules'),
    'create_itinerary_url' => env('TRAVCLAN_CREATE_ITINERARY_URL', 'https://flight-aggregator-api-sandbox.travclan.com/api/v2/flights/itinerary'),

];
