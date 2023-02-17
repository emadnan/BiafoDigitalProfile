<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Profile;
use App\Models\User;
use App\Models\Company;
use App\Models\VistingCardBackground;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Events\ExampleEmailEvent;
use App\Mail\ExampleMailable;
use App\Events\CardEmailEvent;
use App\Events\CardDeleteEmailEvent;
use App\Mail\CardMailable;
use App\Mail\CardDeleteMailable;
use App\Mail\UserCreateMailable;
use Illuminate\Support\Facades\Mail;
use Auth;

class CardController extends Controller
{
    function addCard(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;

        // if($request->hasFile('image'))
        // {
        //     $image = $request->file('image');
        //     $image_path = time().$image->getClientOriginalName();
        //     $image->move(public_path().'/card_images/', $image_path);
        // }
        $user_type=auth()->user()->user_type;
        $image_path = "";
        $company_user_id =null;
        if($user_type=="company")
        {
            $company_user = new User();
            $company_user->name = $request->name;
            $company_user->email = $request->email;
            $company_user->user_type = 'company_user';
            $company_user->role_id = 3;
            $company_user->company_id = auth()->user()->company_id;
            $password = Str::random(8);
            $company_user->password = Hash::make($password);
            $company_user->save();
            $mail = [
                "title" => "Card Created",
                "body" => "Your Card has been created. Please login with your email and password Kindly Login and Update Your Profile. Your Cridentials are: ",
                "password" => $password,
                "email" => $request->email,
                'link' => route('login')
            ];
            Mail::to($request->email)->send(new CardMailable($mail));
            $company_user_id=$company_user->id;
        }
        if ($request->image != null) {
            $image = $request->image;
            // $extension = explode('/', explode(":", substr($image, 0, strpos($image, ";")))[1])[1];
            $extension = "png";
            // print_r($image);
            // exit;
            $replace = substr($image, 0, strpos($image, ',') + 1);
            $image = str_replace($replace, "", $image);
            $image = str_replace('', '+', $image);
            $image_path = time() . '.' . $extension;
            $image_decode = base64_decode($image);
            file_put_contents(public_path() . '/card_images/' . $image_path, $image_decode);
        }
        $card = new Card();
        $card->user_id = auth()->user()->id;
        $card->company_user_id = $company_user_id;
        $card->name = $request->name;
        $card->email = $request->email;
        $card->phone = $request->phone;
        $card->company = $request->company;
        $card->designation = $request->designation;
        $card->address = $request->address;
        $card->country_id = $request->country;
        $card->city_id = $request->city;
        $card->linkedin = $request->linkiden;
        $card->website = $request->website;
        $card->image_path = $image_path;
        $card->save();
        //Add Profile
        $profile = new Profile();
        $profile->card_id = $card->id;
        $profile->user_id = auth()->user()->id;
        $profile->company_user_id = $company_user_id;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->description = "This is my description";
        $profile->address = $request->address;
        $profile->country_id = $request->country;
        $profile->city_id = $request->city;
        $profile->save();
        return response()->json(['success' => 'Card Added Successfully']);
    }

    function getcard($card_id, $type)
    {

        $card = Card::where('id', $card_id)->first();
        $type = $type;
        $profile = Profile::where('card_id', $card_id)->first();
        $company_id = auth()->user()->company_id;
        $company = Company::where('id', $company_id)->first();
        $data = compact('card', 'type', 'profile', 'company');
        return view('card_view')->with($data);
    }

    function delete_card($id)
    {
        $card = Card::where('id', $id)->first();
        if(auth()->user()->user_type=="company")
        {
            // $user = User::where('id',$card->company_user_id)->delete();
            $card=Card::where('id',$id)->delete();
        
        $profile = Profile::where('card_id', $id)->first();
        $email=null;
        //send mail
        $mail = [
            "title" => "Card Deleted",
            "body" => "Your Card has been deleted. If you want to continue using our services please click on the Yes below. ",
            'link' => route('continue_card', $id)
        ];
        if($profile->personal_email!=null)
        {
            $email=$profile->personal_email;
        }
        else
        {
            $email=$card->email;
        }
        $check = Mail::to($email)->send(new CardDeleteMailable($mail));
        // print_r($check);
        // die;
    }
    else
    {
        $card=Card::where('id',$id)->delete();
    }
        return redirect('/home');
    }

