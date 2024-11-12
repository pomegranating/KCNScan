<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class County extends Migration
{
    public function up()
    {
        // Disable foreign key checks temporarily
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'county_name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'county_code' => [
                'type' => 'INT',
                'constraint' => 150,
            ],
            'county_capital' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'country_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('country_id', 'tbl_countries', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_counties', true);

        $this->db->enableForeignKeyChecks(); // Re-enable foreign key checks
    }

    public function down()
    {
        $this->forge->dropTable('tbl_counties');
    }
}

