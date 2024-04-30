<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfGeneratorAll extends BaseController
{
    public function generatePDF()
    {
        $decisionModel = new \App\Models\DecisionModel();
        $inventarisasiModel = new \App\Models\InventarisasiModel();
        $aparatModel = new \App\Models\AparatModel();
        $tanahModel = new \App\Models\TanahModel();
        $agendamModel = new \App\Models\AgendaMModel();
        $agendakModel = new \App\Models\AgendaKModel();

        $data['decision'] = $decisionModel->findAll(); // Ambil data decision dari model
        $data['inventarisasi'] = $inventarisasiModel->findAll(); // Ambil data inventarisasi dari model
        $data['aparat'] = $aparatModel->findAll(); // Ambil data inventarisasi dari model
        $data['tanah'] = $tanahModel->findAll(); // Ambil data inventarisasi dari model
        $data['agendam'] = $agendamModel->findAll(); // Ambil data inventarisasi dari model
        $data['agendak'] = $agendakModel->findAll(); // Ambil data inventarisasi dari model
        $data['isPDF'] = true; // Tentukan bahwa view dirender sebagai PDF

        // Load tableAll view into HTML variable
        $html = view('admin/layout/tableAll', $data);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->setPaper('A3', 'landscape');

        // Render PDF (output)
        $dompdf->render();

        // Outputkan atau simpan file PDF
        $dompdf->stream("daftar_All.pdf");
    }
}
