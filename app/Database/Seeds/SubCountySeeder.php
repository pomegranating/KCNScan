<?php

namespace App\Database\Seeds;

use App\Modules\AdminDashboard\Models\SubCountiesModel;
use CodeIgniter\Database\Seeder;

class SubCountySeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents("data/subcounties_data.json");
        $subcounties = json_decode($json);

        foreach ($subcounties->subcounties as $key => $value) {
            $object = new SubCountiesModel();
            $object->insert([
                "county_id" => $value->county_id,
                "sub_county_code" => $value->subcounty_code,
                "sub_county_name" => $value->subcounty_name
            ]);
        }
    }
}
