<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Yajra\Datatables\Datatables;

class ContactController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
			$contacts = Contact::all();
			return Datatables::of($contacts)->make(true);
		}

		return view('admin.contact.index');
    }
}
