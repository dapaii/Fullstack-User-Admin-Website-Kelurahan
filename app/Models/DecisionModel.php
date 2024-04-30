<?php namespace App\Models;

use CodeIgniter\Model;

class DecisionModel extends Model
{
    protected $table = 'Decision';
    protected $primaryKey = 'No';
    protected $allowedFields = ['Kecamatan','Kelurahan','Tahun','Tanggal_Keputusan','Nomor_Keputusan', 'Tentang', 'Uraian_Singkat', 'Tanggal_Dilaporkan', 'Nomor_Dilaporkan', 'Keterangan'];
}
