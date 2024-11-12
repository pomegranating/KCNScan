<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ResetTokens extends Migration
{
    public function up()
    {
        // Disable foreign key checks
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'doctor_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'reset_token' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'expiry_time' => [
                'type' => 'TIMESTAMP',
                'null' => false,
                'default' => null,
            ],
            'used' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('doctor_id', 'tbl_doctors', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_reset_tokens', true);

        // Enable foreign key checks after creating the table
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_reset_tokens');
    }
}
