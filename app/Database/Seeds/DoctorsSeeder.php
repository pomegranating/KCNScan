<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [            
                'first_name' => 'Ahmed',
                'last_name' => 'Parkar',
                'email_address' => 'testlla924@gmail.com',
                'password' => '$2y$10$vkxAqnJwpCA9hSm2g3WRDeqWZTlLxEE.hp9MNjfDgN/8K1Bzc8u1e',
                'dob' => '`1990-01-01',
                'phone_number' => '1234567890',
                'profile_photo' => 'img.jpg',
            ],
        ];
        $this->db->table('tbl_doctors')->insertBatch($data);
    }
}
