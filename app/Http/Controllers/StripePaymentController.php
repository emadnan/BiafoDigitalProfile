<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\SubscriptionInvoice;
use App\Models\Subscription;
use App\Models\Company;
use Barryvdh\DomPDF\Facade\Pdf;
     
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
        // echo "<pre>";
        // print_r($request->all());
        // exit;
        $subscription_type = $request->subscription_type;
        $subscription = Subscription::where('name', $subscription_type)->first();
        $amount = $subscription->amount * 100;
        $description = $subscription->name;

        //$api_key = env('APP_NAME');
        try {
            $api_key = env('STRIPE_SECRET');
            Stripe\Stripe::setApiKey($api_key);
        
            $stripe = Stripe\Charge::create([
                "amount" => $amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $description." Subcription from Cardify."
                // "metadata" => ["product_id" => "prod_Ni6iiqzPNgmWKe"]
            ]);
        
            // Handle successful charge here
            // ...
        
        } catch (Stripe\Exception\CardException $e) {
            // Handle card-related errors (e.g., card declined, insufficient balance)
            $error = $e->getError();
            $error_message = $error['message'];
            return redirect()->back()->with('error', $error_message);
        
        } catch (Stripe\Exception\RateLimitException $e) {
            // Handle rate limit error
            $error_message = "Too many requests. Please try again later.";
            return redirect()->back()->with('error', $error_message);
        
        } catch (Stripe\Exception\InvalidRequestException $e) {
            // Handle invalid request error
            $error_message = $e->getMessage();
            return redirect()->back()->with('error', $error_message);
        
        } catch (Stripe\Exception\AuthenticationException $e) {
            // Handle authentication error
            $error_message = "Authentication with Stripe failed.";
            return redirect()->back()->with('error', $error_message);
        
        } catch (Stripe\Exception\ApiConnectionException $e) {
            // Handle API connection error
            $error_message = "Network communication with Stripe failed.";
            return redirect()->back()->with('error', $error_message);
        
        } catch (Stripe\Exception\ApiErrorException $e) {
            // Generic API error
            $error_message = "An error occurred while processing the payment.";
            return redirect()->back()->with('error', $error_message);
        
        } catch (Exception $e) {
            // Catch any other unexpected exceptions
            $error_message = "An unexpected error occurred.";
            return redirect()->back()->with('error', $error_message);
        }
        // echo "<pre>";
        // print_r($stripe);
        // exit;
        $company = Company::find(auth()->user()->company_id);
        $subscription_invoice_old = SubscriptionInvoice::where('company_id', $company->id)->where('is_active', 1)->first();
        if($subscription_invoice_old)
        {
            $subscription_invoice_old->is_active = 0;
            $subscription_invoice_old->save();
        }
        $subscription_invoice = new SubscriptionInvoice;
        $subscription_invoice->company_id = $company->id;
        $subscription_invoice->stripe_id = $stripe->id;
        $subscription_invoice->subscription_id = 2;
        $subscription_invoice->amount = 24;
        $subscription_invoice->start_date = date('Y-m-d');
        $subscription_invoice->end_date = date('Y-m-d', strtotime('+1 year'));
        $subscription_invoice->is_active = 1;
        $subscription_invoice->save();
        $company->subscription_id = 2;
        $company->save();
        return redirect('/home')->with('success', 'Payment successful! Now you can Add Cards');
    }
    public function testenv()
    {
        print_r(env('STRIPE_SECRET'));
    }
    function generatePDF()
    {
        $subscription_invoice = SubscriptionInvoice::where('company_id', auth()->user()->company_id)->where('is_active', 1)->first();
        $data = compact('subscription_invoice');
        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->stream();
    }
}