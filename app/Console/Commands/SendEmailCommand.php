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

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email';

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
        $cards = Card::where('user_id',27)->get();
        $uploder = User::where('id',27)->first();
        foreach($cards as $card)
        {
           //create user
            $user = new User();
            $user->name = $card->name;
            $user->email = $card->email;
            $user->role_id = 3;
            $user->user_type = 'company_user';
            $user->company_id = $uploder->company_id;
            $password = Str::random(8);
            $user->password = Hash::make($password);
            $user->save();
            $user_id = $user->id;
            $card->is_csv = 0;
            $card->company_user_id = $user_id;
            $card->save();
            $mail = [
                "title" => "Card Created",
                "body" => "Your Card has been created. Please login with your email and password Kindly Login and Update Your Profile. Your Cridentials are: ",
                "password" => $password,
                "email" => $card->email,
                'link' => route('login')
            ];
            Mail::to($card->email)->send(new CardMailable($mail));
        }
        print_r("Email Sent");
    }
}
