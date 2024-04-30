<?php

namespace App\Controllers;

use App\Models\TanahModel;

class TanahController extends BaseController
{
    public function index()
    {
        $model = new TanahModel();
        $data['tanah'] = $model->findAll();
        $data['kecamatan'] = 'Kecamatan'; // Ganti dengan data kecamatan yang sesuai
        $data['kelurahan'] = 'Kelurahan'; // Ganti dengan data kelurahan yang sesuai
        $data['tahun'] = 'Tahun'; // Ganti dengan data tahun yang sesuai
    

        
        echo view('tanah_view', $data);
    }

    public function create()
    {
        $model = new TanahModel();

        // Validation rules
        $validationRules = [
            'hm' => 'required|is_unique[tanah.hm]',
            // Add other validation rules as needed
        ];

        // Run the validation
        if (!$this->validate($validationRules)) {
            // Set the flashdata error message
            session()->setFlashdata('error', 'hm harus diisi dan harus unik.');

            return redirect()->to('/tambahTN')->withInput()->with('validation', $this->validator);
        }
        $data = [
            'No' => $this->request->getPost('no'),
            'Perorangan' => $this->request->getPost('perorangan'),
            'Badan_Hukum' => $this->request->getPost('badan_hukum'),
            'Luas' => $this->request->getPost('luas'),
            'HM' => $this->request->getPost('hm'),
            'HGB' => $this->request->getPost('hgb'),
            'HP' => $this->request->getPost('hp'),
            'HGU' => $this->request->getPost('hgu'),
            'HPL' => $this->request->getPost('hpl'),
            'MA' => $this->request->getPost('ma'),
            'VP' => $this->request->getPost('vp'),
            'TN' => $this->request->getPost('tn'),
            'Sudah' => $this->request->getPost('sudah'),
            'Belum' => $this->request->getPost('belum'),
            'Perumahan' => $this->request->getPost('perumahan'),
            'Perdagangan' => $this->request->getPost('perdagangan'),
            'Perkantoran' => $this->request->getPost('perkantoran'),
            'Industri' => $this->request->getPost('industri'),
            'Fasilitas_Umum' => $this->request->getPost('fasilitas_umum'),
            'Lain_Lain' => $this->request->getPost('lain_lain'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan validasi jika 'Tanggal_Keputusan' tidak kosong
        if (empty($data['HM'])) {
            session()->setFlashdata('error', 'Kolom Tanggal Keputusan harus diisi.');
            return redirect()->to('/tanah/create')->withInput(); // Kembali ke halaman form dengan pesan error
        }

        $model->insert($data);
        return redirect()->to('/tanah'); // Jika sukses, redirect ke halaman decision
    }


    // DecisionController.php

    public function edit()
    {
        $hm = $this->request->getPost('hm');
        $model = new TanahModel();
        $data['tanah'] = $model->where('HM', $hm)->first();

        if ($data['tanah'] === null) {
            // Jika data tidak ditemukan, atur pesan kesalahan menggunakan session flashdata
            session()->setFlashdata('error', 'Data tidak ditemukan atau tidak valid.');
            return redirect()->to('/fiturSearch'); // Arahkan kembali ke halaman admin atau halaman lain yang sesuai
        }

        return view('edit_viewTN', $data);
    }


    public function update()
    {
        $model = new TanahModel();
        $hm = $this->request->getPost('hm');

        // Data yang ingin diupdate
        $data = [
            'Perorangan' => $this->request->getPost('perorangan'),
            'Badan_Hukum' => $this->request->getPost('badan_hukum'),
            'Luas' => $this->request->getPost('luas'),
            'HM' => $this->request->getPost('hm'),
            'HGB' => $this->request->getPost('hgb'),
            'HP' => $this->request->getPost('hp'),
            'HGU' => $this->request->getPost('hgu'),
            'HPL' => $this->request->getPost('hpl'),
            'MA' => $this->request->getPost('ma'),
            'VP' => $this->request->getPost('vp'),
            'TN' => $this->request->getPost('tn'),
            'Sudah' => $this->request->getPost('sudah'),
            'Belum' => $this->request->getPost('belum'),
            'Perumahan' => $this->request->getPost('perumahan'),
            'Perdagangan' => $this->request->getPost('perdagangan'),
            'Perkantoran' => $this->request->getPost('perkantoran'),
            'Industri' => $this->request->getPost('industri'),
            'Fasilitas_Umum' => $this->request->getPost('fasilitas_umum'),
            'Lain_Lain' => $this->request->getPost('lain_lain'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan pengecekan apakah data ditemukan sebelum melakukan update
        $existingTanah = $model->where('HM', $hm)->first();
        if ($existingTanah) {
            $model->update($existingTanah['No'], $data);
            return redirect()->to('/tanah');
        } else {
            return redirect()->to('/some/error/page');
        }
    }


    public function delete()
    {
        $model = new TanahModel();
        $hm = $this->request->getPost('hm');
        $model->where('hm', $hm)->delete();

        return redirect()->to('/tanah');
    }

    public function generatePDF()
    {
        $model = new TanahModel();
        $data['tanah'] = $model->findAll(); // Ambil semua data decision

        $html = view('tanah_view', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new \Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->setPaper('F4', 'landscape');

        // Render PDF (output)
        $dompdf->render();

        // Outputkan atau simpan file PDF
        $dompdf->stream("daftar_tanah.pdf");
    }
}
