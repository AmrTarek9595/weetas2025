<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'town',
        'city',
        'latitude',
        'longitude',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

}
