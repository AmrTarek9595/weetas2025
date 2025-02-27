<?php

namespace App\Services;

use App\Models\City;
use Exception;

class CityService
{
    public function createCity(array $data)
    {
        try {
            // Create the city
            $city = City::create($data);
            return ['status' => true, 'city' => $city];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
