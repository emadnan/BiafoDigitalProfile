<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $cards = Card::where('user_id',$user_id)->orwhere('company_user_id',$user_id)->get();
        $companies = Company::all();
        $countries = Country::all();
        $cities = City::all();
        $data=compact('cards','companies','countries','cities');
        return view('home')->with($data);
    }
    public function fetch_cities($country_id)
    {
        $cities = City::where('country_id',$country_id)->get();
        return response()->json($cities);
    }
}
