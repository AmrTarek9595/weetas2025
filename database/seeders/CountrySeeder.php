<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $countries = [
            ['country_code' => 971, 'country_enName' => 'United Arab Emirates', 'country_arName' => 'الإمارات العربية المتحدة', 'country_enNationality' => 'Emirati', 'country_arNationality' => 'إماراتي'],
            ['country_code' => 973, 'country_enName' => 'Bahrain', 'country_arName' => 'البحرين', 'country_enNationality' => 'Bahraini', 'country_arNationality' => 'بحريني'],
            ['country_code' => 20, 'country_enName' => 'Egypt', 'country_arName' => 'مصر', 'country_enNationality' => 'Egyptian', 'country_arNationality' => 'مصري'],
            ['country_code' => 964, 'country_enName' => 'Iraq', 'country_arName' => 'العراق', 'country_enNationality' => 'Iraqi', 'country_arNationality' => 'عراقي'],
            ['country_code' => 962, 'country_enName' => 'Jordan', 'country_arName' => 'الأردن', 'country_enNationality' => 'Jordanian', 'country_arNationality' => 'أردني'],
            ['country_code' => 965, 'country_enName' => 'Kuwait', 'country_arName' => 'الكويت', 'country_enNationality' => 'Kuwaiti', 'country_arNationality' => 'كويتي'],
            ['country_code' => 961, 'country_enName' => 'Lebanon', 'country_arName' => 'لبنان', 'country_enNationality' => 'Lebanese', 'country_arNationality' => 'لبناني'],
            ['country_code' => 218, 'country_enName' => 'Libya', 'country_arName' => 'ليبيا', 'country_enNationality' => 'Libyan', 'country_arNationality' => 'ليبي'],
            ['country_code' => 212, 'country_enName' => 'Morocco', 'country_arName' => 'المغرب', 'country_enNationality' => 'Moroccan', 'country_arNationality' => 'مغربي'],
            ['country_code' => 968, 'country_enName' => 'Oman', 'country_arName' => 'عمان', 'country_enNationality' => 'Omani', 'country_arNationality' => 'عماني'],
            ['country_code' => 970, 'country_enName' => 'Palestine', 'country_arName' => 'فلسطين', 'country_enNationality' => 'Palestinian', 'country_arNationality' => 'فلسطيني'],
            ['country_code' => 974, 'country_enName' => 'Qatar', 'country_arName' => 'قطر', 'country_enNationality' => 'Qatari', 'country_arNationality' => 'قطري'],
            ['country_code' => 966, 'country_enName' => 'Saudi Arabia', 'country_arName' => 'المملكة العربية السعودية', 'country_enNationality' => 'Saudi', 'country_arNationality' => 'سعودي'],
            ['country_code' => 249, 'country_enName' => 'Sudan', 'country_arName' => 'السودان', 'country_enNationality' => 'Sudanese', 'country_arNationality' => 'سوداني'],
            ['country_code' => 963, 'country_enName' => 'Syria', 'country_arName' => 'سوريا', 'country_enNationality' => 'Syrian', 'country_arNationality' => 'سوري'],
            ['country_code' => 216, 'country_enName' => 'Tunisia', 'country_arName' => 'تونس', 'country_enNationality' => 'Tunisian', 'country_arNationality' => 'تونسي'],
            ['country_code' => 967, 'country_enName' => 'Yemen', 'country_arName' => 'اليمن', 'country_enNationality' => 'Yemeni', 'country_arNationality' => 'يمني'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
