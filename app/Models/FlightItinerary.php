<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightItinerary extends Model
{
    use HasFactory;
    protected $fillable = [
        'bms_booking_code',
        'user_id',
        'itinerary_id',
        'pax_count',
        'adult_count',
        'child_count',
        'infant_count',
        'total_amount',
        'insurance_amount',
        'base_fare',
        'tax_and_surcharge',
        'tc_discount',
        'is_domestic'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'bms_booking_code', 'bms_booking_code');
    }
    public function pricingBreakdowns()
    {
        return $this->hasMany(PricingBreakdown::class);
    }
    public function details()
    {
        return $this->hasMany(FlightDetail::class);
    }
    public function addOns()
    {
        return $this->hasMany(AddOn::class);
    }
}
