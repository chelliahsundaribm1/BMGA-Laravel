<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
 public function searchAirports(Request $request)
    {
        $query = $request->input('q');
        
        if (strlen($query) < 2) {
            return response()->json([]);
        }

        $airports = Airport::where('airport_name', 'like', "%{$query}%")
            ->orWhere('airport_code', 'like', "%{$query}%")
            ->orWhere('city_name', 'like', "%{$query}%")
            ->orWhere('country_name', 'like', "%{$query}%")
            ->limit(10)
            ->get();

        return response()->json($airports->map(function ($airport) {
            return [
                'airport_name' => $airport->airport_name,
                'airport_code' => $airport->airport_code,
                'city_name' => $airport->city_name,
                'country_name' => $airport->country_name,
                // Include other fields if needed for display
            ];
        }));
    }

}
