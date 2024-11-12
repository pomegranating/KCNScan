<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsuranceDetails extends Migration
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
            'insurance_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'insurance_details' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'tbl_users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_insurance_details', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_insurance_details');
    }
}
