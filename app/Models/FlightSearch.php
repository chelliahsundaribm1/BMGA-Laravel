<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightSearch extends Model
{
    protected $fillable = [
        'direct_flight',
        'adult_count',
        'child_count',
        'infant_count',
        'journey_type',
        'origin',
        'destination',
        'preferred_departure_time',
        'preferred_return_departure_time',
        'flight_cabin_class',
    ];
}
