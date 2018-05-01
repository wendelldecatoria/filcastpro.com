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
        return view('web.creatives.index', compact('creatives', 'skills'));
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
        }])->where('name','=',$id) ->get();
        $creative_id = Creative::where('name','=', $id)->pluck('id'); //return $creative_id;
        $skills = CreativeSkill::with('Skill')->where('creative_id','=', $creative_id)->get(); //return $skills;
        return view('web.creatives.show', compact('creative', 'skills') );
    }

    /* 
    * Search for resource
    *
    * @return Response
    * 
    */

    public function search(Request $request){

        $whatsin = Creative:: leftJoin('creative_skill','creative_skill.creative_id','=', 'creatives.id')
            ->select('creatives.*', 'creative_skill.skill_id')
            ->when($request->input('category'), function($query) use ($request) {
                return $query->where('whats_in_category.category_id', '=', $request->input('category') );
            })
            ->when($request->input('location'), function($query) use ($request) {
                return $query->where('location', 'like', '%' . $request->input('location') . '%' );
            })
            ->groupBy('name')
            ->orderBy('name')
            ->get();

        return response()->json($whatsin);
    }
}
