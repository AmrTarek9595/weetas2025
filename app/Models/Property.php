<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = [
        'referance_id',
        'type',
        'rentOrSale',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'price',
        'area',
        'bedroom',
        'bathroom',
        'category_en',
        'category_ar',
        'user_id',
        'location_id',
        'project_id',
        'google_maps',
    ];
}
