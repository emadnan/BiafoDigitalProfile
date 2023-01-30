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
                            <a class="nav-link text-white text-center" href="/pricing" class="active"><b>Pricing</b></a>
                        </li>
                        <!-- <li class="nav-item">
                    <a class="nav-link text-white text-center" href="#">
                      Reviews
                    </a>
                  </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-center" href="/faq">
                                FAQ
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
    <div style="margin-top:7%; margin-left:30%;">
        <h1 class="heading-7">Frequently Asked Questions</h1>
        <br><br>
    </div>
    <div style ="margin-left:10%">
    
        <h2>Contents</h2>
        <p>
            <a style="text-decoration:none;" href="#general">General</a>
        </p>
        <p>
            <a style="text-decoration:none;" href="Creating your digital business cards">Creating your digital business cards</a>
        </p>
        <p>
            <a style="text-decoration:none;" href="Sharing your digital business cards">Sharing your digital business cards</a>
        </p>
        <p>
            <a style="text-decoration:none;" href="Address Book">Address Book</a>
        </p>
        <p>
            <a style="text-decoration:none;" href="Virtual backgrounds">Virtual backgrounds</a>
        </p>
    
    </div>
    <br><br>
    <div style ="margin-left:10%">
    <section id="general">
        <h1 class="heading-23">General</h1>
        <div id="Where-can-I-get-HiHello">
            <h5>
                <a style="text-decoration:none;" href="#" class="linkmobile">
                    <p>
                    Where can I get BiafoTech?
                    </p>
                </a>
            </h5>
            <p >
            You can get BiafoTech on the web.
            </p>
        

        <div id="How-much-does-BiafoTech-cost">
            <h5>
                <a style="text-decoration:none;" href="#" class="linkmobile">
                    <p class="bold-text-10">
                    How much does BiafoTech cost?
                    </p>
                </a>
            </h5>
            <p class="text-block-12">
            BiafoTech allows you to create and share your digital business card for free. For a more premium experience, we offer digital business card subscriptions with additional features for individuals and businesses.
            </p>

        <div id="Is-BiafoTech-active-on-social-media">
            <h5>
                <a style="text-decoration:none;" href="#" class="linkmobile">
                    <p class="bold-text-15">
                    Is BiafoTech active on social media?
                    </p>
                </a>
            </h5>
            <p class="text-block-12">
            Yes! We regularly post on our social platforms. Follow us to keep up with the latest product updates.
</p>

        <div id="How-do-I-contact-customer-support">
            <h5>
                <a style="text-decoration:none;" href="#" class="linkmobile">
                    <p class="bold-text-15">
                    How do I contact customer support?
                    </p>
                </a>
            </h5>
            <p class="text-block-12">
            Oh no! We’re sorry you’re encountering an issue. If you can’t find the answer on this FAQ page, we recommend contacting us through <br> the  BiafoTech app for the most efficient support experience. If you’re unable to do so, visit our Contact Us page or email us at support@ BiafoTech.me.
            </p>
        
        <div id="I’m-interested-in-writing-about-BiafoTech-Who-should-I-contact">
            <h5>
                <a style="text-decoration:none;" href="#" class="linkmobile">
                    <p class="bold-text-15">
                    I’m interested in writing about BiafoTech. Who should I contact?
                    </p>
                </a>
            </h5>
            <p class="text-block-12">
            If you’d like to write an article about BiafoTech, please contact press@ BiafoTech.me, and we’ll get back to you as soon as we can. In the meantime,<br> check out our Press page.
            </p>

        <div id="I’m-interested-in-joining-the-BiafoTech-team-are-you-hiring?">
            <h5>
                <a style="text-decoration:none;" href="#" class="linkmobile">
                    <p>
                    I’m interested in joining the BiafoTech team, are you hiring?
                    </p>
                </a>
            </h5>
            <p class="text-block-12">
            We’re flattered you’re interested in joining our team—check out our current openings! If you don’t see anything that’s a fit, feel free to drop us an <br> email at jobs@ BiafoTech.me, and we’ll let you know if we think it’s a match.
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
            You can reset your password.
            </p>

    </section>

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