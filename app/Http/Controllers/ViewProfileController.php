<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Profile;
use App\Models\SocialLink;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Language;
use App\Models\Interest;
use App\Models\Country;
use App\Models\City;
use App\Events\ExampleEmailEvent;
use App\Mail\ExampleMailable;
use Illuminate\Support\Facades\Mail;

class ViewProfileController extends Controller
{
    public function viewProfile($card_id)
    {
        $card=Card::where('id',$card_id)->orwhere('username',$card_id)->first();
        $profile=Profile::with('social_links','educations','experiences')->where('card_id',$card_id)->orwhere('card_username',$card_id)->first();
        if(empty($profile))
        {
            return redirect('view_card/'.$card_id.'/work')->with('error','Please add your profile first');
        }
        $skills=(explode(",",$profile->skills));
        $interests=(explode(",",$profile->interests));
        $languages=(explode(",",$profile->languages));
        $data=compact('card','profile','skills','interests','languages');
        return view('view_profile_new')->with($data);
    }
}
