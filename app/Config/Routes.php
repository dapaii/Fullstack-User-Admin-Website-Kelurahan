<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', 'AdminController::index');
$routes->get('/fiturSearch', 'AdminController::search');
$routes->get('/tableAll', 'AdminController::table');

// Rute untuk DecisionController
$routes->get('/decision', 'DecisionController::index');

$routes->get('/decision/create', 'DecisionController::create');
$routes->post('/decision/create', 'DecisionController::create');
$routes->get('/decision/edit', 'DecisionController::edit');
$routes->post('/decision/update', 'DecisionController::update');
$routes->post('/decision/delete', 'DecisionController::delete');

$routes->get('/tambah', 'AdminController::tambahView');
$routes->post('/decision/edit', 'DecisionController::edit');


//Rute Users Admin Login
//REGISTER
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

//LOGIN
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');


$routes->get('/generate-pdf', 'PdfGenerator::generatePDF');

//Inventarisasi
$routes->get('/inventarisasi', 'Inventarisasi::index');

$routes->get('/inventarisasi/create', 'Inventarisasi::create');
$routes->post('/inventarisasi/create', 'Inventarisasi::create');

$routes->post('/inventarisasi/edit', 'Inventarisasi::edit');
$routes->post('/inventarisasi/update', 'Inventarisasi::update');
$routes->post('/inventarisasi/delete', 'Inventarisasi::delete');

$routes->get('/tambahIn', 'AdminController::tambahViewIn');
$routes->get('/inventarisasi/edit', 'Inventarisasi::edit');

$routes->get('/generateIn-pdf', 'PdfGeneratorIn::generatePDF');

$routes->get('/generateAll-pdf', 'PdfGeneratorAll::generatePDF');



//Aparat
$routes->get('/aparat', 'AparatController::index');

$routes->get('/aparat/create', 'AparatController::create');
$routes->post('/aparat/create', 'AparatController::create');

$routes->post('/aparat/edit', 'AparatController::edit');
$routes->post('/aparat/update', 'AparatController::update');
$routes->post('/aparat/delete', 'AparatController::delete');

$routes->get('/tambahAP', 'AdminController::tambahViewAP');
$routes->get('/aparat/edit', 'AparatController::edit');

$routes->get('/generateAP-pdf', 'PdfGeneratorAP::generatePDF');

$routes->get('/generateAll-pdf', 'PdfGeneratorAll::generatePDF');

//Tanah
$routes->get('/tanah', 'TanahController::index');

$routes->get('/tanah/create', 'TanahController::create');
$routes->post('/tanah/create', 'TanahController::create');

$routes->post('/tanah/edit', 'TanahController::edit');
$routes->post('/tanah/update', 'TanahController::update');
$routes->post('/tanah/delete', 'TanahController::delete');

$routes->get('/tambahTN', 'AdminController::tambahViewTN');
$routes->get('/tanah/edit', 'TanahController::edit');

$routes->get('/generateTN-pdf', 'PdfGeneratorTN::generatePDF');

$routes->get('/generateAll-pdf', 'PdfGeneratorAll::generatePDF');


//AgendaMasuk
$routes->get('/agendam', 'AgendaMController::index');

$routes->get('/agendam/create', 'AgendaMController::create');
$routes->post('/agendam/create', 'AgendaMController::create');

$routes->post('/agendam/edit', 'AgendaMController::edit');
$routes->post('/agendam/update', 'AgendaMController::update');
$routes->post('/agendam/delete', 'AgendaMController::delete');

$routes->get('/tambahM', 'AdminController::tambahViewM');
$routes->get('/agendam/edit', 'AgendaMController::edit');

$routes->get('/generateM-pdf', 'PdfGeneratorM::generatePDF');

$routes->get('/generateAll-pdf', 'PdfGeneratorAll::generatePDF');



//AgendaKeluar
$routes->get('/agendak', 'AgendaKController::index');

$routes->get('/agendak/create', 'AgendaKController::create');
$routes->post('/agendak/create', 'AgendaKController::create');

$routes->post('/agendak/edit', 'AgendaKController::edit');
$routes->post('/agendak/update', 'AgendaKController::update');
$routes->post('/agendak/delete', 'AgendaKController::delete');

$routes->get('/tambahK', 'AdminController::tambahViewK');
$routes->get('/agendak/edit', 'AgendaKController::edit');

$routes->get('/generateK-pdf', 'PdfGeneratorK::generatePDF');

$routes->get('/generateAll-pdf', 'PdfGeneratorAll::generatePDF');

