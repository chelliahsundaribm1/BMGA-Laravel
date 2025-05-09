<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingBreakdown extends Model
{
    use HasFactory;
    protected $fillable = ['flight_itinerary_id', 'type', 'amount'];
    public function itinerary()
    {
        return $this->belongsTo(FlightItinerary::class);
    }
}
