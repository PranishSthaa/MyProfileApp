<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('myProfile');
    }

    public function show()
    {
        $profiles = Profile::all();
        return view('allProfiles', compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $profile = Profile::create($request->all());
        $profile = new Profile;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->contact = $request->contact;
        $profile->about = $request->about;
        $profile->save();

        return redirect()->back();
    }
}
