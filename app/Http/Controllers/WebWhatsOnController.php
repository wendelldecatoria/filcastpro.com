<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebWhatsOnController extends Controller
{
    /* 
    * Display whats on page
    *
    * @return Response
    * 
    */
    public function index(){
        return view('whats-on');
    }
}
