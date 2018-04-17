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
            $inquiries = Inquiry::join('actors', 'actors.id', '=', 'inquiries.actor_id')
                                ->select('actors.name as artist','inquiries.name','inquiries.email','inquiries.contact', 'inquiries.created_at')
                                ->get(); // return $inquiries;
			return Datatables::of($inquiries)->make(true);
		}

		return view('admin.inquiry.index');
    }
}
