<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        $data=compact('subscriptions');
        return view('subscription')->with($data);
    }
    public function add_subscription(Request $request)
    {
        $subscription = new Subscription;
        $subscription->name = $request->name;
        $subscription->type = $request->type;
        $subscription->no_of_cards = $request->no_of_cards;
        $subscription->amount = $request->amount;
        $subscription->use_username = $request->can_username;
        $subscription->save();
        return redirect('/subscription');
    }
    public function delete_subscription($id)
    {
        $subscription = Subscription::find($id);
        $subscription->delete();
        return redirect('/subscription');
    }
    public function update_subscription($id,Request $request)
    {
        $subscription = Subscription::find($id);
        $subscription->name = $request->name;
        $subscription->type = $request->type;
        $subscription->no_of_cards = $request->no_of_cards;
        $subscription->amount = $request->amount;
        $subscription->use_username = $request->can_username;
        $subscription->save();
        return redirect('/subscription');
    }
}
