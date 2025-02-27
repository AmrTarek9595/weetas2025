<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'location',
        'built_year',
        'country_id',
        'city_id',
    ];
}
