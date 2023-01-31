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
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

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
                                        <h1 style="margin-left: 30%; margin-top: 50px; border: 20px; border-color: black;">Frequently Asked Questions</h1>

                                        <br><br>
                                            
                                        <div style ="margin-left:10%">
                                        
                                            <h2>Contents</h2>
                                            <p>
                                                <a style="text-decoration:none;" href="#general">General</a>
                                            </p>
                                            <p>
                                                <a style="text-decoration:none;" href="#creating-your-digital-business-cards">Creating your digital business cards</a>
                                            </p>
                                            <p>
                                                <a style="text-decoration:none;" href="#sharing-your-digital-business-cards">Sharing your digital business cards</a>
                                            </p>
                                            <p>
                                                <a style="text-decoration:none;" href="#address-Book">Address Book</a>
                                            </p>
                                            <p>
                                                <a style="text-decoration:none;" href="#virtual-backgrounds">Virtual backgrounds</a>
                                            </p>
                                        
                                        </div>
                                    </div>
                                   <section id="general" style=" padding:10%;">
                                        <div >
                                            
                                        <h1 class="heading-23">General</h1>
                                        <div id="Where-can-I-get-HiHello">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p>
                                                        Where can I get V.Card?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p >
                                                You can download the V.Card app for free in the App Store and Google Play Store. You can also use V.Card on the web..
                                            </p>
                                        

                                        <div id="How-much-does-BiafoTech-cost">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                        How much does V.Card cost?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                V.Card allows you to create and share your digital business card for free. For a more premium experience, we offer digital business card subscriptions with additional features for individuals and businesses.
                                            </p>

                                        <div id="Is-BiafoTech-active-on-social-media">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-15">
                                                        Is V.Card active on social media?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                Yes! We regularly post on our social platforms. Follow us to keep up with the latest product updates.
                                            </p>

                                        <div id="Where-do-I-send-feedback?">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-15">
                                                        Where do I send feedback??
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                We love hearing your comments; it’s how we make V.Card better! Please send your feedback to feedback@v.card.me, or fill out a form on our Contact Us page.
                                            </p>
                                        
                                        <div id="I’m-interested-in-writing-about-BiafoTech-Who-should-I-contact">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-15">
                                                        I’m interested in writing about V.Card. Who should I contact?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                If you’d like to write an article about V.Card, please contact press@ V.Card.me, and we’ll get back to you as soon as we can. In the meantime,check out our Press page.
                                            </p>

                                        <div id="I-found-a-bug!-What-should-I-do?">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p>
                                                        I found a bug! What should I do?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                If you found a bug, we’d love to fix it. Please contact support through:
                                                <pre style="margin-left: -41%">
                                                     Web: Click on your name at the top right and select Contact Support.
                                                    -Mobile: Tap settings and scroll down to the Contact Support page
                                                    -Mail: Contact us at support@v.card.me
                                                </pre>
                                            </p>
                                            
                                            <div id="I-forgot-my-password-Can-I-reset-it">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                        I forgot my password. Can I reset it?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                You can reset your password here.
                                            </p>
                                            

                                            <div id="I-forgot-my-password-Can-I-reset-it">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                        Can I change the email associated with my account?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                You can change your email address in your V.Card Settings. Remember, the email address associated with your account is used for logging in and for all V.Card communications.
                                            </p>



                                            <div id="I-forgot-my-password-Can-I-reset-it">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                        How do I delete my account?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                If there’s anything we can do to improve your experience, please email us at feedback@v.card.me. If you want to delete your account, go to Settings, and under Account, tap Delete Account. Type “Delete” to confirm the account deletion.
                                            </p>


                                            <div id="I-forgot-my-password-Can-I-reset-it">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                    How do I unsubscribe from marketing emails?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                If you’d like to stop receiving marketing emails, please click Unsubscribe at the bottom of the email to be removed from that list.
                                                If you are a V.Card user, you will continue to receive certain product-related emails that are integral to the V.Card app.
                                            </p>



                                            <div id="I-forgot-my-password-Can-I-reset-it">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                        How do I export my contacts?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                You can export your contacts by going to the V.Card Settings, scrolling down to the Advanced section, and tapping Export Contacts. 
                                                Your exported contacts will be emailed to you.
                                            </p>
                                            

                                            <div id="I-forgot-my-password-Can-I-reset-it">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p class="bold-text-10">
                                                        Why was V.Card created?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p class="text-block-12">
                                                We strongly believe in our mission: helping people strengthen relationships and amplify the power of their network.
                                            </p>

                                    </section>
                                    <section id="creating-your-digital-business-cards" style=" padding:10%;">
                                        <h1 class="heading-23">Creating Your Digital Business Cards</h1>
                                        <div id="Can-I-make-digital-business-cards-without-downloading-the-app?">
                                            <h5>
                                                <a style="text-decoration:none;" href="#" class="linkmobile">
                                                    <p>
                                                        Can I make digital business cards without downloading the app?
                                                    </p>
                                                </a>
                                            </h5>
                                            <p >
                                                You can seamlessly create and share digital business cards on your computer with the V.Card web app. Switching from the web to the iOS or 
                                                Android app allows you to take your digital business card with you wherever you go. 
                                            </p>
                                    </section>
                                    
                                </div>
                            </div>
                        </div>    
                    </div>
    </div>
    


    

</body>


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