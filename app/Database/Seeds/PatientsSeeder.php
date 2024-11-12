<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PatientsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'doctor_id'=>'1',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email_address' => 'testlla924@gmail.com',
                'phone_number' => '1234567890',
                'dob' => '1990-01-01',
                'gender'=>'Male',
                'topo_scans'=>'img.jpg'
                // 'password' => '$2y$10$vkxAqnJwpCA9hSm2g3WRDeqWZTlLxEE.hp9MNjfDgN/8K1Bzc8u1e',
               
               
            ],
            // Add more users as needed
        ];

        $this->db->table('tbl_patients')->insertBatch($data);
    }
}
