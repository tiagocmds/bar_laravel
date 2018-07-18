<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = ['mesa_id', 'garcom_id', 'produto_id'];
    public function mesa(){
        return $this->hasOne('App\Mesa', 'mesa_id');
    }
    public function garcom(){
        return $this->hasOne('App\Garcom', 'garcom_id');
    }
    public function produtos(){
        return $this->hasMany('App\Produto', 'produto_id');
    }    
}

