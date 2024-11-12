<?php

namespace App\Database\Seeds;

use App\Modules\AdminDashboard\Models\CountiesModel;
use CodeIgniter\Database\Seeder;

class CountySeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents("data/counties_data.json");
        $counties = json_decode($json);

        foreach ($counties->counties as $key => $value) {
            $object = new CountiesModel();
            $object->insert([
                "county_code" => $value->code,
                "county_name" => $value->name,
                "county_capital" => $value->capital,
                "country_id" => $value->country_id
            ]);
        }
    }
}
