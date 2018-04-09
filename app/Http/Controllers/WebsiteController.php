<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\ActorSkill;
use App\Contact;
use App\Register;
use App\WhatsUp;
use App\Skill;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
use App\Inquiry;
use App\Video;
use Mail;


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

        $videos = Video::where('is_active','=', 1)->orderBy('created_at')->get();
        $default = Video::where('is_default','=', 1)->first();
        return view('home', compact('videos','default') );
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
        $skills = Skill::where('group','=', 'actor')->orderBy('name')->pluck('name','id')->reverse()->put('', '-----')->reverse();
        return view('artist', compact('actors', 'skills'));
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
        
        $featured = WhatsUp::with('Writer')->where('status','=', 1)->where('type','=', 2)->orderBy('created_at', 'desc')->get();
        $articles = WhatsUp::with('Writer')->where('status','=', 1)->where('type','=', 1)->orderBy('created_at', 'desc')->get();
        $archives = WhatsUp::with('Writer')->where('status','=', 2)->orderBy('created_at', 'desc')->get();
        return view('whats-up.index', compact('articles','featured', 'archives') );
    }

     /* 
    * Display whats up article
    *
    * @return Response
    * 
    */
    public function showWhatsUp($id){
        
        $article = WhatsUp::with('Writer')->where('id','=', $id)->get();
        return view('whats-up.show', compact('article') );
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
        $skills = ActorSkill::with('Skill')->where('actor_id','=', $id)->get(); //return $skills;
        return view('show-actor', compact('actor', 'skills') );
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
        $skills = Skill::where('group','=', 'actor')->orderBy('name')->pluck('name','id')->reverse()->put('', '-----')->reverse();

        $actors = Actor:: leftJoin('actor_skill','actor_skill.actor_id','=', 'actors.id')
            ->select('actors.*', 'actor_skill.skill_id')
            // filter age bracket
            ->whereBetween('age', [$val1, $val2]) 
            // filter gender
            ->when($request->input('gender'), function($query) use ($request) {
                return $query->where('gender','=', $request->input('gender'));
            })
            ->when($request->input('name'), function($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->input('name') . '%' );
            })
            ->when($request->input('skill'), function($query) use ($request) {
                return $query->where('actor_skill.skill_id', '=', $request->input('skill') );
            })
            ->groupBy('name')
            ->orderBy('name')
            ->get();
        
        return view('artist', compact('actors', 'skills'));
        // return $actors;

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

    /*
    * store newly created inquiry resource
    *
    *
    */
    public function inquire(Request $request){
        
        $email = $request->input('email');
        $name = $request->input('name');
        $actor_id = $request->input('actor_id');
        $inquirer = [
            'actor_id' => $request->input('actor_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    
        Inquiry::insert($inquirer);

        $actor = Actor::find($actor_id);
        $actorEmail = $actor->email;
        $actorName = $actor->name;

        // Send email to inquirer
        Mail::send('admin.email.template-to-inquirer', compact('actor'), function ($message) use($email, $name) {
            $message
                ->from('marketing@filcaspro.com', 'Filcaspro')
                ->to( $email , $name)
                ->subject('Filcaspro - Request Artist Information');
        });

        // Send email to artist
        Mail::send('admin.email.template-to-artist', compact('inquirer'), function ($message) use($actorEmail, $actorName) {
            $message
                ->from('marketing@filcaspro.com', 'Filcaspro')
                ->to( $actorEmail , $actorName)
                ->subject('Filcaspro - Artist Inquiry');
        });
    }

}
