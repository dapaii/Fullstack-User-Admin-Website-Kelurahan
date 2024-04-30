<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tanah extends Migration
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
            'Perorangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Badan_Hukum' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Luas' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'HM' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'HGB' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'HP' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'HGU' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'HPL' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'MA' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'VP' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'TN' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Sudah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Belum' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Perumahan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Perdagangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Perkantoran' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Industri' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Fasilitas_Umum' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Lain_Lain' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('No', true);
        $this->forge->createTable('tanah');
    }

    public function down()
    {
        $this->forge->dropTable('tanah');
    }
}
