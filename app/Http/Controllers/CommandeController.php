<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Alert;

class CommandeController extends Controller
{
    public function create(){
        return view('client.commande.create');
    }

    public function save(Request $request){
        $commande = new Commande();
        $commande->nom = $request->input('nom');
        $commande->address = $request->input('address');
        $commande->telephone = $request->input('telephone');
        $commande->email = $request->input('email');
        $commande->soubara_500 = $request->input('soubara500');
        $commande->soubara_1000 = $request->input('soubara1000');
        $commande->piment_500 = $request->input('piment500');
        $commande->piment_1000 = $request->input('piment1000');

        $commande->save();
        Alert::success('Succès !', "Votre commande est enregistré");
        return redirect('/commander');
    }
    public function index(){
        $commandes = Commande::get();
        return view('admin.commande.index', compact('commandes'));
    }
}
