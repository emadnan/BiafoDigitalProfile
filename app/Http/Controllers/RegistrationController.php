<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PermissionRole;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
class RegistrationController extends Controller
{
    public function index($type)
    {
        if(auth()->check())
        {
             return redirect()->route('home');
        }
        $data = compact('type');
        return view('auth.register')->with($data);
    }
    public function register(Request $data)
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_type' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $role_id = 0;
        if($data['user_type']=="company")
        {
            $role_id = 2;
        }
        elseif($data['user_type']=="individual")
        {
            $role_id = 4;
        }
        $permission_roles=PermissionRole::where('role_id',$role_id)->get();
        $permissions=[];
        foreach($permission_roles as $permission_role){
           $permissions[$permission_role->permissions->permission]=$permission_role->permissions->permission;
        } 
        session()->put('permissions',$permissions);
        if($data['user_type']=="company")
        {
            session()->put('is_new',1);
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => $data['user_type'],
            'role_id' => $role_id,
        ]);
        Auth::login($user);
        $type = $data->type;
        if($type == 'free')
        {
        return redirect()->route('home');
        }
        else if($type == 'premium')
        {
            return redirect('/stripe');
        }
        else
        {
            return redirect()->route('registration','free');
        }
    }

}
