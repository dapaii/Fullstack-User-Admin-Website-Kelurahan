<?php namespace App\Models;

use CodeIgniter\Model;

class AgendaMModel extends Model
{
    protected $table = 'AgendaM';
    protected $primaryKey = 'No';
    protected $allowedFields = ['Kecamatan','Kelurahan','Tahun','Asal_Surat','Nomor', 'Tanggal', 'Perihal', 'Pj_Pengelola', 'T_Penerimaan', 'Keterangan'];
}
