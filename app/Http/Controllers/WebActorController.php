<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\ActorSkill;
use App\Contact;
use App\Register;
use App\WhatsUp;
use App\Skill;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
use App\Inquiry;
use App\Video;
use Mail;

class WebActorController extends Controller
{
    /* 
    * Display actors page
    *
    * @return Response
    * 
    */  

    public function index(){
        $actors = Actor::where('is_active','=', 1)->orderBy('name')->get();
        $skills = Skill::where('group','=', 'actor')->orderBy('name')->pluck('name','id')->reverse()->put('', '-----')->reverse();
        return view('web.actors.index', compact('actors', 'skills'));
    }

    /* 
    * Show selected actor
    *
    * @return Response
    * 
    */

    public function show($id){
        $actor = Actor::with(['Image' => function ($query) {
                $query->where('group', '=', 'actor');
        }])->where('id','=',$id)
            ->get(); //return $actor;
        $skills = ActorSkill::with('Skill')->where('actor_id','=', $id)->get(); //return $skills;
        return view('web.actors.show', compact('actor', 'skills') );
    }

    /* 
    * Search for actor
    *
    * @return Response
    * 
    */
    public function search(Request $request){
        //array('0' => 'All Ages', '1' => '10 and below', '2' => '11 to 20', '3' => '21 to 30', '4' => '31 to 40', '5' => '41 and above')
        if($request->input('age') == 0){
            $val1 = 0;
            $val2 = 100;
        }else if($request->input('age') == 1){
            $val1 = 1;
            $val2 = 10;
        }else if($request->input('age') == 2){
            $val1 = 11;
            $val2 = 20;
        }else if($request->input('age') == 3){
            $val1 = 21;
            $val2 = 30;
        }else if($request->input('age') == 4){
            $val1 = 31;
            $val2 = 40;
        }else if($request->input('age') == 5){
            $val1 = 41;
            $val2 = 100;
        } else {

        }

        $gender = $request->input('gender');

        $actors = Actor:: leftJoin('actor_skill','actor_skill.actor_id','=', 'actors.id')
            ->select('actors.*', 'actor_skill.skill_id')
            // filter age bracket
            ->whereBetween('age', [$val1, $val2]) 
            // filter gender
            ->when($request->input('gender'), function($query) use ($request) {
                return $query->where('gender','=', $request->input('gender'));
            })
            ->when($request->input('name'), function($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->input('name') . '%' );
            })
            ->when($request->input('skill'), function($query) use ($request) {
                return $query->where('actor_skill.skill_id', '=', $request->input('skill') );
            })
            ->groupBy('name')
            ->orderBy('name')
            ->get();
        
        // return view('web.actors.index', compact('actors', 'skills'));
        return response()->json($actors);

    }
}
