<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;

class ActorController extends Controller
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
        $images = Image::where('actor_id','=', $id)->get();
        return view('admin.actors.edit', array('actor' => $actor, 'images' => $images));
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
        
        $path = 'public/images/actors/';
        $allowedfileExtension=['jpg','png'];
        
        if($request->hasFile('thumb')){

            $file = $request->file('thumb');
            $filename = md5_file($file->getRealPath() );
            $extension = $file->guessExtension();
            $file = $request->file('thumb')->storeAs($path, $filename.'.'.$extension);

            $actordata = [
                'name' => $input['name'],
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'contact' => $input['contact'],
                'age' => $input['age'],
                'gender' =>$input['gender'],
                'height' => $input['height'],
                'vital' => $input['vital'],
                'manager' => $input['manager'],
                'email' => $input['email'],
                'online_profile' => $input['online_profile'],
                'works' => $input['works'],
                'thumb_image' => $filename.'.'.$extension,
                'is_active' => $input['is_active'],
                'updated_at' => Carbon::now()
            ];

        } else{
            $actordata = [
                'name' => $input['name'],
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'contact' => $input['contact'],
                'age' => $input['age'],
                'gender' =>$input['gender'],
                'height' => $input['height'],
                'vital' => $input['vital'],
                'manager' => $input['manager'],
                'email' => $input['email'],
                'online_profile' => $input['online_profile'],
                'works' => $input['works'],
                'is_active' => $input['is_active'],
                'updated_at' => Carbon::now()
            ];
        }
		
        Actor::where('id', '=', $id)->update($actordata);
        
        if($request->hasFile('photos')){
            
            $photos = $request->file('photos');
            foreach ($photos as $photo) {
                $photoname = md5_file($photo->getRealPath() );
                $ext = $photo->guessExtension();
                $file = $photo->storeAs($path, $photoname.'.'.$ext);

                $data = [
                    'actor_id' => $id,
                    'file_name' => $photoname.'.'.$ext,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
    
                Image::insert($data);
            }
        }
	
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
            'is_active' =>  $request->input('is_active'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        foreach ($photos as $photo) {
            $photoname = md5_file($photo->getRealPath() );
            $ext = $photo->guessExtension();
            $file = $photo->storeAs($path, $photoname.'.'.$ext);

            $data = [
                'actor_id' => $actor_id,
                'file_name' => $photoname.'.'.$ext,
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
