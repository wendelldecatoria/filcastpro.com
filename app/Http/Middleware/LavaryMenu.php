<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\RoleUser;
use App\Subscriber;
use App\Subscription;
use App\SubscriberSubscription;
use App\SubscriberUser;

class LavaryMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

    	\Menu::make('MyNavBar', function($menu){
		  	  
    	});
    		
    		return $next($request);
    }
	

}
