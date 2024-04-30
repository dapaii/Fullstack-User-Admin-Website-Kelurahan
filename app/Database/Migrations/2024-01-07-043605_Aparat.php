<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aparat extends Migration
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
            'Nama_Lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'NIAP' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'NIP' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Jenis_Kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
            ],
            'Tempat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Tanggal' => [
                'type' => 'DATE',
            ],
            'Agama' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'Pangkat_Golongan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Pendidikan_Terakhir' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Tanggal_Pengangkatan' => [
                'type' => 'DATE',
            ],
            'Nomor_Pengangkatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Tanggal_Pemberhentian' => [
                'type' => 'DATE',
            ],
            'Nomor_Pemberhentian' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('No', true);
        $this->forge->createTable('aparat');
    }

    public function down()
    {
        $this->forge->dropTable('aparat');
    }
}
