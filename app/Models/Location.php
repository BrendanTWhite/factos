<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

     protected $fillable = ['description'];

    protected $casts = [
        'starred_at'      => 'datetime',
        'last_visited_at' => 'datetime',
    ];

/**
 * Interact with the location's starred flag.
 *
 * @return  \Illuminate\Database\Eloquent\Casts\Attribute
 */
protected function isStarred(): Attribute
{
    return Attribute::make(
        
        get: fn ($value, $attributes) => 
            ( $attributes['starred_at'] ) ? true : false,

        set: fn ($value) => 
             ['starred_at' => ($value) ? Carbon::now() : null ],

    );
}

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }

}
