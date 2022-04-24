<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('client.contact.create');
    }

    public function save(Request $request){
        $this->validate($request, [
            'nom'=>'required',
            'telephone'=>'required',
        ]);
        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->telephone = $request->input('telephone');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();
        return back()->with('status', 'Merci d\'avoir contacter BioShop');
    }
    public function index(){
        $contacts = Contact::get();
        return view('admin.contact.index', compact('contacts'));
    }
}
