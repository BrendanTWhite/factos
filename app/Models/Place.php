<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

}
