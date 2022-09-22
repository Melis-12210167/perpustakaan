<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' =>'int', 'constraint'=>10, 'unsigend'=>true, 'auto_instrument' =>true],
            'kategori' => ['type' =>'varchar', 'constraint' =>100]
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
