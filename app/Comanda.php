<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = ['mesa_id', 'garcom_id', 'produto_id', 'nome'];
    public function mesa(){
        return $this->belongsTo('App\Mesa', 'mesa_id');
    }
    public function garcom(){
        return $this->belongsTo('App\Garcom', 'garcom_id');
    }
    public function produto(){
        return $this->hasMany('App\Produto');
    }   
}

