<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'valor'];
    public function comandas(){
        return $this->belongsToMany('App\Comanda', 'comanda_id');
    }
}
