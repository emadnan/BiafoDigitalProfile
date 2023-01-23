<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles');
    }
    public function addProfile()
    {
        return view('add_profile');
    }
    public function insertProfile(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
    }
}
