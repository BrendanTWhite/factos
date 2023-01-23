<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $casts = [
        'starred_at'      => 'datetime',
        'last_visited_at' => 'datetime',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }

}
