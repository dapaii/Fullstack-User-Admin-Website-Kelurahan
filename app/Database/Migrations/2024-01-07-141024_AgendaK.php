<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgendaK extends Migration
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
            'Nama_Instansi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Nomor' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Tanggal' => [
                'type' => 'DATE',
            ],
            'Perihal' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Pj_Pengelola' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'T_Pengiriman' => [
                'type' => 'DATE',
            ],
            'Keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('No', true);
        $this->forge->createTable('agendaK');
    }

    public function down()
    {
        $this->forge->dropTable('agendaK');
    }
}
