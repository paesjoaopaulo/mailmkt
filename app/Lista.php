<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    public function clientes(){
        return $this->belongsToMany('App\Cliente', 'lista_clientes', 'lista_id', 'cliente_id');
    }

    public function sendMailToClientes($subject, $message){
        
    }
}
