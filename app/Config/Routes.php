<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Root: redirect ke dashboard atau login
$routes->get('/', function () {
    return session()->get('logged_in') 
        ? redirect()->to('dashboard') 
        : redirect()->to('/login');
});

// Login Routes
$routes->get('/login', 'Auth::showLogin');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// Settings Routes
$routes->get('/settings', 'SettingsController::index');
$routes->post('/settings/update', 'SettingsController::update');

// Surat Routes
$routes->get('/surat', 'SuratController::index');
$routes->post('/surat/kirim', 'SuratController::kirim');

// Laporan
// $routes->get('/laporan-surat', 'LaporanController::index');
$routes->get('/laporan-surat', 'LaporanController::index');
$routes->get('/laporan/hapus/(:segment)/(:num)', 'LaporanController::hapus/$1/$2');


// Pengajuan Surat Routes
$routes->get('/pengajuan-surat', 'PengajuanController::index');
$routes->delete('/pengajuan-surat/(:num)', 'PengajuanController::delete/$1');

$routes->get('/pengajuan', 'PengajuanController::index');
$routes->get('/pengajuan/import', 'PengajuanController::importFromSheet');
$routes->post('/pengajuan/delete/(:num)', 'PengajuanController::delete/$1');

// Sinkronisasi dari Google Sheet
$routes->get('/pengajuan-surat/sync', 'PengajuanController::syncFromSheet');

// User Routes
$routes->get('/users', 'UserController::index');
$routes->post('/users/store', 'UserController::store');

// Dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/import-sheet', 'PengajuanController::import');

// Grup Surat (akses rapi)
// Grup Surat (akses rapi)
$routes->group('surat', function($routes) {
    $routes->get('/', 'SuratController::index');

    // SKTM
    $routes->get('form_sktm', 'SuratSKTMController::index');
    $routes->post('sktm/simpan', 'SuratSKTMController::simpan');
    $routes->get('sktm/cetak/(:num)', 'SuratSKTMController::cetak/$1');

    // Domisili
    $routes->get('form_domisili', 'SuratDomisiliController::index');
    $routes->post('domisili/simpan', 'SuratDomisiliController::simpan');
    $routes->get('domisili/cetak/(:num)', 'SuratDomisiliController::cetak/$1');

    // KTP
    $routes->get('form_ktp', 'SuratKTPController::index'); // menampilkan ktp_form.php
    // $routes->post('ktp/simpan', 'SuratKTPController::simpan');
    
});
$routes->post('ktp/simpan', 'SuratKTPController::simpan');
$routes->get('surat-ktp/cetak/(:num)', 'SuratKTPController::cetak/$1');


// SKTM langsung
$routes->post('surat-sktm/simpan', 'SuratSKTMController::simpan');
$routes->get('surat-sktm/cetak/(:num)', 'SuratSKTMController::cetak/$1');

// Domisili langsung (supaya form lo sekarang jalan)
$routes->get('surat-domisili', 'SuratDomisiliController::index');
$routes->post('surat-domisili/simpan', 'SuratDomisiliController::simpan');
$routes->get('surat-domisili/cetak/(:num)', 'SuratDomisiliController::cetak/$1');



// SKU
$routes->group('surat', function($routes) {
    // Form SKU
    $routes->get('sku_form', 'SuratSKUController::index');
    $routes->get('sku/cetak/(:num)', 'SuratSKUController::cetak/$1');
});
$routes->post('sku/simpan', 'SuratSKUController::simpan');
