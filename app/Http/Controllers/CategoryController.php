<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $categories = Category::all();
			return Datatables::of($categories)->make(true);
        }

        return view('admin.category.index');
        
    }

     /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category') );
    }

    /*
    *  Update the specified resource
    *
    *
    */
    public function update(Request $request){
        
		$this->validate($request, [
            'name' => 'required'
        ]);

        $id = $request->input('id');
 
        $data = [
            'name' => $request->input('name'),
            'updated_at' => Carbon::now()
        ];
        
        Category::where('id', '=', $id)->update($data);
	
		return redirect()->route('category.index');
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        return view('admin.category.create');
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required'
        ]);
 
        $data = [
            'name' => $request->input('name'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        Category::insert($data);
	
        return redirect()->route('category.index');
    }

     /*
    *  delete the selected resource
    *
    *
    */
    public function destroy($id){
        Category::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Record has been deleted.",
        ]);
    }
}
