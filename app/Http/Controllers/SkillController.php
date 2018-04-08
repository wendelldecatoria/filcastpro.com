<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class SkillController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $skills = Skill::all();
			return Datatables::of($skills)->make(true);
        }

		return view('admin.skill.index');
    }

     /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $skill = Skill::find($id);
        return view('admin.skill.edit', compact('skill') );
        // return $skill;
    }

    /*
    *  Update the specified resource
    *
    *
    */
    public function update(Request $request){
        
		$this->validate($request, [
            'name' => 'required',
            'group' => 'required', 
        ]);

        $id = $request->input('id');
 
        $data = [
            'name' => $request->input('name'),
            'group' => $request->input('group'), 
            'updated_at' => Carbon::now()
        ];
        
        Skill::where('id', '=', $id)->update($data);
	
		return redirect()->route('skill.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        return view('admin.skill.create');
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'group' => 'required', 
        ]);
 
        $data = [
            'name' => $request->input('name'),
            'group' => $request->input('group'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        Skill::insert($data);
	
        return redirect()->route('skill.index');
    }

     /*
    *  delete the selected resource
    *
    *
    */
    public function destroy($id){
        Skill::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Skill has been deleted.",
        ]);
    }
}
