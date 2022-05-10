<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $commandes = Commande::get();
        return View('admin.dashboard', compact('commandes'));
    }
}
