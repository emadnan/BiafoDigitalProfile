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

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles');
    }
    public function addProfile($card_id,$type)
    {
        $card=Card::where('id',$card_id)->first();
        $data=compact('card','card_id','type');
        return view('add_profile')->with($data);
    }
    public function insertProfile(Request $request)
    {
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // exit;
        $card=Card::where('id',$request->card_id)->first();
        $image_path = $card->image_path;
        $type=$request->type;
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_path = time().$image->getClientOriginalName();
            $image->move(public_path().'/card_images/', $image_path);
        }
        $profile=new Profile();
        $profile->card_id=$request->card_id;
        $profile->user_id = auth()->user()->id;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->description = $request->description;
        $profile->image_path = $image_path;
        $profile->save();
        $profile_id = $profile->id;
        //Social Links
        $link_loop = 0;
        if($request->social_name)
        {
            foreach($request->social_name as $social_name)
            {
                $social_link = new SocialLink();
                $social_link->profile_id = $profile_id;
                $social_link->social_name = $social_name;
                $social_link->social_link = $request->social_link[$link_loop];
                $social_link->save();
                $link_loop++;
            }
        }
        //Educations
        $education_loop = 0;
        if($request->school)
        {
            foreach($request->school as $school)
            {
                $education = new Education();
                $education->profile_id = $profile_id;
                $education->school = $school;
                $education->degree = $request->degree[$education_loop];
                $education->start_date = $request->start_date[$education_loop];
                $education->end_date = $request->end_date[$education_loop];
                $education->save();
                $education_loop++;
            }
        }
        //Experiences
        $experience_loop=0;
        if($request->company)
        {
            foreach($request->company as $company)
            {
                $experience=new Experience();
                $experience->profile_id = $profile_id;
                $experience->company = $company;
                $experience->position = $request->position[$experience_loop];
                $experience->start_date = $request->start_date_exp[$experience_loop];
                $experience->end_date = $request->end_date_exp[$experience_loop];
                $experience->save();
                $experience_loop++;
            }
        }
        //Skills
        $skill_loop = 0;
        if($request->skill)
        {
            foreach($request->skill as $key=>$value)
            {
                
                $skill = new Skill();
                $skill->profile_id = $profile->id;
                $skill->skill_name = $value;
                $skill->skill_level = $request->skill_level[$skill_loop];
                $skill->save();
                $skill_loop++;
            }
        }
        //Languages
        $language_loop = 0;
        if($request->language_name)
        {
            foreach($request->language_name as $key=>$value)
            {
                
                $language = new Language();
                $language->profile_id = $profile->id;
                $language->language_name = $value;
                $language->language_level = $request->language_level[$language_loop];
                $language->save();
                $language_loop++;
            }
        }
        //Interests
        if($request->interest_name)
        {
            foreach($request->interest_name as $key=>$value)
            {
                
                $interest=new Interest();
                $interest->profile_id = $profile->id;
                $interest->interest_name = $value;
                $interest->save();
            }
        }
        return redirect('view_card/'.$card_id.'/'.$type);

    }
    public function viewProfile($card_id)
    {
        $card=Card::where('id',$card_id)->first();
        $profile=Profile::with('social_links','educations','experiences','skills','languages','interests')->where('card_id',$card_id)->first();
        if(empty($profile))
        {
            return redirect('view_card/'.$card_id.'/work')->with('error','Please add your profile first');
        }
        $data=compact('card','profile');
        return view('view_profile')->with($data);
    }
}
