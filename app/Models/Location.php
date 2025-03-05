<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'town',
        'city',
        'latitude',
        'longitude',
    ];
}
