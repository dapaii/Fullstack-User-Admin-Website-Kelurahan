<?php namespace App\Models;

use CodeIgniter\Model;

class InventarisasiModel extends Model
{
    protected $table = 'Inventarisasi';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Kecamatan','Kelurahan','Tahun','Jenis_Barang','Dibeli_Sendiri', 'Bantuan_Pemerintah', 'Sumbangan', 'Baik_Awal', 'Rusak_Awal', 'Rusak_P','Dijual_P','Disumbangkan_P','Tanggal_Penghapusan','Baik_Akhir','Rusak_Akhir','Keterangan'];
}
