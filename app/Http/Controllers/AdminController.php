<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        $commandes = DB::table('commandes')->select('*')->where('status', 0)->get();

        $soubara500 = DB::table('commandes')->select('soubara_500')->where('status', 1)->get()->sum('soubara_500');
        $soubara1000 = DB::table('commandes')->select('soubara_1000')->where('status', 1)->get()->sum('soubara_1000');
        $piment500 = DB::table('commandes')->select('piment_500')->where('status', 1)->get()->sum('piment_500');
        $piment1000 = DB::table('commandes')->select('piment_1000')->where('status', 1)->get()->sum('piment_1000');
        $revenu_soubara = $soubara500 * 500 + $soubara1000 * 1000;
        $revenu_piment = $piment500 * 500 + $piment1000 * 1000;

        $clients = DB::table('commandes')->select('nom', 'address', 'telephone', 'email')->where('status', 1)->get()->count();

        return View('admin.dashboard', compact('commandes', 'revenu_soubara', 'revenu_piment', 'clients'));
    }
    
}
