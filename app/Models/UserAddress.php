<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'country_id',
        'state_id',
        'city_id',
        'postal_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
