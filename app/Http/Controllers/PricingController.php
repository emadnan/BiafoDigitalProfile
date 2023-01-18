<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;


class PricingController extends Controller
{
    function pricing(){
        return view('pricing');
    }
}
