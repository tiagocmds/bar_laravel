<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['setor'];

    public function garcoms(){
        return $this->belongsToMany('App\Garcom')->withtimestamps();
    }
    public function produtos(){
        return $this->belongsToMany('App\Produto')->withtimestamps();
    }
}