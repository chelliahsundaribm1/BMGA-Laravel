<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $fillable = [
        'provider', 'access_token', 'refresh_token', 'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];
}
