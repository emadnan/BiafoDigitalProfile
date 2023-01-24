<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles');
    }
    public function addProfile($card_id)
    {
        $card_id=$card_id;
        $data=compact('card_id');
        return view('add_profile')->with($card_id);
    }
    public function insertProfile(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
    }
}
