<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //Accueil

        $produits = Product::all();
        return view('home', compact('produits'));
    }

    public function apropos(){
        //Apropos de nous
        return view('/client.about');
    }
}
