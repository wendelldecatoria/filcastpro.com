<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creative;
use App\CreativeSkill;
use App\Skill;


class WebCreativeController extends Controller
{
    /* 
    * Show creatives page
    *
    * @return Response
    * 
    */

    public function index(){
        $creatives = Creative::where('is_active','=', 1)->orderBy('name')->get();
        $skills = Skill::where('group','=', 'director')->orderBy('name')->pluck('name','id')->reverse()->put('', '-----')->reverse();
        return view('web.creative.index', compact('creatives', 'skills'));
    }

    /* 
    * Show selected resource
    *
    * @return Response
    * 
    */

    public function show($id){
        $creative = Creative::with(['Image' => function ($query) {
            $query->where('group', '=', 'director');
        }])->where('id','=',$id) ->get();
        $skills = CreativeSkill::with('Skill')->where('creative_id','=', $id)->get(); //return $skills;
        return view('web.creative.show', compact('creative', 'skills') );
    }

    /* 
    * Search for resource
    *
    * @return Response
    * 
    */

    public function search(Request $request){

        $creatives = Creative:: leftJoin('creative_skill','creative_skill.creative_id','=', 'creatives.id')
            ->select('creatives.*', 'creative_skill.skill_id')
            ->when($request->input('skill'), function($query) use ($request) {
                return $query->where('creative_skill.skill_id', '=', $request->input('skill') );
            })
            ->when($request->input('name'), function($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->input('name') . '%' );
            })
            ->groupBy('name')
            ->orderBy('name')
            ->get();

        return response()->json($creatives);
    }
}
