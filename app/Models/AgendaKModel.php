<?php namespace App\Models;

use CodeIgniter\Model;

class AgendaKModel extends Model
{
    protected $table = 'AgendaK';
    protected $primaryKey = 'No';
    protected $allowedFields = ['Kecamatan','Kelurahan','Tahun','Nama_Instansi','Nomor', 'Tanggal', 'Perihal', 'Pj_Pengelola', 'T_Pengiriman', 'Keterangan'];
}
