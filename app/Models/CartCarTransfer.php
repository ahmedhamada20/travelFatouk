<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartCarTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'name',
        'data',
        'time',
        'adult_number',
        'child_number',
        'bage',
        'way_type',
        'extra',
        'price',
        'route_form',
        'route_to',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
