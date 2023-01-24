<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'checkin_at',
        'location_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'checkin_at' => 'date',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
