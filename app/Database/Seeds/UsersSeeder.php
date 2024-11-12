<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'first_name' => 'Super',
                'middle_name' => null,
                'last_name' => 'Admin',
                'primary_email_address' => 'testlla924@gmail.com',
                'secondary_email_address' => null,
                'dob' => '1990-01-01',
                'user_role_id' => 1,
                // 'gender_id' => 2,
                'password' => '$2y$10$vkxAqnJwpCA9hSm2g3WRDeqWZTlLxEE.hp9MNjfDgN/8K1Bzc8u1e',
                'national_id_passport' => 'ABC123',
                'primary_phone_number' => '1234567890',
                'secondary_phone_number' => null,
                'country_of_residence_id' => 1,
                'county_of_residence_id' => 1,
                'sub_county_of_residence_id' => 1,
                'status' => 'active',
                'newsletter' => 1,
            ],
            // Add more users as needed
        ];

        $this->db->table('tbl_users')->insertBatch($data);
    }
}
