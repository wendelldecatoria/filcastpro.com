<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'is_approved' => 1,
            'is_active' => 1
        );

        if (Auth::attempt($credentials))
        {
            return redirect()->intended('');
        }
        else
        {
            return redirect()->intended('LoginFailed');
        }
    }

    public function LoginFailed(Request $request){
        
        if (Auth::Check()){    
            return redirect()->intended('home');
        } else {
            return view('LoginFailed');  
        }
    }
}
