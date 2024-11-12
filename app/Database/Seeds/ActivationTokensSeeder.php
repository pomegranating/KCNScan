<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ActivationTokensSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'token' => '1234567890',
                'email' => 'john@example.com',
            ],
        ];

        $this->db->table('tbl_activation_tokens')->insertBatch($data);
    }
}
