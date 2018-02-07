<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    protected $fillable = ['nom', 'prix','CODE' ];
    //relation une boisson plusieurs ventes
    public function ventes(){
        return $this->hasMany('App\Vente');
    }
}
