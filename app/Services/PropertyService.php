<?php

namespace App\Services;

use App\Models\Property;
use Exception;

class PropertyService
{
    public function createProperty(array $data)
    {
        try {
            // Create the property
            $property = Property::create($data);

            //amenities if user insert
            if (!empty($data['amenities'])) {
                $property->amenities()->attach($data['amenities'], ['created_at' => now(), 'updated_at' => now()]);
            }

            return ['status' => true, 'property' => $property];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
