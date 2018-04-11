<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creative;
use app\CreativeSkill;


class WebCreativeController extends Controller
{
    /* 
    * Show creatives page
    *
    * @return Response
    * 
    */

    public function index(){
        return view('web.creatives.index');
    }

    /* 
    * Show selected resource
    *
    * @return Response
    * 
    */

    public function show($id){
        $creative = Creative::with('Image')->where('id','=',$id)->get(); //return $actor;
        $skills = CreativeSkill::with('Skill')->where('creative_id','=', $id)->get(); //return $skills;
        return view('web.creatives.show', compact('actor', 'skills') );
    }
}
