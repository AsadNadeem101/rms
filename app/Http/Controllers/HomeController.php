<?php

namespace App\Http\Controllers;
use App\Models\Region;
use App\FirstDropdown;
use App\SecondDropdown;
use Illuminate\Http\Request;
use App\FormRequest;
use App\Http\Requests\CreateFormRequest;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $regions=Region::all();
        $first_dropdowns=FirstDropdown::all();
        return view('home',compact('regions','first_dropdowns'));
    }

    public function second_dropdown(Request $request)
    {
        $first_item=FirstDropdown::where('name',$request->value)->first();
        $items=SecondDropdown::where('first_dropdown_id',$first_item->id)->get();
        return $items;
    }

    public function submit_form(CreateFormRequest $request)
    {
        $new_request=new FormRequest;
        $new_request->name=$request->name;
        $new_request->radio_button=$request->radio_button;
        $new_request->region=$request->region;
        $new_request->first_dropdown_item=$request->first_dropdown_item;
        $new_request->second_dropdown_item=$request->second_dropdown_item;
        $new_request->save();
        if($new_request)
        {
            Session::flash('sent','Request Sent Sucessfully');
            return redirect()->back();
        }
    }

}
