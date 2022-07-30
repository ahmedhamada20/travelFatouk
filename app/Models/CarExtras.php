<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarExtras extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'car_id',
        'price',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
