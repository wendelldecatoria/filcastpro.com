<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
<<<<<<< HEAD
use Yajra\Datatables\Datatables;
use Illuminate\Http\UploadedFile;
=======
use App\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
>>>>>>> b6f7695ca4e21d994aa1eb29f3f396da87c9fad3

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
<<<<<<< HEAD

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
<<<<<<< HEAD
            'gender' => $input['gender'],
=======
            'gender' =>$input['gender'],
>>>>>>> b6f7695ca4e21d994aa1eb29f3f396da87c9fad3
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
<<<<<<< HEAD
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
=======
            'thumb' => 'required',  // 'required|mimes:png,gif,jpeg,txt,pdf,doc'
            'photos' => 'required',    
            'is_active' => 'required'
        ]);
        
        $path = 'public/images/actors/';
        $id = $request->input('id');
 
        $allowedfileExtension=['jpg','png'];
        $file = $request->file('thumb');
        $photos = $request->file('photos');
        
        $filename = md5_file($file->getRealPath() );
        $extension = $file->guessExtension();
        $file = $request->file('thumb')->storeAs($path, $filename.'.'.$extension);
         
        $actor_id = Actor::insertGetId([
            'name' => $request->input('name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'contact' => $request->input('contact'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'height' => $request->input('height'),
            'vital' => $request->input('vital'),
            'manager' => $request->input('manager'),
            'email' => $request->input('email'),
            'online_profile' => $request->input('online_profile'),
            'works' => $request->input('works'),
            'thumb_image' => $filename.'.'.$extension,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        foreach ($photos as $photo) {
           // TODO: count photos. should be 4, hash filename
           // $validator = Validator::make(array('file'=> $file), $rules);

            // if($validator->passes()) {
                $photoname = $photo->getClientOriginalName(); 
                $ext = $photo->getClientOriginalExtension();
                //$file = $photo->storeAs($path, $photoname.'.'.$ext);
                $file = $photo->move($path, $photoname);
                

            //     // Flash a message and return the user back to a page...
            // } else {
            //     // redirect back with errors.
            //     return Redirect::to('upload')->withInput()->withErrors($validator);
            // }

            $data = [
                'actor_id' => $actor_id,
                'file_name' => $photoname,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];

            Image::insert($data);
        }
	
		return redirect()->route('artists.index');
    }

     /*
    *  show the selected resource
    *
    *
    */
    public function show($id){
        $actor = Actor::find($id);
        return view('admin.artists.index');
    }

    /*
    *  delete the selected resource
>>>>>>> b6f7695ca4e21d994aa1eb29f3f396da87c9fad3
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
=======
>>>>>>> 5f5c5dd07a5161d45b0b9ef6c048aa1eee1f52d6
}
