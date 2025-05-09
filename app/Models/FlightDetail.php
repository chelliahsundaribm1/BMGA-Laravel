<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'flight_itinerary_id',
        'flight_number',
        'origin',
        'destination',
        'airline_id',
        'departure_at',
        'arrival_at',
        'journey_type',
        'aircraft_type',
        'flight_duration'
    ];
    public function itinerary()
    {
        return $this->belongsTo(FlightItinerary::class);
    }
    public function airline()
    {
        return $this->belongsTo(Airlines::class);
    }
}
