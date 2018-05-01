<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\WhatsIn;
use App\WhatsInCategory;
use App\Tag;

class WebWhatsInController extends Controller
{
    /* 
    * Show what's in page
    *
    * @return Response
    * 
    */

    public function index(){
        $whatsin = WhatsIn::where('is_active','=', 1)->orderBy('name')->get();
        $categories = Category::orderBy('name')->pluck('name','id')->reverse()->put('', '-----')->reverse();
        return view('web.whats-in.index', compact('categories','whatsin') );
    }

    /* 
    * Show specified resource
    *
    * @return Response
    * 
    */
    public function show($id){
        
        $categories = WhatsInCategory::with('Category')->where('whats_in_id','=', $id)->get();
        $tags = Tag::where('whats_in_id','=', $id)->get();
        $whatsin = WhatsIn::where('id','=', $id)->get();
        return view('web.whats-in.show', compact('categories','tags','whatsin') );
        // return $categories;
    }

    public function search(Request $request){

        $whatsin = WhatsIn::leftJoin('whats_in_category','whats_in_category.whats_in_id','=', 'whats_in.id')
            ->leftJoin('tags','tags.whats_in_id','=', 'whats_in.id')
            ->select('whats_in.*', 'whats_in_category.category_id')
            ->when($request->input('category'), function($query) use ($request) {
                return $query->where('whats_in_category.category_id', '=', $request->input('category') );
            })
            ->when($request->input('name'), function($query) use ($request) {
                return $query->where('whats_in.name', 'like', '%' . $request->input('name') . '%' );
            })
            ->when($request->input('location'), function($query) use ($request) {
                return $query->where('location', 'like', '%' . $request->input('location') . '%' );
            })
            ->when($request->input('tag'), function($query) use ($request) {
                return $query->where('tags.name', 'like', '%' . $request->input('tag') . '%' );
            })
            ->groupBy('whats_in.name')
            ->orderBy('whats_in.name')
            ->get();

        return response()->json($whatsin);
    }
}
