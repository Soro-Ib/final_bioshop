<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //Accueil

        $produits = Product::all();
        $carrousels = Carrousel::all();
        return view('home', compact('produits', 'carrousels'));
    }

    public function apropos(){
        //Apropos de nous
        return view('/client.about');
    }
}
