<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['sortname', 'name', 'phonecode'];

    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }
}
