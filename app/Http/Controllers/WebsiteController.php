<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Contact;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class WebsiteController extends Controller
{
    /* 
    * Display enter page
    *
    * @return Response
    * 
    */
    public function index(){
        return view('index');
    }

    /* 
    * Display home page
    *
    * @return Response
    * 
    */
    public function home(){
        return view('home');
    }

    /* 
    * Display actors page
    *
    * @return Response
    * 
    */
    public function getactors(){
        $actors = Actor::all();
        return Datatables::of($actors)->make();
    }

    public function actors(){
        return view('actors');
    }

    /* 
    * Display contact page
    *
    * @return Response
    * 
    */
    public function contact(){
        return view('contact');
    }

    /* 
    * Display news room page
    *
    * @return Response
    * 
    */
    public function newsRoom(){
        return view('news-room');
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
       
        return redirect()->route('web.home'); 
    }

    /* 
    * Show selected actor
    *
    * @return Response
    * 
    */

    public function showactor($id){
        Actor::where('id','=',$id);
    }

}
