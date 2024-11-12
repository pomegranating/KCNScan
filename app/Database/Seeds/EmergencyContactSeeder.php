<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmergencyContactSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'emergency_contact_first_name' => 'Emergency',
                'Emergency_contact_middle_name' => 'Contact',
                'user_id' => 1,
                'emergency_contact_last_name' => 'One',
                'emergency_contact_phone_number' => '1234567890',
                'emergency_contact_email' => 'emergency@example.com',
                'relationship' => 'Parent',
            ],
        ];

        $this->db->table('tbl_emergency_contact')->insertBatch($data);
    }
}
