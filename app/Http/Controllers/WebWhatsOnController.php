<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhatsOn;
use Carbon\Carbon;

class WebWhatsOnController extends Controller
{
    /*
    * Display whats on page
    *
    * @return Response
    *
    */
    public function index(){
        $today = WhatsOn::whereDate('date_from','=', Carbon::today()->toDateString() )->get();
        //return view('web.whats-on.index');
        return $today;
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
