<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gender extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tbl_gender', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_gender');
    }
}
