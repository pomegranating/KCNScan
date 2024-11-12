<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'middle_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'primary_email_address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'secondary_email_address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            // 'gender_id' => [
            // 'type' => 'INT',
            // 'constraint' => 11,
            // 'null' => true,
            // 'unsigned' => true,
            // ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],

            'dob' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'national_id_passport' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'primary_phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'secondary_phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'profile_photo' => [
                'type' => 'BLOB',
                'null' => true,
            ],

            'user_role_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'country_of_residence_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'county_of_residence_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'sub_county_of_residence_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default' => 'inactive',
            ],
            'mentor_rating' => [
                'type' => 'DECIMAL',
                'constraint' => 3, 2,
                'null' => true,
            ],
            'mentor_review' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'mentor_qualification' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'mentor_cv_upload' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'user_skill_level_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'newsletter' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_role_id', 'tbl_user_roles', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('gender_id', 'tbl_gender', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('country_of_residence_id', 'tbl_countries', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('county_of_residence_id', 'tbl_counties', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('sub_county_of_residence_id', 'tbl_sub_counties', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_users', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_users');
    }
}
