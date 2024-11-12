<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenderSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'gender' => 'Male',
                'description' => 'male',


            ],
            [
                'gender' => 'Female',
                'description' => 'female',

            ]
        ];

        // Insert data
        $this->db->table('tbl_gender')->insertBatch($data);
    }
}
