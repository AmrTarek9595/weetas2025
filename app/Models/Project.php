<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    //
    use SoftDeletes;

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
