<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ApproverDataTable;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\ApproverRequest;
use App\Models\Region;
use App\FormRequest;
class ApproverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApproverDataTable $dataTable)
    {
        return $dataTable->render('approver.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions=Region::all();
        return view('approver.create',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApproverRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $approver = User::create($input);
        $approver->assignRole('approver');
        return redirect()->route('approvers.index');
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
        $approver = User::find($id);

        return view('approver.edit',compact('approver'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
