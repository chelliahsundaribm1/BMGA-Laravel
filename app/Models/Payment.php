<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'amount',
        'payment_status',
        'payment_method',
        'transaction_id',
        'gateway_response'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
