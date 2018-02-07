<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = ['boisson_id','total','Nom_boisson'];
    public function boisson (){
        return $this->belongsTo('App\Boisson');
    }
}
