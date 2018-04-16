<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Carbon\Carbon;

class WebRegisterController extends Controller
{
    /* 
    * Display contact page
    *
    * @return Response
    * 
    */
    public function index(){
        return view('register');
    }

    /* 
    * Store register details
    *
    * @return Response
    * 
    */
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
        ]);

        $dataSet = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    
        Register::insert($dataSet);
       
        return redirect()->route('web.home'); 
    }
}
