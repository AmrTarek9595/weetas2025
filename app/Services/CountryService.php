<?php

namespace App\Services;

use App\Models\Country;
use Exception;

class CountryService
{
    public function createCountry(array $data)
    {
        try {
            // Create the country
            $country = Country::create($data);
            return ['status' => true, 'Country' => $country];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
