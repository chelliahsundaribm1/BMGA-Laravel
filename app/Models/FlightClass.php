<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightClass extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'baggage_info', 'extra_charge'];
    public $timestamps = false;
}
