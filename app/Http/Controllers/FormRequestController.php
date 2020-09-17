<?php

namespace App\Http\Controllers;
use App\FormRequest;
use Illuminate\Http\Request;
use Session;

class FormRequestController extends Controller
{
    public function index()
    {
        $requests=FormRequest::latest()->get();
        return view('form_request.index',compact('requests'));
    }

    public function accept_request($id)
    {
        $request=FormRequest::find($id);
        $request->status='accepted';
        $request->update();
        if($request)
        {
            Session::flash('accepted','Request Accepted');
            return redirect()->back();
        }
    }

    public function reject_request($id)
    {
        $request=FormRequest::find($id);
        $request->status='rejected';
        $request->update();
        if($request)
        {
            Session::flash('rejected','Request Rejected');
            return redirect()->back();
        }
    }
}
