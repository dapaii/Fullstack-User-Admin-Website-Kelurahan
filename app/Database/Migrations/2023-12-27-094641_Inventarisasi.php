<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventarisasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
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
            'Jenis_Barang' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Dibeli_Sendiri' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Bantuan_Pemerintah' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Sumbangan' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Baik_Awal' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Rusak_Awal' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Rusak_P' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Dijual_P' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Disumbangkan_P' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Tanggal_Penghapusan' => [
                'type' => 'DATE',
            ],
            'Baik_Akhir' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Rusak_Akhir' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'Keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('inventarisasi');
    }

    public function down()
    {
        $this->forge->dropTable('inventarisasi');
    }
}
