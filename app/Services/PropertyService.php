<?php

namespace App\Services;

use App\Models\Property;
use Exception;

class PropertyService
{
    public function createProperty(array $data)
    {
        try {

            $property = Property::create($data);

            if($data['published'] == 1){
                $property->referance_id='RR-'.$property->id;
                $property->save();
            }else if($data['published'] == 0){
                $property->referance_id='TEMP-'.$property->id;
                $property->save();
            }

            //amenities if user insert
            if (!empty($data['amenities'])) {
                $property->amenities()->attach($data['amenities'], ['created_at' => now(), 'updated_at' => now()]);
            }

            // Save property images if provided
            if (!empty($data['images'])) {
                foreach ($data['images'] as $image) {
                    $path = $image->store('property_images', 'public'); // Store in storage/app/public/property_images
                    $property->images()->create(['image_path' => 'storage/' . $path]);
                }
            }

            return ['status' => true, 'property' => $property];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
