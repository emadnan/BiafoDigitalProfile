<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    function addCard(Request $request){
            if($request->hasFile('image'))
            {
            $image = $request->file('image');
                $image_path = time().$image->getClientOriginalName();
                $image->move(public_path().'/card_images/', $image_path);
            }
        $card = new Card();
        $card->user_id= auth()->user()->id;
        $card->name= $request->name;
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
        return redirect('/home');
    }

    function getcard($card_id){

        $card = Card::where('id', $card_id)->first();
        $data =compact('card');
        return view('card_view')->with($data);
    }
}
