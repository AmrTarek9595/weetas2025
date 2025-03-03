<?php

namespace App\Services;

use App\Models\SuggestedAmenity;
use Exception;

class AmenityService
{
    public function createAmenity(array $data)
    {
        try {
            // Create the Amenity
            $amenity = SuggestedAmenity::create($data);
            return ['status' => true, 'Amenity' => $amenity];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
