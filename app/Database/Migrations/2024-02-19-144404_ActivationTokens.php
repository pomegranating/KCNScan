<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ActivationTokens extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tbl_activation_tokens', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_activation_tokens');
    }
}
