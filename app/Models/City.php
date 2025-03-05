<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'country_id',
    ];
}
