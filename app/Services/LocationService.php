<?php

namespace App\Services;

use App\Models\Location;
use Exception;

class LocationService
{
    public function createLocation(array $data)
    {
        try {
            // Create the location
            $location = Location::create($data);
            return ['status' => true, 'Location' => $location];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
