<?php

namespace App\Http\Controllers;
use App\WhatsOn;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class WhatsOnController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $whatson = WhatsOn::all();
			return Datatables::of($whatson)->make(true);
        }

		return view('admin.whats-on.index');
    }

     /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $whatson = WhatsOn::find($id);
        return view('admin.whats-on.edit', compact('whatson') );
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
            'title' => 'required',
            'venue' => 'required', 
            'date_from' => 'required',    
            'date_to' => 'required',
            'is_active' => 'required'
        ]);
 
        $data = [
            'title' => $request->input('title'),
            'venue' => $request->input('venue'), 
            'date_from' => $request->input('date_from'),    
            'date_to' => $request->input('date_to'),
            'is_active' => $request->input('is_active'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        WhatsOn::where('id', '=', $id)->update($data);
	
		return redirect()->route('whats-on.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        return view('admin.whats-on.create');
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
        
        $this->validate($request, [
            'title' => 'required',
            'venue' => 'required', 
            'date_from' => 'required',    
            'date_to' => 'required',
            'is_active' => 'required'
        ]);
 
        $data = [
            'title' => $request->input('title'),
            'venue' => $request->input('venue'), 
            'date_from' => $request->input('date_from'),    
            'date_to' => $request->input('date_to'),
            'is_active' => $request->input('is_active'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        WhatsOn::insert($data);
	
        return redirect()->route('whats-on.index');
    }
}
