<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Events\ExampleEmailEvent;
use App\Mail\ExampleMailable;
use App\Events\CardEmailEvent;
use App\Mail\CardMailable;
use Illuminate\Support\Facades\Mail;

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
            $company_user->user_type='company_user';
            $password = Str::random(8);
            $company_user->password = Hash::make($password);
            $company_user->save();
            $mail = [
                "title" => "Card Created",
                "body" => "Your Card has been created. Please login with your email and password. Your Cridentials are: ",
                "password" => $password,
                "email" => $request->email,
                'link' => 'http://localhost:8000/login'
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
        $card->country = $request->country;
        $card->city = $request->city;
        $card->linkedin = $request->linkiden;
        $card->website = $request->website;
        $card->image_path = $image_path;
        $card->save();
        return response()->json(['success' => 'Card Added Successfully']);
    }

    function getcard($card_id, $type)
    {

        $card = Card::where('id', $card_id)->first();
        $type = $type;
        $profile = Profile::where('card_id', $card_id)->first();
        $data = compact('card', 'type', 'profile');
        return view('card_view')->with($data);
    }

    function delete_card($id)
    {
        $card = Card::where('id', $id)->delete();
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
        if ($request->image != null) {
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
        $data = compact('card', 'type');
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
}
