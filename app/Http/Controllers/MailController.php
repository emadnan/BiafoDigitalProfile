<?php

namespace App\Http\Controllers;

use App\Events\ExampleEmailEvent;
use App\Mail\ExampleMailable;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
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
     * Send Email
     *
     * @return 
     */
    public function index()
    {
        $data = [
            "title" => "Sample Title",
            "body" => "Sample Body"
        ];
        Mail::to("Irfan.rafique@biafotech.com")->send(new ExampleMailable($data));

        dd("Email Sent");
    }
}