    function update_card(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $card_id = $request->card_id;
        $card = Card::where('id', $card_id)->first();
        $image_path = $card->image_path;
        if ($request->image != "no_image") {
            $image = $request->image;
            $extension = explode('/', explode(":", substr($image, 0, strpos($image, ";")))[1])[1];
            $replace = substr($image, 0, strpos($image, ',') + 1);
            $image = str_replace($replace, "", $image);
            $image = str_replace('', '+', $image);
            $image_path = time() . '.' . $extension;
            $image_decode = base64_decode($image);
            file_put_contents(public_path() . '/card_images/' . $image_path, $image_decode);
        }
        $card->user_id = auth()->user()->id;
        $card->name = $request->name;
        $card->email = $request->email;
        $card->phone = $request->phone;
        $card->company = $request->company;
        $card->designation = $request->designation;
        $card->address = $request->address;
        $card->country = $request->country;
        $card->city = $request->city;
        $card->linkedin = $request->linkiden;
        $card->website = $request->website;
        $card->image_path = $image_path;
        $card->save();

        return response()->json(['success' => 'Card Updated Successfully']);
    }
    public function customize_card_index($card_id, $type)
    {
        $card = Card::where('id', $card_id)->first();
        $type = $type;
        $company_id = auth()->user()->company_id;
        $company = Company::where('id', $company_id)->first();
        $data = compact('card', 'type', 'company');
        return view('customize_card')->with($data);
    }
    public function validate_email(Request $request)
    {
        $user = User::where('email', $request->email)->first('email');
        $user_type=auth()->user()->user_type;
        if ($user) {
            $return = false;
        } else {
            $return = true;
        }
        if($user_type == "individual")
        {
            $return = true;
        }
        echo json_encode($return);
        exit;
    }
    public function company_user_card($card_id,$type,$is_profile)
    {
        $card = Card::where('id', $card_id)->first();
        $type = $type;
        $is_profile=$is_profile;
        $data = compact('card', 'type','is_profile');
        return view('company_user')->with($data);
    }
    public function continue_card($card_id)
    {
        //if login user logout it
        Auth::logout();
        //retore card
        $card = Card::withTrashed()->find($card_id)->restore();
        $profile = Profile::where('card_id',$card_id)->first();
        //make new user
        $user=new User();
        $user->name = $profile->name;
        $user->email = $profile->personal_email;
        $password = Str::random(8);
        $user->password = Hash::make($password);
        $user->user_type = "individual";
        $user->role_id = 4;
        $user->save();
        //update user_id in card
        $card = Card::where('id', $card_id)->first();
        $card->user_id=$user->id;
        $card->save();
        //update user_id in profile
        $profile->user_id=$user->id;
        $profile->save();
        //send mail
        $mail = [
            "title" => "Card Restored Successfully",
            "body" => "Your Card has been restored and your account has been created. Your Credentials are as follows: ",
            'email' => $user->email,
            'password' => $password, 
            'link' => route('login')
        ];
        Mail::to($user->email)->send(new UserCreateMailable($mail));
        return view('continue_card');
    }
    public function visting_card($card_id,$type)
    {
        $card = Card::where('id', $card_id)->first();
        $type = $type;
        $company_id = auth()->user()->company_id;
        $company = Company::where('id', $company_id)->first();
        $visting_card_backgrounds=VistingCardBackground::where('company_id',$company_id)->get();
        $data = compact('card', 'type', 'company','visting_card_backgrounds');
        return view('visting_card')->with($data);
    }
    public function save_visting_card_backgrounds(Request $request)
    {
        if ($request->image != null) {
            $image = $request->image;
            // $extension = explode('/', explode(":", substr($image, 0, strpos($image, ";")))[1])[1];
            $extension = "png";
            // print_r($image);
            // exit;
            $replace = substr($image, 0, strpos($image, ',') + 1);
            $image = str_replace($replace, "", $image);
            $image = str_replace('', '+', $image);
            $image_path = time() . '.' . $extension;
            $image_decode = base64_decode($image);
            file_put_contents(public_path() . '/visting_card_images/' . $image_path, $image_decode);
        }
        $visting_card_backgrounds = VistingCardBackground::where('company_id', auth()->user()->company_id)->get();
        if($visting_card_backgrounds->count() > 0){
        foreach ($visting_card_backgrounds as $visting_card_background) {
            $visting_card_background->is_active = 0;
            $visting_card_background->save();
        }
        }
        $visting_card_background = new VistingCardBackground();
        $visting_card_background->company_id = auth()->user()->company_id;
        $visting_card_background->image = $image_path;
        $visting_card_background->is_active = 1;
        $visting_card_background->save();
        return response()->json(['success' => 'Visting Card Background Added Successfully']);
    }
}
