<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\ActorSkill;
use App\Contact;
use App\Creative;
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
        return view('web.whats-up.index', compact('articles','featured', 'archives') );
    }

     /* 
    * Display whats up article
    *
    * @return Response
    * 
    */
    public function showWhatsUp($id){
        
        $article = WhatsUp::with('Writer')->where('id','=', $id)->get();
        return view('web.whats-up.show', compact('article') );
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
    * Show what's in page
    *
    * @return Response
    * 
    */

    public function whatsIn(){
        return view('whats-in');
    }

    /*
    * store actor's inquiry
    *
    *
    */
    public function actorInquire(Request $request){
        
        $email = $request->input('email');
        $name = $request->input('name');
        $actor_id = $request->input('actor_id');
        $inquirer = [
            'actor_id' => $request->input('actor_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'group' => 'actor'
        ];
    
        Inquiry::insert($inquirer);

        $actor = Actor::find($actor_id);
        $actorEmail = $actor->email;
        $actorName = $actor->name;

        // Send email to inquirer
        Mail::send('admin.email.actor.template-to-inquirer', compact('actor'), function ($message) use($email, $name) {
            $message
                ->from('marketing@filcaspro.com', 'Filcaspro')
                ->to( $email , $name)
                ->subject('Filcaspro - Request Artist Information');
        });

        // Send email to artist
        Mail::send('admin.email.actor.template-to-artist', compact('inquirer'), function ($message) use($actorEmail, $actorName) {
            $message
                ->from('marketing@filcaspro.com', 'Filcaspro')
                ->to( $actorEmail , $actorName)
                ->subject('Filcaspro - Artist Inquiry');
        });
    }

    /*
    * store creative's inquiry
    *
    *
    */
    public function creativeInquire(Request $request){
        
        $email = $request->input('email');
        $name = $request->input('name');
        $creative_id = $request->input('creative_id'); 
        $inquirer = [
            'actor_id' => $request->input('creative_id'), // table is shared with actors so column_name is actor_id
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'group' => 'director'
        ];
    
        Inquiry::insert($inquirer);

        $creative = Creative::find($creative_id);
        $creativeEmail = $creative->email;
        $creativeName = $creative->name;

        // Send email to inquirer
        Mail::send('admin.email.creative.template-to-inquirer', compact('creative'), function ($message) use($email, $name) {
            $message
                ->from('marketing@filcaspro.com', 'Filcaspro')
                ->to( $email , $name)
                ->subject('Filcaspro - Request Artist Information');
        });

        // Send email to artist
        Mail::send('admin.email.creative.template-to-creative', compact('inquirer'), function ($message) use($creativeEmail, $creativeName) {
            $message
                ->from('marketing@filcaspro.com', 'Filcaspro')
                ->to( $creativeEmail , $creativeName)
                ->subject('Filcaspro - Creative Inquiry');
        });
    }

}
