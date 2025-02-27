<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'country_code',
        'country_enName',
        'country_arName',
        'country_enNationality',
        'country_arNationality'
    ];
}
