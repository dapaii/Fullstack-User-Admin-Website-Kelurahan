<?php

namespace App\Controllers;

use App\Models\AgendaKModel;

class AgendaKController extends BaseController
{
    public function index()
    {
        $model = new AgendaKModel();
        $data['agendak'] = $model->findAll();
        $data['kecamatan'] = 'Kecamatan'; // Ganti dengan data kecamatan yang sesuai
        $data['kelurahan'] = 'Kelurahan'; // Ganti dengan data kelurahan yang sesuai
        $data['tahun'] = 'Tahun'; // Ganti dengan data tahun yang sesuai
    

        
        echo view('agendak_view', $data);
    }

    public function create()
    {
        $model = new AgendaKModel();

        // Validation rules
        $validationRules = [
            'nomor' => 'required|is_unique[agendak.nomor]',
            // Add other validation rules as needed
        ];

        // Run the validation
        if (!$this->validate($validationRules)) {
            // Set the flashdata error message
            session()->setFlashdata('error', 'Nomor harus diisi dan harus unik.');

            return redirect()->to('/tambahK')->withInput()->with('validation', $this->validator);
        }

        $data = [
            'No' => $this->request->getPost('no'),
            'Nama_Instansi' => $this->request->getPost('nama_instansi'),
            'Nomor' => $this->request->getPost('nomor'),
            'Tanggal' => $this->request->getPost('tanggal'),
            'Perihal' => $this->request->getPost('perihal'),
            'Pj_Pengelola' => $this->request->getPost('pj_pengelola'),
            'T_Pengiriman' => $this->request->getPost('t_pengiriman'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan validasi jika 'Tanggal_Keputusan' tidak kosong
        if (empty($data['Nomor'])) {
            session()->setFlashdata('error', 'Kolom Tanggal Keputusan harus diisi.');
            return redirect()->to('/agendak/create')->withInput(); // Kembali ke halaman form dengan pesan error
        }

        $model->insert($data);
        return redirect()->to('/agendak'); // Jika sukses, redirect ke halaman decision
    }


    // DecisionController.php

    public function edit()
    {
        $nomor = $this->request->getPost('nomor');
        $model = new AgendaKModel();
        $data['agendak'] = $model->where('Nomor', $nomor)->first();

        if ($data['agendak'] === null) {
            // Jika data tidak ditemukan, atur pesan kesalahan menggunakan session flashdata
            session()->setFlashdata('error', 'Data tidak ditemukan atau tidak valid.');
            return redirect()->to('/fiturSearch'); // Arahkan kembali ke halaman admin atau halaman lain yang sesuai
        }

        return view('edit_viewK', $data);
    }


    public function update()
    {
        $model = new AgendaKModel();
        $nomor = $this->request->getPost('nomor');

        // Data yang ingin diupdate
        $data = [
            'Nama_Instansi' => $this->request->getPost('nama_instansi'),
            'Nomor' => $this->request->getPost('nomor'),
            'Tanggal' => $this->request->getPost('tanggal'),
            'Perihal' => $this->request->getPost('perihal'),
            'Pj_Pengelola' => $this->request->getPost('pj_pengelola'),
            'T_Pengiriman' => $this->request->getPost('t_pengiriman'),
            'Keterangan' => $this->request->getPost('keterangan'),
        ];

        // Lakukan pengecekan apakah data ditemukan sebelum melakukan update
        $existingAgendak = $model->where('Nomor', $nomor)->first();
        if ($existingAgendak) {
            $model->update($existingAgendak['No'], $data);
            return redirect()->to('/agendak');
        } else {
            return redirect()->to('/some/error/page');
        }
    }


    public function delete()
    {
        $model = new AgendaKModel();
        $nomor = $this->request->getPost('nomor');
        $model->where('Nomor', $nomor)->delete();

        
        return redirect()->to('/agendak');
    }

    public function generatePDF()
    {
        $model = new AgendaKModel();
        $data['agendak'] = $model->findAll(); // Ambil semua data decision

        $html = view('agendak_view', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new \Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->setPaper('F4', 'landscape');

        // Render PDF (output)
        $dompdf->render();

        // Outputkan atau simpan file PDF
        $dompdf->stream("daftar_agenda_keluar.pdf");
    }
}
