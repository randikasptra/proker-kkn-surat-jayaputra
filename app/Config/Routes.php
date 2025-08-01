<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Akses root URL → redirect sesuai session login
$routes->get('/', function () {
    if (session()->get('logged_in')) {
        return redirect()->to('/dashboard');
    } else {
        return redirect()->to('/login');
    }
});

// Login
$routes->get('/login', 'Auth::showLogin');      // tampilkan form login
$routes->post('/login', 'Auth::login');         // proses login

// Logout
$routes->get('/logout', 'Auth::logout');        // logout user

// Dashboard
$routes->get('/dashboard', 'Dashboard::index'); // dashboard setelah login
