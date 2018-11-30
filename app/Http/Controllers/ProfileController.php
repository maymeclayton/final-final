<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function edit() {
    if (\Auth::user()->profile) {
        $profile = \App\Profile::find(\Auth::user()->id);
    }
    else {
        $profile = new \App\Profile;
        $profile->profile_owner = \Auth::id();
        $profile->save();
    }
    return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
      $profile = \Auth::user()->profile;
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

      return view('profile.edit', compact('profile'));
    }

}
