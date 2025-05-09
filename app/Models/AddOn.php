<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOn extends Model
{
    use HasFactory;
    protected $fillable = ['flight_itinerary_id', 'user_id', 'passenger_id', 'name', 'addon_type', 'description', 'amount', 'addon_type'];

    public function itinerary()
    {
        return $this->belongsTo(FlightItinerary::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }
}
