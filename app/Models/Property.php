<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    //

    use SoftDeletes;

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
        'published',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(SuggestedAmenity::class, 'property_amenities', 'property_id', 'amenity_id')->withTimestamps();
    }

}
