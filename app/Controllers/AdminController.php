<?php

namespace App\Controllers;

use App\Models\AparatModel;
use App\Models\DecisionModel;
use App\Models\InventarisasiModel;
use App\Models\TanahModel;
use App\Models\AgendaMModel;
use App\Models\AgendaKModel;

class AdminController extends BaseController
{
    private $decisionModel;
    private $inventarisasiModel;
    private $aparatModel;
    private $tanahModel;
    private $agendamModel;
    private $agendakModel;

    public function __construct()
    {
        $this->decisionModel = new DecisionModel();
        $this->inventarisasiModel = new InventarisasiModel();
        $this->aparatModel = new AparatModel();
        $this->tanahModel = new TanahModel();
        $this->agendamModel = new AgendaMModel();
        $this->agendakModel = new AgendaKModel();
    }

    public function table()
    {
        $data['decision'] = $this->decisionModel->findAll();
        $data['inventarisasi'] = $this->inventarisasiModel->findAll();
        $data['aparat'] = $this->aparatModel->findAll();
        $data['tanah'] = $this->tanahModel->findAll();
        $data['agendam'] = $this->agendamModel->findAll();
        $data['agendak'] = $this->agendakModel->findAll();

        echo view('admin/layout/tableAll', $data);
    }



    public function index()
    {
        echo view('admin/dashboard/admin_view');
    }

    public function search()
    {
        echo view('admin/layout/fiturSearch');
    }
    
    

    public function tambahView()
    {
        return view('tambah_view');
    }

    public function editDecision($id)
    {
        // Lakukan pengolahan data jika perlu
        return view('edit_view', ['decisionId' => $id]); // Sesuaikan dengan data yang diperlukan
    }

    

    public function tambahViewIn()
    {
        return view('tambah_viewIn');
    }

    public function editInventarisasi($id)
    {
        // Lakukan pengolahan data jika perlu
        return view('edit_viewIn', ['inventarisasiId' => $id]); // Sesuaikan dengan data yang diperlukan
    }



    public function tambahViewAP()
    {
        return view('tambah_viewAP');
    }

    public function editAparat($id)
    {
        // Lakukan pengolahan data jika perlu
        return view('edit_viewAP', ['aparatId' => $id]); // Sesuaikan dengan data yang diperlukan
    }


    public function tambahViewTN()
    {
        return view('tambah_viewTN');
    }

    public function editTanah($id)
    {
        // Lakukan pengolahan data jika perlu
        return view('edit_viewTN', ['tanahId' => $id]); // Sesuaikan dengan data yang diperlukan
    }



    public function tambahViewM()
    {
        return view('tambah_viewM');
    }

    public function editAgendaM($id)
    {
        // Lakukan pengolahan data jika perlu
        return view('edit_viewM', ['agendamId' => $id]); // Sesuaikan dengan data yang diperlukan
    }




    public function tambahViewK()
    {
        return view('tambah_viewK');
    }

    public function editAgendaK($id)
    {
        // Lakukan pengolahan data jika perlu
        return view('edit_viewK', ['agendakId' => $id]); // Sesuaikan dengan data yang diperlukan
    }
}