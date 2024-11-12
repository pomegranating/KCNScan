<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Country extends Migration
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
            'country_name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'country_code' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ]
        ]);

        // Set 'id' as the primary key
        $this->forge->addPrimaryKey('id');

        // Create the table
        $this->forge->createTable('tbl_countries', true);
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('tbl_countries');
    }
}
