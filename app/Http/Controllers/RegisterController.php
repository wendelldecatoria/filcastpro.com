<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Yajra\Datatables\Datatables;

class RegisterController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
			$registers = Register::all();
			return Datatables::of($registers)->make(true);
		}

		return view('admin.register.index');
    }
}
