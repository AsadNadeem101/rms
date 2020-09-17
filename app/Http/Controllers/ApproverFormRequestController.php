<?php

namespace App\Http\Controllers;
use App\FormRequest;
use Illuminate\Http\Request;
use Auth;
use Session;
class ApproverFormRequestController extends Controller
{
    public function index()
    {
        $requests=FormRequest::where('region',Auth::user()->region)->get();
        return view('approver.form_request.index',compact('requests'));
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
