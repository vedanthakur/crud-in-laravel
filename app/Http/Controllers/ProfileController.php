<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request){
        $profiles = Profile::all();
        return view('profiles', ['profiles' => $profiles]);
    }

    public function form(){
        return view('add_profile');
    }

    public function create(){
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'mobile' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'website' => 'string',
            'gender' => 'string',
            'dob' => 'date'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'),$imageName);

        $profile = new Profile;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->image = $imageName;
        $profile->website = $request->website;
        $profile->gender = $request->gender;
        $profile->dob = $request->dob;
        $profile->save();

        return redirect('add_profile')->with('status', 'Student added successfully!');
    }



    public function destroy(Profile $profile){
        $profile->delete();
        return redirect()->route('profiles.index')->with('status', 'Profile deleted!');
    }

    public function edit(Profile $profile){
        return view('edit_profile', ['profile' => $profile]);
    }

    public function update(Request $request, Profile $profile){
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->image = $request->image;
        $profile->website = $request->website;
        $profile->gender = $request->gender;
        $profile->dob = $request->dob;
        $profile->save();

        return redirect()->route('profiles.index')->with('status', 'Profile updated successfully!');
    }
}