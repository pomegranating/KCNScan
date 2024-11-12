<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsuranceDetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'insurance_name' => 'Insurance A',
                'insurance_details' => '100',
                'user_id' => 1,
            ],
        ];

        $this->db->table('tbl_insurance_details')->insertBatch($data);
    }
}
