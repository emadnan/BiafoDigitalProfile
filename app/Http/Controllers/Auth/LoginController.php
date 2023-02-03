<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Profile;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function authenticated()
    {
        $user_type=auth()->user()->user_type;
        if($user_type=="company_user")
        {
            $card=Card::where('company_user_id',auth()->user()->id)->first();
            $profile=Profile::where('card_id',$card->id)->first();
            $is_profile=1;
            if($profile==null)
            {
                $is_profile=0;
            }
            return redirect('/company_user_card/'.$card->id.'/work/'.$is_profile);
        }

    }
}
