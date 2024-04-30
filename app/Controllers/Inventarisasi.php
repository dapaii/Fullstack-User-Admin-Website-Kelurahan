<?php

namespace App\Controllers;

use App\Models\InventarisasiModel;

class Inventarisasi extends BaseController
{
    public function index()
    {
        $model = new InventarisasiModel();
        $data['inventarisasi'] = $model->findAll();

        echo view('inventarisasi_view', $data);
    }

    public function create()
    {
        $model = new InventarisasiModel();

        // Validation rules
        $validationRules = [
            'jenis_barang' => 'required|is_unique[inventarisasi.jenis_barang]',
            // Add other validation rules as needed
        ];

        // Run the validation
        if (!$this->validate($validationRules)) {
            // Set the flashdata error message
            session()->setFlashdata('error', 'Jenis Barang harus diisi dan harus unik.');

            return redirect()->to('/tambahIn')->withInput()->with('validation', $this->validator);
        }

        $data = [
            'Id' => $this->request->getPost('id'),
            'Jenis_Barang' => $this->request->getPost('jenis_barang'),
            'Dibeli_Sendiri' => $this->request->getPost('dibeli_sendiri'),
            'Bantuan_Pemerintah' => $this->request->getPost('bantuan_pemerintah'),
            'Sumbangan' => $this->request->getPost('sumbangan'),
            'Baik_Awal' => $this->request->getPost('baik_awal'),
            'Rusak_Awal' => $this->request->getPost('rusak_awal'),
            'Rusak_P' => $this->request->getPost('rusak_p'),
            'Dijual_P' => $this->request->getPost('dijual_p'),
            'Disumbangkan_P' => $this->request->getPost('disumbangkan_p'),
            'Tanggal_Penghapusan' => $this->request->getPost('tanggal_penghapusan'),
            'Baik_Akhir' => $this->request->getPost('baik_akhir'),
            'Rusak_Akhir' => $this->request->getPost('rusak_akhir'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan validasi jika 'Jenis_Barang' tidak kosong
        if (empty($data['Jenis_Barang'])) {
            session()->setFlashdata('error', 'Kolom Jenis Barang harus diisi.');
            return redirect()->to('/inventarisasi/create')->withInput(); // Kembali ke halaman form dengan pesan error
        }

        $model->insert($data);
        return redirect()->to('/inventarisasi'); // Jika sukses, redirect ke halaman decision
    }


    public function edit()
    {
        $jenis_barang = $this->request->getPost('jenis_barang');
        $model = new InventarisasiModel();
        $data['inventarisasi'] = $model->where('Jenis_Barang', $jenis_barang)->first();

        if ($data['inventarisasi'] === null) {
            // Jika data tidak ditemukan, atur pesan kesalahan menggunakan session flashdata
            session()->setFlashdata('error', 'Data tidak ditemukan atau tidak valid.');
            return redirect()->to('/admin'); // Arahkan kembali ke halaman admin atau halaman lain yang sesuai
        }

        return view('edit_viewIn', $data);
    }


    public function update()
    {
        $model = new InventarisasiModel();
        $jenis_barang = $this->request->getPost('jenis_barang');

        // Data yang ingin diupdate
        $data = [
            'Jenis_Barang' => $this->request->getPost('jenis_barang'),
            'Dibeli_Sendiri' => $this->request->getPost('dibeli_sendiri'),
            'Bantuan_Pemerintah' => $this->request->getPost('bantuan_pemerintah'),
            'Sumbangan' => $this->request->getPost('sumbangan'),
            'Baik_Awal' => $this->request->getPost('baik_awal'),
            'Rusak_Awal' => $this->request->getPost('rusak_awal'),
            'Rusak_P' => $this->request->getPost('rusak_p'),
            'Dijual_P' => $this->request->getPost('dijual_p'),
            'Disumbangkan_P' => $this->request->getPost('disumbangkan_p'),
            'Tanggal_Penghapusan' => $this->request->getPost('tanggal_penghapusan'),
            'Baik_Akhir' => $this->request->getPost('baik_akhir'),
            'Rusak_Akhir' => $this->request->getPost('rusak_akhir'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan pengecekan apakah data ditemukan sebelum melakukan update
        $existingInventarisasi = $model->where('Jenis_Barang', $jenis_barang)->first();
        if ($existingInventarisasi) {
            $model->update($existingInventarisasi['id'], $data);
            return redirect()->to('/inventarisasi');
        } else {
            return redirect()->to('/some/error/page');
        }
    }

    public function delete()
    {
        $model = new InventarisasiModel();
        $jenis_barang = $this->request->getPost('jenis_barang');
        $model->where('Jenis_Barang', $jenis_barang)->delete();

        return redirect()->to('/inventarisasi');
    }

    public function generatePDF()
    {
        $model = new InventarisasiModel();
        $data['inventarisasi'] = $model->findAll(); // Ambil semua data inventarisasi

        $html = view('inventarisasi_view', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new \Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->setPaper('F4', 'landscape');

        // Render PDF (output)
        $dompdf->render();

        // Outputkan atau simpan file PDF
        $dompdf->stream("daftar_inventarisasi.pdf");
    }
}
