<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Decision extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'No' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'Kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Tahun' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Tanggal_Keputusan' => [
                'type' => 'DATE',
            ],
            'Nomor_Keputusan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Tentang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Uraian_Singkat' => [
                'type' => 'TEXT',
            ],
            'Tanggal_Dilaporkan' => [
                'type' => 'DATE',
            ],
            'Nomor_Dilaporkan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Keterangan' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('No', true);
        $this->forge->createTable('decision');
    }

    public function down()
    {
        $this->forge->dropTable('decision');
    }
}
