<?php
// app/Http/Controllers/UserDashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    // Método para mostrar el dashboard del usuario
    public function index()
    {
        return view('user.dashboard'); // Asegúrate de tener la vista user.dashboard
    }
}

