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

class ProfileController extends Controller
{
    public function addProfile($card_id,$type)
    {
        $card=Card::where('id',$card_id)->first();
        $skills=Skill::all();
        $interests=Interest::all();
        $languages=Language::all();
        $data=compact('card','card_id','type','skills','interests','languages');
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
        $profile=new Profile();
        $profile->card_id=$request->card_id;
        $profile->user_id = auth()->user()->id;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->city_id = $request->city;
        $profile->country_id = $request->country;
        $profile->skills=$request->skills;
        $profile->interests=$request->interests;
        $profile->languages=$request->languages;
        $profile->description = $request->description;
        $profile->dob = $request->dob;
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
        // if(auth()->user()->user_type == 'company')
        // {
        // $mail = [
        //     "title" => "Check your profile",
        //     "body" => 'Dear "'.$request->name.'" your profile has been created successfully. Please Update your profile by clicking on the link below',
        //     "link" => route('edit_profile',$request->card_id),
        // ];
        // Mail::to($request->email)->send(new ExampleMailable($mail));
        // }

        return redirect('view_card/'.$request->card_id.'/'.$type);

    }
    public function viewProfile($card_id)
    {
        $card=Card::where('id',$card_id)->first();
        $profile=Profile::with('social_links','educations','experiences')->where('card_id',$card_id)->first();
        if(empty($profile))
        {
            return redirect('view_card/'.$card_id.'/work')->with('error','Please add your profile first');
        }
        $skills=(explode(",",$profile->skills));
        $interests=(explode(",",$profile->interests));
        $languages=(explode(",",$profile->languages));
        $data=compact('card','profile','skills','interests','languages');
        return view('view_profile')->with($data);
    }
    public function editProfile($card_id)
    {
        $card=Card::where('id',$card_id)->first();
        $profile=Profile::with('social_links','educations','experiences')->where('card_id',$card_id)->first();
        $countries=Country::all();
        $cities=City::where('country_id',$profile->country_id)->get();
        $skills=Skill::all();
        $interests=Interest::all();
        $languages=Language::all();
        $data=compact('card','profile','skills','interests','languages','countries','cities');
        return view('edit_profile')->with($data);
    }
    public function updateProfile(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        //delete all data
        // $delete_skills=Skill::where('profile_id',$request->profile_id)->delete();
        // $delete_languages=Language::where('profile_id',$request->profile_id)->delete();
        // $delete_interests=Interest::where('profile_id',$request->profile_id)->delete();
        $delete_social_links=SocialLink::where('profile_id',$request->profile_id)->delete();
        $delete_educations=Education::where('profile_id',$request->profile_id)->delete();
        $delete_experiences=Experience::where('profile_id',$request->profile_id)->delete();
        //UPDATe PROFILE
        $card=Card::where('id',$request->card_id)->first();
        $profile=Profile::find($request->profile_id);
        $profile->card_id=$request->card_id;
        // $profile->user_id = auth()->user()->id;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->personal_email = $request->personal_email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->city_id = $request->city;
        $profile->country_id = $request->country;
        $profile->description = $request->description;
        $profile->dob = $request->dob;
        $profile->skills=$request->skills;
        $profile->interests=$request->interests;
        $profile->languages=$request->languages;
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
        $data=compact('card','profile');
        return redirect('/view_profile/'.$card->id)->with('success','Profile Updated Successfully');
    }
}
