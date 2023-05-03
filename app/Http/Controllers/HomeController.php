<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
use App\Models\User;
use App\Models\PermissionRole;

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
        // print_r("hello");
        // die;
        $is_first=1;
        $user_id=auth()->user()->id;
        // print_r($user_id);
        // die;
        $cards = Card::where('user_id',$user_id)->orwhere('company_user_id',$user_id)->get();
        $company_id = auth()->user()->company_id;
        $company = Company::where('id',$company_id)->first();
        $countries = Country::all();
        if($company)
        {
        $cities=City::where('country_id',$company->country_id)->get();
        } else{
        $cities=null;
        }
        $role_id=auth()->user()->role_id;
       $permission_roles=PermissionRole::where('role_id',$role_id)->get();
       $permissions=[];
        foreach($permission_roles as $permission_role){
            $permissions[$permission_role->permissions->permission]=$permission_role->permissions->permission;
            }
        session()->put('permissions',$permissions);
        $data=compact('cards','company','countries','cities');
        // echo '<pre>';
        // print_r($data);
        // die;
        return view('home')->with($data);
    }
    public function fetch_cities($country_id)
    {
        $cities = City::where('country_id',$country_id)->get();
        return response()->json($cities);
    }
}
