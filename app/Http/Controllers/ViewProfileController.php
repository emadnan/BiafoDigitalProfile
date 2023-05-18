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
use App\Models\CardLog;
use App\Events\ExampleEmailEvent;
use App\Mail\ExampleMailable;
use Illuminate\Support\Facades\Mail;

class ViewProfileController extends Controller
{
    public function viewProfile($card_id)
    {
        $card=Card::where('id',$card_id)->orwhere('username',$card_id)->first();
        $profile=Profile::with('social_links','educations','experiences')->where('card_id',$card->id)->where('card_username',$card->username)->first();
        if(empty($profile))
        {
            return redirect('view_card/'.$card_id.'/work')->with('error','Please add your profile first');
        }
        $skills=(explode(",",$profile->skills));
        $interests=(explode(",",$profile->interests));
        $languages=(explode(",",$profile->languages));
        $data=compact('card','profile','skills','interests','languages');
        //maintain card logs
        $card_log=new CardLog;
        $card_log->card_id=$card->id;
        $card_log->save();
        return view('view_profile_new2')->with($data);
    }
}
