<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'jop',
    ];
    protected $fillable = [
        'name',
        'jop',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
