<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $fillable = ['Nome', 'Valor'];
    public function comandas(){
        return $this->belongsToMany('App\comanda')->withTimestamps();
    }
}
