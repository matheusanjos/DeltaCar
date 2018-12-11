<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    public function grupo(){
        return $this->belongsTo('App\Grupo');
    }
}
