<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'notes', 'description'];

    protected $fillable = [
        'logo',
        'footer_image',
        'transfer_image',
        'footer_logo',
        'footer_image_link',
        'name',
        'phone',
        'email',
        'notes',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'YouTube',
        'seo',
        'url',
        'description',
        'Fax',
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
