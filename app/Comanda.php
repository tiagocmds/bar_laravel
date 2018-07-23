<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = ['mesa_id', 'garcom_id', 'nome'];
    public function produtos(){
        return $this->belongsToMany('App\Produto');
    }   
}

