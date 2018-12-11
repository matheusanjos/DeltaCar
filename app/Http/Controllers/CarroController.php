<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carro\App;
use App\Grupo;

class CarroController extends Controller
{
    public function index()
    {
        return view('admin.carros');
    }

    public function create()
    {
        $grupos = Grupo::all();
        return view('admin.novo-carro', compact('grupos'));
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->modelo = $request->input('modelo');
        $produto->marca = $request->input('marca');
        $produto->quantidade = $request->input('quantidade');
        $produto->grupo_id = $request->input('grupo');
        $produto->save();

        return redirect('/admin/home');
    }
}
