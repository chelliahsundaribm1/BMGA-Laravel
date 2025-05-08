<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'postal_code',
        'icon',
        'favicon',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'tiktok',
        'meta_title',
        'meta_description',
    ];
} 
