<?php

namespace App\Controllers;

use App\Models\DecisionModel;

class DecisionController extends BaseController
{
    public function index()
    {
        $model = new DecisionModel();
        $data['decision'] = $model->findAll();
        $data['kecamatan'] = 'Kecamatan'; // Ganti dengan data kecamatan yang sesuai
        $data['kelurahan'] = 'Kelurahan'; // Ganti dengan data kelurahan yang sesuai
        $data['tahun'] = 'Tahun'; // Ganti dengan data tahun yang sesuai



        echo view('decision_view', $data);
    }

    public function create()
    {
        $model = new DecisionModel();

        // Validation rules
        $validationRules = [
            'nomor_keputusan' => 'required|is_unique[decision.Nomor_Keputusan]',
            // Add other validation rules as needed
        ];

        // Run the validation
        if (!$this->validate($validationRules)) {
            // Set the flashdata error message
            session()->setFlashdata('error', 'Nomor Keputusan harus diisi dan harus unik.');

            return redirect()->to('/tambah')->withInput()->with('validation', $this->validator);
        }


        $data = [
            'No' => $this->request->getPost('no'),
            'Tanggal_Keputusan' => $this->request->getPost('tanggal_keputusan'),
            'Nomor_Keputusan' => $this->request->getPost('nomor_keputusan'),
            'Tentang' => $this->request->getPost('tentang'),
            'Uraian_Singkat' => $this->request->getPost('uraian_singkat'),
            'Tanggal_Dilaporkan' => $this->request->getPost('tanggal_dilaporkan'),
            'Nomor_Dilaporkan' => $this->request->getPost('nomor_dilaporkan'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan validasi jika 'Tanggal_Keputusan' tidak kosong
        if (empty($data['Tanggal_Keputusan'])) {
            session()->setFlashdata('error', 'Kolom Tanggal Keputusan harus diisi.');
            return redirect()->to('/decision/create')->withInput(); // Kembali ke halaman form dengan pesan error
        }

        $model->insert($data);
        return redirect()->to('/decision'); // Jika sukses, redirect ke halaman decision
    }


    // DecisionController.php

    public function edit()
    {
        $nomor_keputusan = $this->request->getPost('nomor_keputusan');
        $model = new DecisionModel();
        $data['decision'] = $model->where('Nomor_Keputusan', $nomor_keputusan)->first();

        if ($data['decision'] === null) {
            // Jika data tidak ditemukan, atur pesan kesalahan menggunakan session flashdata
            session()->setFlashdata('error', 'Data tidak ditemukan atau tidak valid.');
            return redirect()->to('/admin'); // Arahkan kembali ke halaman admin atau halaman lain yang sesuai
        }

        return view('edit_view', $data);
    }


    public function update()
    {
        $model = new DecisionModel();
        $nomor_keputusan = $this->request->getPost('nomor_keputusan');

        // Data yang ingin diupdate
        $data = [
            'Tanggal_Keputusan' => $this->request->getPost('tanggal_keputusan'),
            'Tentang' => $this->request->getPost('tentang'),
            'Uraian_Singkat' => $this->request->getPost('uraian_singkat'),
            'Tanggal_Dilaporkan' => $this->request->getPost('tanggal_dilaporkan'),
            'Nomor_Dilaporkan' => $this->request->getPost('nomor_dilaporkan'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan pengecekan apakah data ditemukan sebelum melakukan update
        $existingDecision = $model->where('Nomor_Keputusan', $nomor_keputusan)->first();
        if ($existingDecision) {
            $model->update($existingDecision['No'], $data);
            return redirect()->to('/decision');
        } else {
            return redirect()->to('/some/error/page');
        }
    }


    public function delete()
    {
        $model = new DecisionModel();
        $nomor_keputusan = $this->request->getPost('nomor_keputusan');
        $model->where('Nomor_Keputusan', $nomor_keputusan)->delete();

        return redirect()->to('/decision');
    }

    public function generatePDF()
    {
        $model = new DecisionModel();
        $data['decision'] = $model->findAll(); // Ambil semua data decision

        $html = view('decision_view', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new \Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->setPaper('F4', 'landscape');

        // Render PDF (output)
        $dompdf->render();

        // Outputkan atau simpan file PDF
        $dompdf->stream("daftar_decision.pdf");
    }
}
