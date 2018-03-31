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
        $actors = Actor::where('is_active','=', 1)->orderBy('name')->get();
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
        $actor = Actor::with('Image')->where('id','=',$id)->get(); //return $actor;
        return view('show-actor', compact('actor') );
    }

     /* 
    * Search for actor
    *
    * @return Response
    * 
    */
    public function search(Request $request){
        //array('0' => 'All Ages', '1' => '10 and below', '2' => '11 to 20', '3' => '21 to 30', '4' => '31 to 40', '5' => '41 and above')
        if($request->input('age') == 0){
            $val1 = 0;
            $val2 = 100;
        }else if($request->input('age') == 1){
            $val1 = 1;
            $val2 = 10;
        }else if($request->input('age') == 2){
            $val1 = 11;
            $val2 = 20;
        }else if($request->input('age') == 3){
            $val1 = 21;
            $val2 = 30;
        }else if($request->input('age') == 4){
            $val1 = 31;
            $val2 = 40;
        }else if($request->input('age') == 5){
            $val1 = 41;
            $val2 = 100;
        } else {

        }

        $gender = $request->input('gender');
        
        if($gender)
            $actors = Actor::whereBetween('age', [$val1, $val2])->where('gender','=', $gender)->orderBy('name')->get();
        else {
            $actors = Actor::whereBetween('age', [$val1, $val2])->orderBy('name')->get();
        }
       
        return view('artist', compact('actors'));
    }

     /* 
    * Show creatives page
    *
    * @return Response
    * 
    */

    public function creatives(){
        return view('creatives');
    }

    /* 
    * Show what's in page
    *
    * @return Response
    * 
    */

    public function whatsIn(){
        return view('whats-in');
    }

}
