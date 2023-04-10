<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        //$api_key = env('APP_NAME');
        $api_key = env('STRIPE_SECRET');
        Stripe\Stripe::setApiKey($api_key);
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Rafay." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
    public function testenv()
    {
        print_r(env('STRIPE_SECRET'));
    }
}