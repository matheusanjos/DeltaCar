<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Endereco;
use App\CNH;

class ClienteController extends Controller
{
    public function create()
    {
        return view('cliente.register');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome_completo = $request->input('nome_completo');
        $cliente->cpf = $request->input('cpf');
        $cliente->dt_nascimento = $request->input('dt_nascimento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $endereco = new Endereco();
        $endereco->rua = $request->input('rua');
        $endereco->numero = $request->input('numero');
        $endereco->bairro = $request->input('bairro');
        $endereco->cidade = $request->input('cidade');
        $endereco->uf = $request->input('uf');

        $cnh = new CNH();
        $cnh->n_cnh = $request->input('n_cnh');
        $cnh->val_cnh = $request->input('val_cnh');
        $cnh->cat_cnh = $request->input('cat_cnh');

        $cliente->save();
        $cliente->endereco()->save($endereco);
        $cliente->cnh()->save($cnh);

        return redirect('home');
    }
}
