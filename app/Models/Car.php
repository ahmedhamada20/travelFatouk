<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Car extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'name',
        'notes',
        'conslshen',
    ];

    protected $fillable = [
        'name',
        'notes',
        'conslshen',
        'car_type',
        'price_back',
        'car_model',
        'price',
    ];



    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
    public function carsTransfer()
    {
        return $this->belongsToMany(Transfer::class, 'transfer_car', 'car_id', 'transfer_id');
    }
    public function extra_car()
    {
        return $this->hasMany(CarExtras::class, 'car_id');
    }
}
