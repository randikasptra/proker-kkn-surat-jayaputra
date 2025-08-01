<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Redirect root ke login atau dashboard
$routes->get('/', function () {
    if (session()->get('logged_in')) {
        return redirect()->to('dashboard');
    } else {
        return redirect()->to('/login');
    }
});

// Login Routes
$routes->get('/login', 'Auth::showLogin');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/settings', 'SettingsController::index');
$routes->post('/settings/update', 'SettingsController::update');


// Dashboard
$routes->get('/dashboard', 'Dashboard::index');
