<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class VideoController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $videos = Video::all();
			return Datatables::of($videos)->make(true);
		}

		return view('admin.video.index');
    }

     /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $video = Video::find($id);
        return view('admin.video.edit', compact('video') );
        // return $Video;
    }

    /*
    *  Update the specified resource
    *
    *
    */
    public function update(Request $request){

        $id = $request->input('id');
        $is_default = $request->input('is_default');
        
		$this->validate($request, [
            'title' => 'required', 
            'url' => 'required',    
            'is_default' => 'required',
            'is_active' => 'required',
        ]);

        if($request->hasFile('thumbnail')){
	        $path = 'public/images/thumbnails/';
	        $image = $request->file('thumbnail');
	        $photoname = md5_file($image->getRealPath() );
	        $ext = $image->guessExtension();
	        $file = $image->storeAs($path, $photoname.'.'.$ext);

	        // remove current defaults
	        if($is_default == 1) {
	        	Video::where('id', '<>', $id)->update(['is_default' => 0]);
	        }
	 
	        $data = [
	        	'thumbnail' => $photoname.'.'.$ext,
	            'title' => $request->input('title'),
	            'url' => $request->input('url'),
	            'is_default' => $request->input('is_default'),
	            'is_active' => $request->input('is_active'),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now()
	        ];
		
		} else {

			// remove current defaults
	        if($is_default == 1) {
	        	Video::where('id', '<>', $id)->update(['is_default' => 0]);
	        }
	        
	      	$data = [
	            'title' => $request->input('title'),
	            'url' => $request->input('url'),
	            'is_default' => $request->input('is_default'),
	            'is_active' => $request->input('is_active'),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now()
	        ];
	      }


        Video::where('id', '=', $id)->update($data);
	
		return redirect()->route('video.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        return view('admin.video.create');
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
       
        $this->validate($request, [
        	'thumbnail' => 'required', 
            'title' => 'required', 
            'url' => 'required',    
            'is_default' => 'required',
            'is_active' => 'required',
        ]);
        
        $path = 'public/images/thumbnails/';
        $image = $request->file('thumbnail');
        $photoname = md5_file($image->getRealPath() );
        $ext = $image->guessExtension();
        $file = $image->storeAs($path, $photoname.'.'.$ext);



       $id = Video::insertGetId([
        	'thumbnail' => $photoname.'.'.$ext,
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'is_default' => $request->input('is_default'),
            'is_active' => $request->input('is_active'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // remove current defaults
        if($request->input('is_default') == 1) {
        	Video::where('id', '!=', $id)->update(['is_default' => 0]);
        }
	
		return redirect()->route('video.index');
    }

    /*
    *  delete the selected resource
    *
    *
    */
    public function destroy($id){
        Video::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Video has been deleted.",
        ]);
    }
}
