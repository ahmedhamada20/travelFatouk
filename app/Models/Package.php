<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name','notes'];


    protected $fillable = [
        'name',
        'notes',
        'price',
        'rate',
        'before_price',
    ];
    public function included()
    {
        return$this->hasMany(Included::class,'packages_id');
    }
    public function excluded()
    {
        return$this->hasMany(Excluded::class,'packages_id');
    }

    public function additional()
    {
        return$this->hasMany(Additional::class,'packages_id');
    }

    public function MoreDtails()
    {
        return$this->hasMany(MoreDetails::class,'packages_id');
    }
    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function extras()
    {
        return $this->belongsToMany(Extra::class, 'packages_extras','packages_id','extras_id');
    }

    public function dates()
    {
        return $this->belongsToMany(Dates::class, 'packages_dates','packages_id','dates_id');
    }

    public function trips()
    {
        return $this->belongsToMany(Trips::class, 'packages_trips','packages_id','trips_id');
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class, 'packages_transfers','packages_id','transfers_id');
    }


}
