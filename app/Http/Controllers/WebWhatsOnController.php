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
        $dt = Carbon::now();
        $today = WhatsOn::whereDate('date_from','=', Carbon::today()->toDateString())->orderBy('date_from')->get();

        if($dt->isSaturday() ){ //if Carbon::now() is a saturday
            // get all records from today until end of week saturday
            $thisWeek = WhatsOn::whereDate('date_from','=', Carbon::today()->toDateString())->orderBy('date_from')->get();
        }else{
            // get all records today until Saturday
            $thisWeek = WhatsOn::whereBetween('date_from', [ Carbon::today()->toDateString() ,  Carbon::parse('this saturday')->toDateString() ])->orderBy('date_from')->get();
        }

        $nextWeek = WhatsOn::whereBetween('date_from', [ Carbon::parse('this sunday')->toDateString() ,  Carbon::parse('this saturday')->addWeek()->toDateString() ])->orderBy('date_from')->get();


        $thisMonth = WhatsOn::whereMonth('date_from', '=', date('m') )->orderBy('date_from')->get();
        $nextMonth = WhatsOn::whereMonth('date_from', '>', date('m') )->orderBy('date_from')->get();

        return view('web.whats-on.index', compact('today','thisWeek','nextWeek', 'thisMonth', 'nextMonth') );
        // return $thisWeek;
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
