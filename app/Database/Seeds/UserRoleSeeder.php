<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Super Admin',
                'description' => 'Administrator role with full access.',
            ],
            [
                'name' => 'Admin',
                'description' => 'Administrator role with limited access.',
            ],
            [
                'name' => 'User',
                'description' => 'Regular user role with limited access.',
            ],
            [
                'name' => 'Mentor',
                'description' => 'Guide and prep users for upskilling.',
            ],
            // Add more roles as needed
        ];

        // Insert data
        $this->db->table('tbl_user_roles')->insertBatch($data);
    }
}
