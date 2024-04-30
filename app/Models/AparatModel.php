<?php namespace App\Models;

use CodeIgniter\Model;

class AparatModel extends Model
{
    protected $table = 'Aparat';
    protected $primaryKey = 'No';
    protected $allowedFields = ['Kecamatan','Kelurahan','Tahun','Nama_Lengkap','NIAP','NIP','Jenis_Kelamin','Tempat', 'Tanggal', 'Agama', 'Pangkat_Golongan', 'Jabatan', 'Pendidikan_Terakhir', 'Tanggal_Pengangkatan', 'Nomor_Pengangkatan', 'Tanggal_Pemberhentian', 'Nomor_Pemberhentian', 'Keterangan'];
}
