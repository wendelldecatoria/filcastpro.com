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
        return view('web.whats-in.index');
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
