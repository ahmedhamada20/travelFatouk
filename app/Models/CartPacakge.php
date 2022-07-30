<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartPacakge extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
        'time',
        'adult_number',
        'child_number',
        'packages_id',
    ];

    public function packages()
    {
        return $this->belongsTo(Package::class, 'packages_id');
    }
}
