<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubCounty extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks(); // Disable foreign key checks temporarily

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'sub_county_name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'sub_county_code' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'county_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('county_id', 'tbl_counties', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_sub_counties', true);

        $this->db->enableForeignKeyChecks(); // Re-enable foreign key checks
    }

    public function down()
    {
        $this->forge->dropTable('tbl_sub_counties');
    }
}
