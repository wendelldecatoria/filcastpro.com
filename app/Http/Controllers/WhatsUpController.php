<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhatsUp;
use App\Writer;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class WhatsUpController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            // $whatsup = WhatsUp::join('writers', 'writers.id', '=', 'whats_up.writer_id')
            //                     ->select('whats_up.id','writers.name', 'writers.title', 'whats_up.headline','whats_up.status','whats_up.created_at','whats_up.updated_at')
            //                     ->get();
            $whatsup = WhatsUp::all();
			return Datatables::of($whatsup)->make(true);
        }

		return view('admin.whats-up.index');
    }

    /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $whatsup = WhatsUp::find($id);
        return view('admin.whats-up.edit', compact('whatsup') );
        // return $whatsup;
    }

    /*
    *  Update the specified resource
    *
    *
    */
    public function update(Request $request){

        $id = $request->input('id');
        
		$this->validate($request, [
            'writer' => 'required',
            'headline' => 'required', 
            'content' => 'required',    
            'status' => 'required',
            'type' => 'required'
        ]);
 
        $data = [
            'writer' => $request->input('writer'),
            'title' => $request->input('title'),
            'headline' => $request->input('headline'),
            'content' =>  $request->input('content'),
            'status' =>  $request->input('status'),
            'type' =>  $request->input('type'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        WhatsUp::where('id', '=', $id)->update($data);
	
		return redirect()->route('whats-up.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        $writers = Writer::pluck('name','id')->reverse()->put('', '-----')->reverse();
        return view('admin.whats-up.create',compact('writers') );
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
       
        $this->validate($request, [
            'image' => 'required',
            'writer' => 'required',
            'title' => 'required',
            'headline' => 'required', 
            'content' => 'required',    
            'status' => 'required',
            'type' => 'required'
        ]);
        
        $path = 'public/images/writers/';
        $image = $request->file('image');
        $photoname = md5_file($image->getRealPath() );
        $ext = $image->guessExtension();
        $file = $image->storeAs($path, $photoname.'.'.$ext);
 
        $data = [
            'writer' => $request->input('writer'),
            'title' => $request->input('title'),
            'headline' => $request->input('headline'),
            'content' =>  $request->input('content'),
            'status' =>  $request->input('status'),
            'type' =>  $request->input('type'),
            'image' => $photoname.'.'.$ext,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        WhatsUp::insert($data);
	
		return redirect()->route('whats-up.index');
    }

    /*
    *  delete the selected resource
    *
    *
    */
    public function destroy($id){
        WhatsUp::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Article has been deleted.",
        ]);
    }
}
