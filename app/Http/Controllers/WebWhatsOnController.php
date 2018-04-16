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

    /* 
    * Show specified resource
    *
    * @return Response
    * 
    */
    public function show($id){
        
        // $article = WhatsOn::with('Writer')->where('id','=', $id)->get();
        // return view('web.whats-up.show', compact('article') );
    }
}
