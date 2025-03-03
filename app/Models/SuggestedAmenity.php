<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuggestedAmenity extends Model
{
    //

    protected $fillable = [
        'name_en',
        'name_ar',
        'icon'
    ];
}
