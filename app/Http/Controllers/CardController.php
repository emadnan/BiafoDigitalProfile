<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Card;

class CardController extends Controller
{
    function addCard (Request $request){
        print_r($request->all());
        // $card = new Card();
        // $card->email = $request->email;
        // $card->phone = \Request::input('phone');
        // $card->company = \Request::input('company');
        // $card->designation = \Request::input('designation');
        // $card->address = \Request::input('address');
        // $card->country = \Request::input('country');
        // $card->city = \Request::input('city');
        // $card->linkedin = \Request::input('linkedin');
        // $card->website = \Request::input('website');
        // $card->image_path = \Request::input('image_path');
        // $card->save();


        

    }
}
