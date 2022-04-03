<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //Accueil
        return view('home');
    }

    public function apropos(){
        //Apropos de nous
        return view('/client.about');
    }
}
