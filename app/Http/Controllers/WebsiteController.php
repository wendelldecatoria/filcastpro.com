<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /* 
    * Display enter page
    *
    * @return Response
    * 
    */
    public function index(){
        return view('index');
    }

    /* 
    * Display home page
    *
    * @return Response
    * 
    */
    public function home(){
        return view('home');
    }

    /* 
    * Display actors page
    *
    * @return Response
    * 
    */
    public function actors(){
        return view('actors');
    }

    /* 
    * Display contact page
    *
    * @return Response
    * 
    */
    public function contact(){
        return view('contact');
    }

    /* 
    * Display news room page
    *
    * @return Response
    * 
    */
    public function newsRoom(){
        return view('news-room');
    }


}
