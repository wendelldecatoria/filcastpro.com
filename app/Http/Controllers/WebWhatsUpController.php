<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhatsUp;

class WebWhatsUpController extends Controller
{
    /* 
    * Display whats up page
    *
    * @return Response  
    * 
    */
    public function index(){
        
        $featured = WhatsUp::with('Writer')->where('status','=', 1)->where('type','=', 2)->orderBy('created_at', 'desc')->get();
        $articles = WhatsUp::with('Writer')->where('status','=', 1)->where('type','=', 1)->orderBy('created_at', 'desc')->get();
        $archives = WhatsUp::with('Writer')->where('status','=', 2)->orderBy('created_at', 'desc')->get();
        return view('web.whats-up.index', compact('articles','featured', 'archives') );
    }

     /* 
    * Display whats up article
    *
    * @return Response
    * 
    */
    public function show($id){
        
        $article = WhatsUp::with('Writer')->where('id','=', $id)->get();
        return view('web.whats-up.show', compact('article') );
    }
}
