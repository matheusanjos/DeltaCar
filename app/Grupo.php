<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Grupo;

class Grupo extends Model
{
    public function create()
    {
        return view('admin.novo-grupo');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome_completo = $request->input('nome_completo');
        $cliente->cpf = $request->input('cpf');
        $cliente->dt_nascimento = $request->input('dt_nascimento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $cliente->save();

        return redirect('admin/home');
    }
}
