<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function principal(){
        return view('app.contact');
    }
}
