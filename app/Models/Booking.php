<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'bms_booking_code',
        'user_id',
        'booking_type_id',
        'reference_id',
        'traveler_details',
        'booking_status',
        'payment_status',
        'cancellation_status',
        'booking_date',
        'total_amount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function passengers()
    {
        return $this->hasMany(Passenger::class, 'bms_booking_code', 'bms_booking_code');
    }
    public function itineraries()
    {
        return $this->hasMany(FlightItinerary::class, 'bms_booking_code', 'bms_booking_code');
    }
}
