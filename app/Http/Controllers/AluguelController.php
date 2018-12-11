<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluguel;
use App\Carro;
use App\Grupo;

class AluguelController extends Controller
{
    public function alugarCarro()
    {
        $aluguel = new Aluguel;
        $aluguel->local_retirada = $request->input('local_retirada');
        $aluguel->dt_retirada = $request->input('dt_retirada');
        $aluguel->dt_entrega = $request->input('dt_entrega');
        $aluguel->cliente_id = $request->input('cliente_id');
        $aluguel->carro_id = $request->input('carro_id');

        $aluguel->save();
    }
}
