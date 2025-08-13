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
$routes->get('/laporan-surat', 'LaporanController::index');

// Pengajuan Surat Routes
$routes->get('/pengajuan-surat', 'PengajuanController::index');
$routes->delete('/pengajuan-surat/(:num)', 'PengajuanController::delete/$1');

$routes->get('/pengajuan', 'PengajuanController::index');
$routes->get('/pengajuan/import', 'PengajuanController::importFromSheet');
$routes->post('/pengajuan/delete/(:num)', 'PengajuanController::delete/$1');


// 🔹 Tambahan: Sinkronisasi dari Google Sheet
$routes->get('/pengajuan-surat/sync', 'PengajuanController::syncFromSheet');

// User Routes
$routes->get('/users', 'UserController::index');
$routes->post('/users/store', 'UserController::store');

// Dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/import-sheet', 'PengajuanController::import');

$routes->group('surat', function($routes) {
    $routes->get('/', 'SuratController::index');
    $routes->get('form_sktm', 'SuratSKTMController::index');
    $routes->post('proses_sktm', 'SuratSKTMController::proses');
    $routes->get('cetak_sktm/(:num)', 'SuratSKTMController::cetak/$1');
});


