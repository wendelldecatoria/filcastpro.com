<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebWhatsInController extends Controller
{
    /* 
    * Show what's in page
    *
    * @return Response
    * 
    */

    public function index(){
        return view('whats-in');
    }
}
