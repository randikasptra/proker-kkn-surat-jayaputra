<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard'); // ini berarti file `app/Views/dashboard.php`
    }
}
