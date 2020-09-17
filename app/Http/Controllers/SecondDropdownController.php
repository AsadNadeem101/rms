<?php

namespace App\Http\Controllers;
use App\SecondDropdown;
use App\FirstDropdown;
use App\Http\Requests\SecondDropdownRequest;
use Illuminate\Http\Request;
use Session;

class SecondDropdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dropdowns=SecondDropdown::latest()->get();
        return view('second_dropdown.index',compact('dropdowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $first_dropdown_items=FirstDropdown::all();
        return view('second_dropdown.create',compact('first_dropdown_items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SecondDropdownRequest $request)
    {
        $first_item=FirstDropdown::where('name',$request->first_dropdown_id)->first();
        $item=new SecondDropdown;
        $item->name=$request->name;
        $item->first_dropdown_id=$first_item->id;
        $item->save();
        if($item)
        {
            Session::flash('created','Created Sucessfully');
            return redirect()->route('second_dropdowns.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $first_dropdown_items=FirstDropdown::all();
        $item=SecondDropdown::find($id);
        return view('second_dropdown.edit',compact('item','first_dropdown_items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SecondDropdownRequest $request, $id)
    {
        $first_item=FirstDropdown::where('name',$request->first_dropdown_id)->first();
        $item=SecondDropdown::find($id);
        $item->name=$request->name;
        $item->first_dropdown_id=$first_item->id;
        $item->update();
        if($item)
        {
            Session::flash('updated','Updated Sucessfully');
            return redirect()->route('second_dropdowns.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=SecondDropdown::find($id);
        $item->delete();
        if($item)
        {
            Session::flash('deleted','Deleted Sucessfully');
            return redirect()->back();
        }
    }
}
