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

    function getcard($card_id,$type){

        $card = Card::where('id', $card_id)->first();
        $type=$type;
        $data =compact('card','type');
        return view('card_view')->with($data);
    }

    function delete_card($id){
        $card = Card::where('id',$id)->delete();
        return redirect('/home');
    }

    function update_card($card_id,Request $request){
        $card = Card::where('id',$card_id);
        $image_path=$card->image_path;
        if( $request->hasFile('image')) {

            $image = \Request::file('image');
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

        return redirect('card_view/'.$card_id);
    }
}
