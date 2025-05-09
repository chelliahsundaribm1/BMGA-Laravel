<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraceId extends Model
{
    use HasFactory;
    protected $fillable = ['trace_id', 'user_id', 'remaining_time', 'expires_at'];
    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
        'expires_at' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
