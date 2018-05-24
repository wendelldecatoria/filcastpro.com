<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;

class WebContactController extends Controller
{
    /* 
    * Display contact page
    *
    * @return Response
    * 
    */
    public function index(){
        return view('contact');
    }

    /* 
    * Store contact details
    *
    * @return Response
    * 
    */
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'message' => 'required',
        ]);

        $dataSet = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'message' => $request->input('message'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    
        Contact::insert($dataSet);
       
        return response()->json([
            'Message' => 'Success',
        ]);
    }
}
