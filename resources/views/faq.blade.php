<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Card App</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="{{asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/landing_page_styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
</head>


<header>
    <!-- NAVBAR-BAR -->
    <section class="navbar fixed-top navbar-bg">
        <nav class="navbar navbar-expand-lg w-100 p-0">
            <div class="container">
                <a class="navbar-brand text-white fs-3" href="#">
                    <h2>CardGiene</h2>
                </a>
                <button class="navbar-toggler btn-yellow text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" aria-current="page" href="/"
                                style="position: relative;">
                                Home
                                <!-- <div class="overlay_menu"></div> -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/#feature" data-name="feature">
                                Features
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/#about">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/#pricing" class="active">Pricing</a>
                        </li>
                        <!-- <li class="nav-item">
                    <a class="nav-link text-white text-center" href="#">
                      Reviews
                    </a>
                  </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/#contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/faq"><b>
                                FAQ
                                </b>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex ms-5 customize_mob_menu">
                        {{-- <a class="btn btn-yellow rounded-pill px-5 py-2" >Login</a> --}}
                        @guest
                        @if (Route::has('login'))
                        <a class="btn btn-yellow rounded-pill px-5 py-2"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="btn btn-yellow rounded-pill px-5 py-2 ml-4"
                            href="{{ route('register') }}"><b>{{ __('Create Card') }}</b></a>
                        @endif
                        @else
                        <a class="btn btn-yellow rounded-pill px-5 py-2 "
                                href="{{ route('pricing') }}"><b>{{ __('Create Card') }}</b></a>
                                <a class="btn btn-yellow ml-4"
                                href="{{ route('home') }}"><b>{{ __('Dashboard') }}</b></a>
                        @endguest
                        
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- HERO-IMG -->
    <!-- <section class="img-fluid customize_for_mob">
        <div class="hero_bg_img">
            <div class="container">
                <div class="position-relative">
                    
                    <img src="{{asset('frontend/img/hero_img_6.png')}}" alt=""
                        class="position-absolute customize__absolute__img">
                </div>
            </div>
        </div>
    </section> -->
</header>

