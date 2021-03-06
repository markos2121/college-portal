<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile=profile::all();
        return view('portals.instructor.profile')->with('profiles', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $profile = profile::find($id);
        view('portals.instructor.editprofile')->with('profiles', $profile);
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
        $this->validate($request,[
            'fullname' => 'required',
            'email'=> 'required',
            'mobile'=>'required',
            'address'=>'required',
            'instructingcourse'=>'required'
        ]);
        $profile = profile::find($id);

        $profile->fullname = $request->fullname;
            $profile->email = $request->email;
            $profile->mobile=$request->mobile;
            $profile->address=$request->address;
            $profile->instructing_course=$request->instructing_course;

        $profile->save();

        return redirect()->route('portals.instructor.profile');
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
