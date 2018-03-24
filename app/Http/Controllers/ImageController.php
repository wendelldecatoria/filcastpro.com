<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function show($id){
        $images = Image::where('actor_id','=', $id);
        return response()->json($images);
    }

    public function destroy($id){
        Image::find($id)->delete();
        return "success";
    }
}
