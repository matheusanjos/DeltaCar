<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;

class GrupoController extends Controller
{
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

        return redirect('home');
    }
}
