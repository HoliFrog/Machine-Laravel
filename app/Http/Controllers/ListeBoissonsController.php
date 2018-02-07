<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Boisson;

class ListeBoissonsController extends Controller
{
    public function listBoisson()
    {

        //$listeBoissons = Boisson::get();
        $listeBoissons = DB::select('SELECT * from boissons');


        return view('liste_boissons', compact('listeBoissons'));
    }

    public function showBoisson($id)
    {

//        $boisson = Boisson::find($id);
        $boisson = DB::select('Select * from boissons where boissons.id =  ? limit 1 ', [$id]);
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
