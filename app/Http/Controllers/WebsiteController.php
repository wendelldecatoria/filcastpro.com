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
