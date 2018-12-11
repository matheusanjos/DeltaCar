<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;
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
        $carro = new Carro();
        $carro->modelo = $request->input('modelo');
        $carro->marca = $request->input('marca');
        $carro->quantidade = $request->input('quantidade');
        $path = $request->file('imagem')->store('images', 'public');
        $carro->imagem = $path;
        $carro->grupo_id = $request->input('grupo');
        $carro->save();

        return redirect('/admin/carros');
    }
}
