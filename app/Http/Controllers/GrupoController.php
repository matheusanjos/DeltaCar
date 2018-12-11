<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Carro;

class GrupoController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('cliente.carros', compact('carros'));
    }

    public function create()
    {
        return view('admin.novo-grupo');
    }

    public function store(Request $request)
    {
        $grupo = new Grupo();
        $grupo->nome = $request->input('nome');
        $grupo->descricao = $request->input('descricao');

        $grupo->save();

        return redirect('/admin/home');
    }
}
