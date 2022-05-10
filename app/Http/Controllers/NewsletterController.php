<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function Symfony\Component\String\b;

class NewsletterController extends Controller
{
    public function save(Request $request){
        $this->validate($request, [
            'email'=>'required',
        ]);
        $email = new Newsletter();
        $email->email = $request->input('email');
        $email->save();
    
        Alert::success('Merci !', 'Votre abonnement a été pris en conte');
        return back();
    }
    

    public function index(){
        $emails = Newsletter::all();
        return view('admin.newsletter.index', compact('emails'));
    }
}
