<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Contact;
use App\Register;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class WebsiteController extends Controller
{

    /**
	 * @var Actor
	 */
	protected $actor;
    
    /**
	 * Constructor
	 *
	 * @param Actor $actor
	 */
	public function __construct(Actor $actor)
	{
		$this->Actor = $actor;
	}
    
    /* 
    * Display index page
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

    public function getactors(Request $request){
        $actors = Actor::all();
        return Datatables::of($actors)->make();
    }

    public function actors(){
        return view('actors');
    }

    public function artist(){
        $actors = Actor::orderBy('name')->get();
        return view('artist', compact('actors'));
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
    * Display contact page
    *
    * @return Response
    * 
    */
    public function register(){
        return view('register');
    }

    /* 
    * Display whats up page
    *
    * @return Response
    * 
    */
    public function whatsUp(){
        return view('whats-up');
    }

    /* 
    * Display whats on page
    *
    * @return Response
    * 
    */
    public function whatsOn(){
        return view('whats-on');
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
    * Store register details
    *
    * @return Response
    * 
    */
    public function storeRegister(Request $request){
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

    /* 
    * Show selected actor
    *
    * @return Response
    * 
    */

    public function showactor($id){
        $actor = Actor::where('id','=',$id)->get(); //return $actor;
        return view('show-actor', compact('actor') );
    }

}
