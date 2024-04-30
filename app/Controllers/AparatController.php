<?php

namespace App\Controllers;

use App\Models\AparatModel;

class AparatController extends BaseController
{
    public function index()
    {
        $model = new AparatModel();
        $data['aparat'] = $model->findAll();
        $data['kecamatan'] = 'Kecamatan'; // Ganti dengan data kecamatan yang sesuai
        $data['kelurahan'] = 'Kelurahan'; // Ganti dengan data kelurahan yang sesuai
        $data['tahun'] = 'Tahun'; // Ganti dengan data tahun yang sesuai
    
        echo view('aparat_view', $data);
    }

    public function create()
    {
        $model = new AparatModel();

        // Validation rules
        $validationRules = [
            'niap' => 'required|is_unique[aparat.niap]',
            // Add other validation rules as needed
        ];

        // Run the validation
        if (!$this->validate($validationRules)) {
            // Set the flashdata error message
            session()->setFlashdata('error', 'NIAP harus diisi dan harus unik.');

            return redirect()->to('/tambahAP')->withInput()->with('validation', $this->validator);
        }


        $data = [
            'No' => $this->request->getPost('no'),
            'Nama_Lengkap' => $this->request->getPost('nama_lengkap'),
            'NIAP' => $this->request->getPost('niap'),
            'NIP' => $this->request->getPost('nip'),
            'Jenis_Kelamin' => $this->request->getPost('jenis_kelamin'),
            'Tempat' => $this->request->getPost('tempat'),
            'Tanggal' => $this->request->getPost('tanggal'),
            'Agama' => $this->request->getPost('agama'),
            'Pangkat_Golongan' => $this->request->getPost('pangkat_golongan'),
            'Jabatan' => $this->request->getPost('jabatan'),
            'Pendidikan_Terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'Tanggal_Pengangkatan' => $this->request->getPost('tanggal_pengangkatan'),
            'Nomor_Pengangkatan' => $this->request->getPost('nomor_pengangkatan'),
            'Tanggal_Pemberhentian' => $this->request->getPost('tanggal_pemberhentian'),
            'Nomor_Pemberhentian' => $this->request->getPost('nomor_pemberhentian'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan validasi jika 'Tanggal_Keputusan' tidak kosong
        if (empty($data['NIAP'])) {
            session()->setFlashdata('error', 'Kolom Tanggal Keputusan harus diisi.');
            return redirect()->to('/aparat/create')->withInput(); // Kembali ke halaman form dengan pesan error
        }

        $model->insert($data);
        return redirect()->to('/aparat'); // Jika sukses, redirect ke halaman decision
    }


    // DecisionController.php

    public function edit()
    {
        $niap = $this->request->getPost('niap');
        $model = new AparatModel();
        $data['aparat'] = $model->where('NIAP', $niap)->first();

        if ($data['aparat'] === null) {
            // Jika data tidak ditemukan, atur pesan kesalahan menggunakan session flashdata
            session()->setFlashdata('error', 'Data tidak ditemukan atau tidak valid.');
            return redirect()->to('/fiturSearch'); // Arahkan kembali ke halaman admin atau halaman lain yang sesuai
        }

        return view('edit_viewAP', $data);
    }


    public function update()
    {
        $model = new AparatModel();
        $niap = $this->request->getPost('niap');

        // Data yang ingin diupdate
        $data = [
            'Nama_Lengkap' => $this->request->getPost('nama_lengkap'),
            'NIAP' => $this->request->getPost('niap'),
            'NIP' => $this->request->getPost('nip'),
            'Jenis_Kelamin' => $this->request->getPost('jenis_kelamin'),
            'Tempat' => $this->request->getPost('tempat'),
            'Tanggal' => $this->request->getPost('tanggal'),
            'Agama' => $this->request->getPost('agama'),
            'Pangkat_Golongan' => $this->request->getPost('pangkat_golongan'),
            'Jabatan' => $this->request->getPost('jabatan'),
            'Pendidikan_Terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'Tanggal_Pengangkatan' => $this->request->getPost('tanggal_pengangkatan'),
            'Nomor_Pengangkatan' => $this->request->getPost('nomor_pengangkatan'),
            'Tanggal_Pemberhentian' => $this->request->getPost('tanggal_pemberhentian'),
            'Nomor_Pemberhentian' => $this->request->getPost('nomor_pemberhentian'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan pengecekan apakah data ditemukan sebelum melakukan update
        $existingAparat = $model->where('NIAP', $niap)->first();
        if ($existingAparat) {
            $model->update($existingAparat['No'], $data);
            return redirect()->to('/aparat');
        } else {
            return redirect()->to('/some/error/page');
        }
    }


    public function delete()
    {
        $model = new AparatModel();
        $niap = $this->request->getPost('niap');
        $model->where('NIAP', $niap)->delete();

        return redirect()->to('/aparat');
    }

    public function generatePDF()
    {
        $model = new AparatModel();
        $data['aparat'] = $model->findAll(); // Ambil semua data decision

        $html = view('aparat_view', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new \Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->setPaper('F4', 'landscape');

        // Render PDF (output)
        $dompdf->render();

        // Outputkan atau simpan file PDF
        $dompdf->stream("daftar_aparat.pdf");
    }
}
