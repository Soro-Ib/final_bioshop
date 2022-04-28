<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use Illuminate\Http\Request;

class CarrouselController extends Controller
{
    public function create(){
        return view('admin.carrousel.create');
    }

    public function save(Request $request){
        $request->validate([
            'description'=>'required|max:1000',
            'image'=>'required|image|nullable|mimes:jpeg,png,jpg|max:2000',
        ]);

        //Treat main image
        if($image = $request->file('image')){
            $path1 = 'images/carrousels';
            $filename = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($path1, $filename);
            $request['image'] = $filename;
        }
        
        $carrousel = new Carrousel();
        $carrousel->image = $filename;
        $carrousel->description = $request->description;
        $carrousel->save();
        return redirect(route('carrousel.index'));
    }

    public function show($id){
        $carrousel = Carrousel::find($id);
        return view('admin.carrousel.show', compact('carrousel'));
    }

    public function update(Request $request){
        $request->validate([
            'description'=>'required|max:1000',
            'image'=>'required|image|nullable|mimes:jpeg,png,jpg|max:2000',
        ]);

        //Treat main image
        if($image = $request->file('image')){
            $path1 = 'images/carrousels';
            $filename = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($path1, $filename);
            $request['image'] = $filename;
        }
        
        $carrousel = Carrousel::find($request->input('id'));
        $carrousel->image = $filename;
        $carrousel->description = $request->description;
        $carrousel->update();
        return redirect(route('carrousel.index'));
    }

    public function delete($id){
        $carrousels = Carrousel::find($id);
        $carrousels->delete();
        return redirect(route('carrousel.index'));
    }

    public function index(){
        $carrousels = Carrousel::all();
        return view('admin.carrousel.index', compact('carrousels'));
    }


}
