<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function carro(){
        return $this->belongsTo('App\Carro');
    }
}
