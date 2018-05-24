<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class WriterController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $writers = Writer::all();
			return Datatables::of($writers)->make(true);
        }

		return view('admin.writer.index');
    }

    /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $writer = Writer::find($id);
        return view('admin.writer.edit', compact('writer') );
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
            'name' => 'required',
            'title' => 'required'

        ]);
        
        if($request->hasFile('image')){

            $path = 'public/images/writers/';
            $image = $request->file('image');
            $photoname = md5_file($image->getRealPath() );
            $ext = $image->guessExtension();
            $file = $image->storeAs($path, $photoname.'.'.$ext);
    
            $data = [
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'image' => $photoname.'.'.$ext,
                'created_at' => Carbon::now()
            ];

        }else {
            $data = [
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'created_at' => Carbon::now()
            ];
        }
       
        
        Writer::where('id', '=', $id)->update($data);
	
		return redirect()->route('writer.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        return view('admin.writer.create');
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
       
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required'

        ]);
        
        $path = 'public/images/writers/';
        $image = $request->file('image');
        $photoname = md5_file($image->getRealPath() );
        $ext = $image->guessExtension();
        $file = $image->storeAs($path, $photoname.'.'.$ext);
 
        $data = [
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'image' => $photoname.'.'.$ext,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        Writer::insert($data);
	
		return redirect()->route('writer.index');
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
            "message" => "Record has been deleted.",
        ]);
    }
}
