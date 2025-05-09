<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bms_booking_code',
        'title',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'contact_number',
        'passport_number',
        'passport_expiry',
        'pax_type',
        'pax_fare',
        'nationality',
        'frequent_flyer_number'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'bms_booking_code', 'bms_booking_code');
    }
}
