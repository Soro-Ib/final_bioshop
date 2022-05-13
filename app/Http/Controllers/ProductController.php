<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
            'image'=>'required|image|nullable|mimes:jpeg,png,jpg|max:7000',
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
        $produit->status = 0;
        $produit->save();
        Alert::success('Succès !', "Le produit a bien été ajouté");
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
            'image'=>'required|image|nullable|mimes:jpeg,png,jpg|max:7000',
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
        $produit->status = 0;
        $produit->update();
        Alert::success('Succès !', "Le produit a bien été modifier");
        return redirect(route('produit.index'));
    }

    public function delete($id){
        $produit = Product::find($id);
        $produit->delete();
        return redirect(route('produit.index'));
    }

    public function activer($id){
        $produit = Product::find($id);
        $produit->status = 0;
        $produit->update();
        Alert::success('Succès !', "Le produit a bien été activé");
        return redirect(route('produit.index'));
    }

    public function desactiver($id){
        $produit = Product::find($id);
        $produit->status = 1;
        $produit->update();
        Alert::success('Succès !', "Le produit a bien été desactivé");
        return redirect(route('produit.index'));
    }

    /**GESTION DES PRODUITS COTE CLIENT */

   
}
