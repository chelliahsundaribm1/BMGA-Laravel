<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'iata_code', 'logo_url'];
    public $timestamps = false;

    public function flights()
{
    return $this->hasMany(FlightDetail::class, 'airline_id');
}
}
