<?php

namespace App\Database\Seeds;

use App\Modules\AdminDashboard\Models\CountriesModel;
use CodeIgniter\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents("data/countries_data.json");
        $countries = json_decode($json);

        foreach ($countries->countries as $key => $value) {
            $object = new CountriesModel();
            $object->insert([
                "country_code" => $value->code,
                "country_name" => $value->name
            ]);
        }
    }
}
