<?php

 
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Models\PermissionRole;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()      // this function direct go to google
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()  // this function get user login of googlre
    {
        try {
            // print_r("hello");
            // die;
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
                $role_id=auth()->user()->role_id;
                $permission_roles=PermissionRole::where('role_id',$role_id)->get();
                $permissions=[];
                foreach($permission_roles as $permission_role){
                $permissions[$permission_role->permissions->permission]=$permission_role->permissions->permission;
                }
                session()->put('permissions',$permissions);
                return redirect('/home');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
    
                Auth::login($newUser);
                $role_id=auth()->user()->role_id;
                $permission_roles=PermissionRole::where('role_id',$role_id)->get();
                $permissions=[];
                foreach($permission_roles as $permission_role){
                $permissions[$permission_role->permissions->permission]=$permission_role->permissions->permission;
                }
                session()->put('permissions',$permissions);
                return redirect('/home');
            }
    
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
}