<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

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

        return redirect('/commander')->with('status', 'Votre commande est enregistrée ! Merci d\'avoir commander sur BioShop');
    }
    public function index(){
        $commandes = Commande::get();
        return view('admin.commande.index', compact('commandes'));
    }
}
