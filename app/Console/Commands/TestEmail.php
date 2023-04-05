<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Card;
use App\Models\Profile;
use App\Models\User;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
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
class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mail = [
            "title" => "Your Cardify Account has been created.",
            "body" => "Please login with initial email and password and update Your Cardify Profile. Initial email and password is given below.",
            "password" => "test",
            "email" => "adnan.klassen786@gmail.com",
            'link' => "route('login')"
        ];
        Mail::to("adnan.klassen786@gmail.com")->send(new CardMailable($mail));
    }
}
