<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use App\Category;
use App\Tag;
use App\WhatsIn;   
use App\WhatsInCategory;    

class WhatsInController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $whatsin = WhatsInCategory::leftJoin('categories','categories.id','=','whats_in_category.category_id')
                ->leftJoin('whats_in','whats_in.id','=','whats_in_category.whats_in_id')
                ->select('whats_in.id','whats_in.name as name','categories.name as category','whats_in.contact','whats_in.email','whats_in.url','whats_in.location','whats_in.is_active')
                ->get();
			return Datatables::of($whatsin)->make(true);
        }

        return view('admin.whats-in.index');
        
        // $whatsin = WhatsInCategory::with(['Category'=>function($query){
        //     $query->select('id','name');
        // },'WhatsIn'=>function($query){
        //     $query->select('id','name','contact','email','url','location','tags');
        // }])

    }

     /*
    *  open the form to edit the specified resource
    *
    *
    */
    public function edit($id){
        $categories = Category::orderBy('name')->pluck('name','id');
        $tags = Tag::where('whats_in_id','=', $id)->orderBy('name')->get();

        $tagsArray = [];
        foreach ($tags as $tag)
        {
            $tagsArray[] = [
                'id' => $tag['id'],
                'text' => $tag['name']
            ];
        }

        $whatsin = WhatsIn::find($id);
        $whats_in_category = WhatsInCategory::leftJoin('categories','categories.id','=','whats_in_category.category_id')
                ->where('whats_in_id','=', $id)->orderBy('categories.name')->pluck('categories.id'); 
                
        return view('admin.whats-in.edit', compact('categories','tagsArray', 'whatsin','whats_in_category') );

        // return $tagsArray;
    }

    /*
    *  Update the specified resource
    *
    *
    */
    public function update(Request $request){
        
		$this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'is_active' => 'required'
        ]);
 
        $whats_in_id = WhatsIn::insertGetId([
            'name' => $request->input('name'),
            'location' => $request->input('location'), 
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'url' => $request->input('url'),
            'is_active' => $request->input('is_active'),
            'updated_at' => Carbon::now()
        ]);

        if($request->has('category')){
            $categories = $request->input('category');
            
            foreach ($categories as $category){
                $data = [
                    'whats_in_id' =>  $whats_in_id,
                    'category_id' => $category,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                WhatsInCategory::insert($data);
            }
        }
        
        if($request->has('tag')){
            $tags = $request->input('tag');
            
            foreach (explode(",", $tags) as $tag){
                $tag = [
                    'whats_in_id' =>  $whats_in_id,
                    'name' => $tag,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                Tag::insert($tag);
            }
        }
	
        return redirect()->route('whats-in.index'); 
    }

    /*
    *  open the form to create new resource
    *
    *
    */
    public function create(){
        $categories = Category::orderBy('name')->pluck('name','id');
        return view('admin.whats-in.create', compact('categories') );
    }

    /*
    *  store the newly created resource
    *
    *
    */
    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'is_active' => 'required'
        ]);
 
        $whats_in_id = WhatsIn::insertGetId([
            'name' => $request->input('name'),
            'location' => $request->input('location'), 
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'url' => $request->input('url'),
            'is_active' => $request->input('is_active'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($request->has('category')){
            $categories = $request->input('category');
            
            foreach ($categories as $category){
                $data = [
                    'whats_in_id' =>  $whats_in_id,
                    'category_id' => $category,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                WhatsInCategory::insert($data);
            }
        }
        
        if($request->has('tag')){
            $tags = $request->input('tag');
            
            foreach (explode(",", $tags) as $tag){
                $tag = [
                    'whats_in_id' =>  $whats_in_id,
                    'name' => $tag,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                Tag::insert($tag);
            }
        }
	
        return redirect()->route('whats-in.index'); 
    }

     /*
    *  delete the selected resource
    *
    *
    */
    public function destroy($id){
        WhatsIn::where('id','=', $id)->delete();
        return response()->json([
            "success" => "true",
            "message" => "Event has been deleted.",
        ]);
    }
}
