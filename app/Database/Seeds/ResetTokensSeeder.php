<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResetTokensSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'reset_token' => 'ABCDEF123456',
                'expiry_time' => date('Y-m-d H:i:s', strtotime('+1 day')),
                'used' => 0,
            ],
            // Add more reset tokens as needed
        ];

        $this->db->table('tbl_reset_tokens')->insertBatch($data);
    }
}
