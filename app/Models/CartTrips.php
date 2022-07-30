<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartTrips extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'time',
        'adult_number',
        'child_number',
        'trips_id',
    ];

    public function trips()
    {
        return $this->belongsTo(Trips::class,'trips_id');
    }
}
