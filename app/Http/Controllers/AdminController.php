<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;
use App\Grupo;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function index()
    {
        $carros = Carro::all();
        return view('admin.home', compact('carros'));
    }
}
