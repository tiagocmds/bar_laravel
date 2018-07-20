<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garcom extends Model
{
    protected $fillable = ['nome'];
    public function comanda(){
        return $this->hasMany('App\Comanda', 'comanda_id');
    }
}
