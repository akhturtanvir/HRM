<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveApplication;
use Auth;

class LeaveApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaveapplications = LeaveApplication::all();
        //return view('leaveapplications.applicationlist');
        return view('leaveapplications.applicationlist', compact('leaveapplications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaveapplications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LeaveApplication::create($request->all());
        //return 'hello';
        return redirect('/leaveapplications');
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
        // return $id;
        $leaveapplications = LeaveApplication::findOrFail($id);
        return view('leaveapplications.edit', compact('leaveapplications'));
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
        // return $id;
        $leaveapplications = LeaveApplication::findOrFail($id);
        $leaveapplications->update($request->all());
        return redirect('/leaveapplications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $leaveapplications = LeaveApplication::findOrFail($id);
        $leaveapplications->delete();
        return redirect('/leaveapplications');
    }
}
