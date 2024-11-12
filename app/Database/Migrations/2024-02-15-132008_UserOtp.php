<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserOtpTable extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'otp_code' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'expiry_time' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => null,
            ],
            'used' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'tbl_users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_user_otp', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user_otp');
    }
}
