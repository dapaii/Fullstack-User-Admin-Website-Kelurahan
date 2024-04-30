<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgendaM extends Migration
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
            'Asal_Surat' => [
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
            'T_Penerimaan' => [
                'type' => 'DATE',
            ],
            'Keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('No', true);
        $this->forge->createTable('agendaM');
    }

    public function down()
    {
        $this->forge->dropTable('agendaM');
    }
}
