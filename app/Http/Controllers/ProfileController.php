<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $profile = \App\Profile::get();
    //
    //
    //     return view ('profile.index', compact('profile'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new \App\Profile;
        $profile->firstName = $request->input('firstName');
        $profile->lastName = $request->input('lastName');
        $profile->address = $request->input('address');
        $profile->street = $request->input('street');
        $profile->city = $request->input('city');
        $profile->state = $request->input('state');
        $profile->zip = $request->input('zip');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->lookingFor = $request->input('lookingFor');
        $profile->biography = $request->input('biography');
        $profile->profile_owner = \Auth::id();
        $profile->save();

        return view('profile.index');

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
        $profile = \App\Profile::find($id);

        return view('profile.edit', compact('profile'));
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
      $profile = \App\Profile::find($id);
      $profile->firstName = $request->input('firstName');
      $profile->lastName = $request->input('lastName');
      $profile->address = $request->input('address');
      $profile->city = $request->input('city');
      $profile->state = $request->input('state');
      $profile->zip = $request->input('zip');
      $profile->email = $request->input('email');
      $profile->phone = $request->input('phone');
      $profile->lookingFor = $request->input('lookingFor');
      $profile->biography = $request->input('biography');
      $profile->profile_owner = \Auth::id();
      $profile->save();

      return view('profile.index');
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
