<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class NewsletterController extends Controller
{
    public function save(Request $request){
        $email = new Newsletter();
        $email->email = $request->input('email');
        $email->save();
        return back();
    }

    public function index(){
        $emails = Newsletter::all();
        return view('admin.newsletter.index', compact('emails'));
    }
}
