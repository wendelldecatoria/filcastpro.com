<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use Yajra\Datatables\Datatables;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{
    /*
    * 
    *
    *
    */

    public function home(){
        return view('admin.home');
    }

    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
			$actors = Actor::all();
			return Datatables::of($actors)->make(true);
		}

		return view('admin.actors.index');
    }
    
    /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $actor = Actor::where('id','=', $id)->get();
        return view('admin.actors.edit', compact('actor'));
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
		]);

		$data = [
			'name' => $input['name'],
			'first_name' => $input['first_name'],
			'last_name' => $input['last_name'],
			'contact' => $input['contact'],
			'age' => $input['age'],
            'gender' => $input['gender'],
            'height' => $input['height'],
            'vital' => $input['vital'],
            'manager' => $input['manager'],
            'email' => $input['email'],
            'online_profile' => $input['online_profile'],
            'works' => $input['works'],
		];

		Actor::where('id', '=', $id)->update($data);
	
		return redirect()->route('artists.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        return view('admin.actors.create');
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'profile_image' => 'required',
            // 'thumb_image' => 'required',
            // 'sub_image_1' => 'required',
            // 'sub_image_2' => 'required',
            // 'sub_image_3' => 'required',
            // 'sub_image_4' => 'required',      
        ]);
        
        $path = './storage/images/actors/';
        
        // $pf_md5Name = md5_file($request->file('profile_image')->getRealPath());
        // $pf_guessExtension = $request->file('profile_image')->guessExtension();
        // $pf_file = $request->file('profile_image')->storeAs($path, $pf_md5Name.'.'.$pf_guessExtension);

        // $ti_md5Name = md5_file($request->file('thumb_image')->getRealPath());
        // $ti_guessExtension = $request->file('thumb_image')->guessExtension();
        // $ti_file = $request->file('thumb_image')->storeAs($path, $ti_md5Name.'.'.$ti_guessExtension);

        // $s1_md5Name = md5_file($request->file('sub_image_1')->getRealPath());
        // $s1_guessExtension = $request->file('sub_image_1')->guessExtension();
        // $s1_file = $request->file('sub_image_1')->storeAs($path, $s1_md5Name.'.'.$s1_guessExtension);
        
        // $s2_md5Name = md5_file($request->file('sub_image_2')->getRealPath());
        // $s2_guessExtension = $request->file('sub_image_2')->guessExtension();
        // $s2_file = $request->file('sub_image_2')->storeAs($path, $s2_md5Name.'.'.$s2_guessExtension);
        
        // $s3_md5Name = md5_file($request->file('sub_image_3')->getRealPath());
        // $s3_guessExtension = $request->file('sub_image_3')->guessExtension();
        // $s3_file = $request->file('sub_image_3')->storeAs($path, $s3_md5Name.'.'.$s3_guessExtension);
        
        // $s4_md5Name = md5_file($request->file('sub_image_4')->getRealPath());
        // $s4_guessExtension = $request->file('sub_image_4')->guessExtension();
        // $s4_file = $request->file('sub_image_4')->storeAs($path, $s4_md5Name.'.'.$s4_guessExtension);
        

        $request->file('profile_image');
		$data = [
			'name' => $input['name'],
			'first_name' => $input['first_name'],
			'last_name' => $input['last_name'],
			'contact' => $input['contact'],
			'age' => $input['age'],
            'gender' => $input['gender'],
            'height' => $input['height'],
            'vital' => $input['vital'],
            'manager' => $input['manager'],
            'email' => $input['email'],
            'online_profile' => $input['online_profile'],
            'works' => $input['works'],
            'profile_image' => $pf_md5Name.'.'.$pf_guessExtension,
            'thumb_image' => $ti_md5Name.'.'.$ti_guessExtension,
            'sub_image_1' => $s1_md5Name.'.'.$s1_guessExtension,
            'sub_image_2' => $s1_md5Name.'.'.$s2_guessExtension,
            'sub_image_3' => $s1_md5Name.'.'.$s3_guessExtension,
            'sub_image_4' => $s1_md5Name.'.'.$s4_guessExtension,
		];

		//Actor::where('id', '=', $id)->update($data);
	
		//return redirect()->route('artists.index');
    }

    /*
    *  delete the selected created resource
    *
    *
    */
    public function destroy($id){
        Actor::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Artist has been deleted.",
        ]);
    }
}
