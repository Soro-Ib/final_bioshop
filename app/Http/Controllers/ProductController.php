<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**GESTION DES PRODUITS COTE ADMIN */
    public function index(){
        $produits = Product::all();
        return view('admin.produit.index', compact('produits'));
    }

    public function create(){
        return view('admin.produit.create');
    }

    public function save(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required|max:1000',
            'image'=>'required|image|nullable|mimes:jpeg,png,jpg|max:2000',
            'prix'=>'required',
            'contenant'=>'required',
        ]);

        //Treat main image
        if($image = $request->file('image')){
            $path1 = 'images/products';
            $filename = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($path1, $filename);
            $request['image'] = $filename;
        }
        
        $produit = new Product;
        $produit->name = $request->name;
        $produit->prix = $request->prix;
        $produit->contenant = $request->contenant;
        $produit->image = $filename;
        $produit->description = $request->description;
        $produit->save();

        return redirect(route('produit.index'));
    }

    public function show($id){
        $produit = Product::find($id);
        return view('admin.produit.show', compact('produit'));
    }

    public function update(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required|max:1000',
            'image'=>'required|image|nullable|mimes:jpeg,png,jpg|max:2000',
            'prix'=>'required',
            'contenant'=>'required',
        ]);

        $produit = Product::find($request->input('id'));

        //Treat main image
        if($image = $request->file('image')){
            $path1 = 'images/products';
            $filename = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($path1, $filename);
            $request['image'] = $filename;
        }

        $produit = Product::find($request->input('id'));
        $produit->name = $request->name;
        $produit->prix = $request->prix;
        $produit->contenant = $request->contenant;
        $produit->image = $filename;
        $produit->description = $request->description;
        $produit->update();
        return redirect(route('produit.index'));
    }

    public function delete($id){
        $produit = Product::find($id);
        $produit->delete();
        return redirect(route('produit.index'));
    }

    /**GESTION DES PRODUITS COTE CLIENT */

   
}
