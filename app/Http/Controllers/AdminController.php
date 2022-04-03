<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return View('admin.dashboard');
    }
}
