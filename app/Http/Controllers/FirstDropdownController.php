<?php

namespace App\Http\Controllers;
use App\FirstDropdown;
use App\Http\Requests\FirstDropdownRequest;
use Illuminate\Http\Request;
use Session;

class FirstDropdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dropdowns=FirstDropdown::latest()->get();
        return view('first_dropdown.index',compact('dropdowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('first_dropdown.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FirstDropdownRequest $request)
    {
        $item=new FirstDropdown;
        $item->name=$request->name;
        $item->save();
        if($item)
        {
            Session::flash('created','Created Sucessfully');
            return redirect()->route('first_dropdowns.index');
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
        $item=FirstDropdown::find($id);
        return view('first_dropdown.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FirstDropdownRequest $request, $id)
    {
        $item=FirstDropdown::find($id);
        $item->name=$request->name;
        $item->update();
        if($item)
        {
            Session::flash('updated','Updated Sucessfully');
            return redirect()->route('first_dropdowns.index');
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
        $item=FirstDropdown::find($id);
        $item->delete();
        if($item)
        {
            Session::flash('deleted','Deleted Sucessfully');
            return redirect()->back();
        }
    }
}
