<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use Yajra\Datatables\Datatables;

class InquiryController extends Controller
{
    /*
    * display listing of the resource
    *
    *
    */
    public function index(Request $request)
	{
		if ($request->ajax()) {
			$inquiries = Inquiry::all(); //return $inquiries;
			return Datatables::of($inquiries)->make(true);
		}

		return view('admin.inquiry.index');
    }
}