<body>
    
    <!-- <div style ="margin-left:10%"> -->
    <div class="card-ll" style=" margin-top: 3%;">
        <div class="container p-5">

            <div class="row">
                <div class="col-lg-12 mb-1">
                    <div class="card h-100 shadow-lg">
                        <div>
                            <h1 style="margin-left: 30%; margin-top: 50px; border: 20px; border-color: black;"><b>Frequently Asked Questions</b></h1>

                            <br><br>
                                
                            <div style ="margin-left:10%">
                            
                                <h2>Contents</h2>
                                <p>
                                    <a style="text-decoration:none;" href="#general"><h5>General</h5></a>
                                </p>
                                <p>
                                    <a style="text-decoration:none;" href="#creating-your-digital-business-cards"><h5>Creating your digital business cards</h5></a>
                                </p>
                                <p>
                                    <a style="text-decoration:none;" href="#sharing-your-digital-business-cards"><h5>Sharing your digital business cards</h5></a>
                                </p>
                                <p>
                                    <a style="text-decoration:none;" href="#address-Book"><h5>Address Book</h5></a>
                                </p>
                                <p>
                                    <a style="text-decoration:none;" href="#virtual-backgrounds">
                                        <h5>Virtual backgrounds</h5></a>
                                </p>
                            
                            </div>
                        </div>
                       <section id="general" style=" padding:10%; background-color: ;">
                            <h1 class="heading-23"><b>General</b></h1><br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>Where can I get V.Card?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can download the V.Card app for free in the App Store and Google Play Store. You can also use V.Card on the web.
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <h5>How much does V.Card cost?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        V.Card allows you to create and share your digital business card for free. For a more premium experience, we offer digital business card subscriptions with additional features for individuals and businesses.
                                    </div>
                                </div>
                            </div>  
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <h5>Is V.Card active on social media?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes! We regularly post on our social platforms. Follow us to keep up with the latest product updates.
                                    </div>
                                </div>
                            </div>  
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            <h5>Where do I send feedback??</h5>
                                        </button>
                                    </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We love hearing your comments; it’s how we make V.Card better! Please send your feedback to feedback@v.card.me, or fill out a form on our Contact Us page.
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <h5>I’m interested in writing about V.Card. Who should I contact?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        If you’d like to write an article about V.Card, please contact press@ V.Card.me, and we’ll get back to you as soon as we can. In the meantime,check out our Press page.
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            <h5>I found a bug! What should I do?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        If you found a bug, we’d love to fix it. Please contact support through:
                                        <pre style="margin-left: -35%">
                                             Web: Click on your name at the top right and select Contact Support.
                                            -Mobile: Tap settings and scroll down to the Contact Support page
                                            -Mail: Contact us at support@v.card.me
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                            <h5>I forgot my password. Can I reset it?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can reset your password here.
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                            <h5>Can I change the email associated with my account?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseNine" class="accordion-collapse collapse show" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can change your email address in your V.Card Settings. Remember, the email address associated with your account is used for logging in and for all V.Card communications.
                                    </div>
                                </div>
                            </div>
                            <br>
                                <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                            <h5>How do I delete my account?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        YIf there’s anything we can do to improve your experience, please email us at feedback@v.card.me. If you want to delete your account, go to Settings, and under Account, tap Delete Account. Type “Delete” to confirm the account deletion.
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                                <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                            <h5>How do I unsubscribe from marketing emails?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse show" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        If you’d like to stop receiving marketing emails, please click Unsubscribe at the bottom of the email to be removed from that list.
                                        If you are a V.Card user, you will continue to receive certain product-related emails that are integral to the V.Card app.
                                    </div>
                                </div>
                            </div>

                                <br>
                                <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                            <h5>How do I export my contacts?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseTwelve" class="accordion-collapse collapse show" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can export your contacts by going to the V.Card Settings, scrolling down to the Advanced section, and tapping Export Contacts. 
                                        Your exported contacts will be emailed to you.
                                    </div>
                                </div>
                            </div>
                                
                                <br>
                                <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                                            <h5>Why was V.Card created?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseThirteen" class="accordion-collapse collapse show" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We strongly believe in our mission: helping people strengthen relationships and amplify the power of their network.
                                    </div>
                                </div>
                            </div>

                        </section>
                        <section id="creating-your-digital-business-cards" style=" padding:10%;">
                            <h1 class="heading-23"><b>Creating Your Digital Business Cards</b></h1>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfourteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefourteen" aria-expanded="true" aria-controls="collapsefourteen">
                                            <h5>Can I make digital business cards without downloading the app?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsefourteen" class="accordion-collapse collapse show" aria-labelledby="headingfourteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can seamlessly create and share digital business cards on your computer with the V.Card web app. Switching from the web to the iOS or 
                                    Android app allows you to take your digital business card with you wherever you go.
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfifteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefifteen" aria-expanded="true" aria-controls="collapsefifteen">
                                            <h5>How many digital business cards can I create?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsefifteen" class="accordion-collapse collapse show" aria-labelledby="headingfifteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can make up to four different digital business cards with a free account. If you want 
                                        more than that,you’ll need to upgrade to a subscription plan.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingsixteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesixteen" aria-expanded="true" aria-controls="collapsesixteen">
                                            <h5>What different cards do you recommend?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsesixteen" class="accordion-collapse collapse show" aria-labelledby="headingsixteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Everyone has their preferences, but we recommend having cards 
                                        for personal use and Company workspace.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingseventeen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseventeen" aria-expanded="true" aria-controls="collapseseventeen">
                                            <h5>What information should I put on my business cards?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseseventeen" class="accordion-collapse collapse show" aria-labelledby="headingseventeen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can add your phone number(s), email(s), any social media handles, 
                                        your company logo, payment, messaging apps, and more.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingeighteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeighteen" aria-expanded="true" aria-controls="collapseeighteen">
                                            <h5>What is the ideal image size?</h5>
                                        </button>
                                    </h2>
                                <div id="collapseeighteen" class="accordion-collapse collapse show" aria-labelledby="headingeighteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The ideal size of image is 25 kb.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingnineteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenineteen" aria-expanded="true" aria-controls="collapsenineteen">
                                            <h5>Is it okay to put social media handles on my digital business card? Is that unprofessional?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsenineteen" class="accordion-collapse collapse show" aria-labelledby="headingnineteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Sharing social media pages is a great networking tool to maintain your connections.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwenty">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwenty" aria-expanded="true" aria-controls="collapsetwenty">
                                            <h5>How do I change the color of my digital business cards?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwenty" class="accordion-collapse collapse show" aria-labelledby="headingtwenty" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The free version of V.Card gives you five colors to choose from while customizing your card. 
                                        If you want to customize your card's color(s) further, you’ll need to sign up for one of our
                                        digital business card subscription plans.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentyone">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentyone" aria-expanded="true" aria-controls="collapsetwentyone">
                                            <h5>Any recommendations on what I should write in my business card headline?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentyone" class="accordion-collapse collapse show" aria-labelledby="headingtwentyone" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        It depends on the type of card you’re creating. If it’s a networking card, 
                                        perhaps list out your core skills and work history.If it’s a personal card, 
                                        maybe make it a little more fun and write a bit about who you are outside of 
                                        work! The headline can be a maximum of 280 characters.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentytwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentytwo" aria-expanded="true" aria-controls="collapsetwentytwo">
                                            <h5>How do I choose a different card design?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentytwo" class="accordion-collapse collapse show" aria-labelledby="headingtwentytwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                            Choose from our three distinct design options with a V.Card Professional, 
                                            Business, or Enterprise plan. At this time, card designs can only be updated 
                                            on the V.Card web app. (Don’t worry—as soon as you save your card with the new design, 
                                            it will automatically appear on your mobile app.)
                                    </div>
                                </div>
                            </div>
                            <br>

                        </section>


                        <section id="sharing-your-digital-business-cards" style=" padding:10%;">
                            <h1 class="heading-23"><b>Sharing Your Digital Business Cards</b></h1>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentythree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentythree" aria-expanded="true" aria-controls="collapsetwentythree">
                                            <h5>How do I share my card?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentythree" class="accordion-collapse collapse show" aria-labelledby="headingtwentythree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are a few ways to share your digital business card. We recommend sharing it using 
                                        your unique QR code, but you can also text, email, and share the link to your card. To 
                                        share your card,simply double-tap the card you’d like to share and select your preferred 
                                        sharing method.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentyfour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentyfour" aria-expanded="true" aria-controls="collapsetwentyfour">
                                            <h5>Can I share my HiHello card with someone who doesn’t have the app?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentyfour" class="accordion-collapse collapse show" aria-labelledby="headingtwentyfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes! You can share your  v.card with anyone—even if they don’t 
                                        have the app—via your QR code, email, text message, and link sharing. 
                                        Once received, anyone can save your contact information by emailing or texting your 
                                        card to themselves or downloading it as a virtual contact file.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentyfive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentyfive" aria-expanded="true" aria-controls="collapsetwentyfive">
                                            <h5>How do I share my card using my QR code?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentyfive" class="accordion-collapse collapse show" aria-labelledby="headingtwentyfive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Every digital business card has its unique QR code. Double-tap
                                        the card you’d like to share and show your V.Card QR code to the
                                        person with whom you’re sharing your card.They’ll have the option
                                        to save your card by texting or emailing it to themselves or downloading 
                                        it as a virtual contact file.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentysix">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentysix" aria-expanded="true" aria-controls="collapsetwentysix">
                                            <h5>What-is-a-QR-code?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentysix" class="accordion-collapse collapse show" aria-labelledby="headingtwentysix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        QR stands for Quick Response. A QR code acts like a barcode you’d see at a grocery store. 
                                        When scanned with a smartphone, it’ll pull up the encoded information.
                                    </div>
                                </div>
                            </div>
                            <br>

                        </section>

                        <section id="address-Book" style=" padding:10%;">
                            <h1 class="heading-23"><b>Address Book</b></h1>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentyseven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentyseven" aria-expanded="true" aria-controls="collapsetwentyseven">
                                            <h5>What is a digital business card address book?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentyseven" class="accordion-collapse collapse show" aria-labelledby="headingtwentyseven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A digital business card address book is an electronic database that stores
                                        and organizes digital business cards.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentyeight">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentyeight" aria-expanded="true" aria-controls="collapsetwentyeight">
                                            <h5>How do I add digital business cards to my address book?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentyeight" class="accordion-collapse collapse show" aria-labelledby="headingtwentyeight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can add digital business cards to your address book by scanning QR Code, 
                                        it will Show you the profile of user.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingtwentynine">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwentynine" aria-expanded="true" aria-controls="collapsetwentynine">
                                            <h5>Can I store multiple digital business cards in one address book?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsetwentynine" class="accordion-collapse collapse show" aria-labelledby="headingtwentynine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, most V.Card business card address books allow you to store multiple 
                                        digital business cards in Address Book.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingthirty">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirty" aria-expanded="true" aria-controls="collapsethirty">
                                            <h5>Can I search for a specific digital business card in my address book?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsethirty" class="accordion-collapse collapse show" aria-labelledby="headingthirty" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Yes, V.card digital business card address books have a search feature that allows you 
                                    to search for a specific contact by name, company, or other information.
                                    </div>
                                </div>
                            </div>
                            <br>

                        </section>
                        
                        <section id="virtual-backgrounds" style=" padding:10%;">
                            <h1 class="heading-23"><b>Virtual Background</b></h1>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingthirtyOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirtyOne" aria-expanded="true" aria-controls="collapsethirtyOne">
                                            <h5>How can i add virtual background?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsethirtyOne" class="accordion-collapse collapse show" aria-labelledby="headingthirtyOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        When you are designing your digital business card, you can add an image that you would like to use as your background.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingthirtytwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirtytwo" aria-expanded="true" aria-controls="collapsethirtytwo">
                                            <h5>Can i upload an image?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsethirtytwo" class="accordion-collapse collapse show" aria-labelledby="headingthirtytwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes you can upload an image while creating your digital business cards.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingthirtythree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirtythree" aria-expanded="true" aria-controls="collapsethirtythree">
                                            <h5>What was the image size?</h5>
                                        </button>
                                    </h2>
                                <div id="collapsethirtythree" class="accordion-collapse collapse show" aria-labelledby="headingthirtythree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The ideal size of image is 2 Mb.
                                    </div>
                                </div>
                            </div>
                           
                        </section>
   
                    </div>
                </div>
            </div>    
        </div>
    </div>
    



<footer>
    <section class="text-white text-center bg_main_content_yellowish mt-5" style="padding: 20px; margin-right: -30%; margin-left: -30%;">
      
      <div class="container ">
            <div class="d-flex justify-content-between text-white">
                <div class="py-2">
                    <a href="#contact" class="text-white text-decoration-none">Contact us</a> <span style="color:#304367">|</span> <a
                    href="/privacy-policy" class="text-white text-decoration-none">Privacy Policy</a>
                    </div>
                    <div class="py-2">
                        <p class="mb-0">Copyright @ 2022. <a href="#" class="text-white">Biafotech.</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
</body>
<style>
    /*html {
        scroll-behavior: smooth;
    }*/
     .panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }

    /* ----- v CAN BE DELETED v ----- */
    /*body {
        background-color: #26a69a;
    }*/

    .demo {
        padding-top: 60px;
        padding-bottom: 60px;
    }
</style>
<script>
    function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>