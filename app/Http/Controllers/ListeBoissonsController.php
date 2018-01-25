<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;

class ListeBoissonsController extends Controller
{
 public function listBoisson(){

     $listeBoissons = Boisson::get();


     return view('liste_boissons', compact('listeBoissons'));
 }
 public function editBoisson($id){

     $boisson = Boisson::find($id);


     return view('infoBoisson',compact('boisson'));
 }
 public function orderByName(){
     $listeBoissons = Boisson::orderBy('nom')->get();
     dump($listeBoissons);
     return view('liste_boissons',compact('listeBoissons'));
 }
    public function orderByPrice()
    {
        $listeBoissons = Boisson::orderBy('prix')->get();
        dump($listeBoissons);
        return view('liste_boissons', compact('listeBoissons'));
    }
}
