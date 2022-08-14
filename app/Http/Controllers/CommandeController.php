<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class CommandeController extends Controller
{
    public function create(){
        return view('client.commande.create');
    }

    public function save(Request $request){

        $request->validate([
            'nom'=>'required',
            'address'=>'required',
            'telephone'=>'required',
            'email'=>'required|email',
        ]);

        $commande = new Commande();
        $commande->nom = $request->input('nom');
        $commande->address = $request->input('address');
        $commande->telephone = $request->input('telephone');
        $commande->email = $request->input('email');
        $commande->soubara_500 = $request->input('soubara500');
        $commande->soubara_1000 = $request->input('soubara1000');
        $commande->piment_500 = $request->input('piment500');
        $commande->piment_1000 = $request->input('piment1000');
        $commande->status = 0;

        $commande->save();
        Alert::success('Succès !', "Votre commande est enregistré");
        return redirect('/commander');
    }
    public function index(){
        $commandes = Commande::get();
        return view('admin.commande.index', compact('commandes'));
    }

    public function valider($id){
        $commande = Commande::find($id);
        $commande->status = 1;
        $commande->update();

        Alert::success('Succès !', "La commande a été valider");
        return back();
    }

    public function annuler($id){
        $commande = Commande::find($id);
        $commande->status = 2;
        $commande->update();
        
        Alert::success('Succès !', "La commande a été refuser");
        return back();
    }

    public function client(){
        $clients = DB::table('commandes')->select('nom', 'address', 'telephone', 'email')->where('status', 1)->get();
        return view('admin.commande.client', compact('clients'));
    }
}
