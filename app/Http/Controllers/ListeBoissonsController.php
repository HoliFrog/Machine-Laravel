<?php

namespace App\Http\Controllers;

use App\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Boisson;

class ListeBoissonsController extends Controller
{
    public function listBoisson()
    {

        $listeBoissons = Boisson::get();
//        $listeBoissons = DB::select('SELECT * from boissons');
//        $ventes = Vente::get();


        return view('liste_boissons', compact('listeBoissons'));
    }

    public function venteStore(Boisson $boisson){
        //Attention il faut que le parametre de la route ai le même nom que l'objet créé en parametre!!!
//        $boisson = Boisson::find($id);
//        dd($boisson);
        //
        Vente::create(['boisson_id'=>$boisson->id,'total'=>$boisson->prix,'Nom_boisson'=>$boisson->nom]);
        return redirect('/boissons');
    }

    public function showBoisson($id)
    {

        $boisson = Boisson::find($id);
//        $boisson = DB::select('Select * from boissons where boissons.id =  ? limit 1 ', [$id]);
        //la raw querie revoie un tableau!!!
//        dd($boisson);



        return view('infoBoisson', compact('boisson'));
    }

    public function orderByName()
    {
        $listeBoissons = Boisson::orderBy('nom')->get();
        dump($listeBoissons);
        return view('liste_boissons', compact('listeBoissons'));
    }

    public function orderByPrice()
    {
        $listeBoissons = Boisson::orderBy('prix')->get();
        dump($listeBoissons);
        return view('liste_boissons', compact('listeBoissons'));
    }

    public function destroy($id)
    {
        Boisson::find($id)->delete();
        return redirect('/boissons');
    }

    public function editBoisson($id)
    {
        $boisson = Boisson::find($id);
        return view('updateBoisson', compact('boisson'));
    }
    public function update(Request $request, $id)
    {
        Boisson::find($id)->update(['nom' => $request->nom,
            'prix' => $request->prix,
            'CODE' => $request->CODE]);
        return redirect('/boissons');

    }
}
