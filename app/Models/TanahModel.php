<?php namespace App\Models;

use CodeIgniter\Model;

class TanahModel extends Model
{
    protected $table = 'Tanah';
    protected $primaryKey = 'No';
    protected $allowedFields = ['Kecamatan','Kelurahan','Tahun','Perorangan','Badan_Hukum','Luas','HM', 'HGB', 'HP', 'HGU', 'HPL', 'MA', 'VP', 'TN', 'Sudah', 'Belum', 'Perumahan', 'Perdagangan', 'Perkantoran', 'Industri', 'Fasilitas_Umum', 'Lain_Lain', 'Keterangan'];
}
