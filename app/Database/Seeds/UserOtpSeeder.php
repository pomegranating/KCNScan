<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserOtpSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'doctor_id' => 1,
                'otp_code' => '123456',
                'expiry_time' => date('Y-m-d H:i:s', strtotime('+1 hour')),
                'created_at' => date('Y-m-d H:i:s'),
                'used' => false,
            ],
        ];

        $this->db->table('tbl_user_otp')->insertBatch($data);
    }
}
