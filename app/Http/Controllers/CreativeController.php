<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Creative;
use App\CreativeSkill;
use App\Image;
use App\Skill;
use Yajra\Datatables\Datatables;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;

class CreativeController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
			$creatives = Creative::all();
			return Datatables::of($creatives)->make(true);
		}

		return view('admin.creatives.index');
    }
    
    /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $creative = Creative::where('id','=', $id)->get();
        $images = Image::where('actor_id','=', $id)->where('group','=', 'director')->get(); // used existing column name - actor-id instead of creative_id
        $skills = Skill::where('group','=', 'director')->orderBy('name')->pluck('name','id');
        $creativeskills = CreativeSkill::where('creative_id','=', $id)->pluck('skill_id');
        return view('admin.creatives.edit', compact('creative', 'images', 'skills', 'creativeskills') );
    }

    /*
    *  Update the specified resource
    *
    *
    */
    public function update(Request $request){
        $input = $request->all();
		$id = $input['id'];

        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'skills' => 'required',
            'is_active' => 'required'
        ]);
        
        $path = 'public/images/creatives/';
        $allowedfileExtension=['jpg','png'];
        
        if($request->hasFile('thumb')){

            $file = $request->file('thumb');
            $filename = md5_file($file->getRealPath() );
            $extension = $file->guessExtension();
            $file = $request->file('thumb')->storeAs($path, $filename.'.'.$extension);

            $data = [
                'name' => $request->input('name'),
	            'contact' => $request->input('contact'),
	            'gender' => $request->input('gender'),
	            'management' => $request->input('management'),
	            'email' => $request->input('email'),
	            'works' => $request->input('works'),
	            'thumb_image' => $filename.'.'.$extension,
	            'is_active' =>  $request->input('is_active'),
	            'updated_at' => Carbon::now()
            ];

        } else{
            $data = [
	            'name' => $request->input('name'),
	            'contact' => $request->input('contact'),
	            'gender' => $request->input('gender'),
	            'management' => $request->input('management'),
	            'email' => $request->input('email'),
	            'works' => $request->input('works'),
	            'is_active' =>  $request->input('is_active'),
	            'updated_at' => Carbon::now()
            ];
        }
		
        Creative::where('id', '=', $id)->update($data);
        
        if($request->hasFile('photos')){
            
            $photos = $request->file('photos');
            foreach ($photos as $photo) {
                $photoname = md5_file($photo->getRealPath() );
                $ext = $photo->guessExtension();
                $file = $photo->storeAs($path, $photoname.'.'.$ext);

                $data = [
                    'actor_id' => $id, // used existing column name - actor-id instead of creative_id
                    'file_name' => $photoname.'.'.$ext,
                    'group' => 'director',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
    
                Image::insert($data);
            }
        }

        if($request->has('skills')){
            $skills = $request->input('skills');
            
            // sanitize skills. remove all before insert
            CreativeSkill::where('creative_id','=', $id)->delete();

            foreach($skills as $skill){
                $creativeskill = [
                    'creative_id' => $id, 
                    'skill_id' => $skill, 
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                CreativeSkill::insert($creativeskill);
            }
        }
	
		return redirect()->route('creatives.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        $skills = Skill::where('group','=', 'director')->orderBy('name')->pluck('name','id');
        return view('admin.creatives.create', compact('skills') );
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'thumb' => 'required',  // 'required|mimes:png,gif,jpeg,txt,pdf,doc'
            'skills' => 'required',
            'photos' => 'required',    
            'is_active' => 'required'
        ]);
        
        $path = 'public/images/creatives/';
        $id = $request->input('id');
 
        $allowedfileExtension=['jpg','png'];
        $file = $request->file('thumb');
        $photos = $request->file('photos');
        
        $filename = md5_file($file->getRealPath() );
        $extension = $file->guessExtension();
        $file = $request->file('thumb')->storeAs($path, $filename.'.'.$extension);
         
        $creative_id = Creative::insertGetId([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'gender' => $request->input('gender'),
            'management' => $request->input('management'),
            'email' => $request->input('email'),
            'works' => $request->input('works'),
            'thumb_image' => $filename.'.'.$extension,
            'is_active' =>  $request->input('is_active'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        foreach ($photos as $photo) {
            $photoname = md5_file($photo->getRealPath() );
            $ext = $photo->guessExtension();
            $file = $photo->storeAs($path, $photoname.'.'.$ext);

            $data = [
                'actor_id' => $creative_id, // used existing column name - actor-id instead of creative_id
                'file_name' => $photoname.'.'.$ext,
                'group' => 'director',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];

            Image::insert($data);
        }

        if($request->has('skills')){
            $skills = $request->input('skills');
            
            foreach($skills as $skill){
                $creativeskill = [
                    'creative_id' => $creative_id,
                    'skill_id' => $skill,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                CreativeSkill::insert($creativeskill);
            }
        }
	
		return redirect()->route('creatives.index');
    }

    /*
    *  delete the selected resource
    *
    *
    */
    public function destroy($id){
        Creative::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Artist has been deleted.",
        ]);
    }
}
