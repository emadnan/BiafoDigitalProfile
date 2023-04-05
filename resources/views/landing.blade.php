<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cardify</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="{{ asset('frontend/js/bootstrap5.bundle.min.js') }}"></script>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/landing_page_styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    <header>
        <!-- NAVBAR-BAR -->
        <section class="navbar navbar-bg" style="background-color: #ECF5FF">
            <nav class="navbar navbar-expand-lg w-100 p-0">
                <div class="container">
                    <a class="navbar-brand text-white fs-3" href="#">
                        <img src="{{ asset('frontend/img/logo_4.png') }}" alt="" width="130" height="60"
                            class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler btn-yellow text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item" id="homeId">
                                <a class="nav-link text-center active" aria-current="page" href="#">
                                    Home
                                    <!-- <div class="overlay_menu"></div> -->
                                </a>
                            </li>
                            <li class="nav-item" id="featuresId">
                                <a class="nav-link text-black text-center" href="#feature" data-name="feature">
                                    Features
                                </a>
                            </li>
                            <li class="nav-item" id="aboutUsId">
                                <a class="nav-link text-black text-center" href="#about">
                                    About us
                                </a>
                            </li>
                            <li class="nav-item" id="pricingId">
                                <a class="nav-link text-black text-center" href="#pricing">
                                    Pricing
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#">
                          Reviews
                        </a>
                      </li> -->
                            <li class="nav-item" id="requestFeaturesId">
                                <a class="nav-link text-black text-center" href="#request_a_feature">
                                    Request
                                </a>
                            </li>
                            <li class="nav-item" id="contactUsId">
                                <a class="nav-link text-black text-center" href="#contact_us">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item" id="faqID">
                                <a class="nav-link text-black text-center" href="/faq">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex ms-5 customize_mob_menu">
                            {{-- <a class="btn btn-yellow rounded-pill px-5 py-2" >Login</a> --}}
                            @guest
                                @if (Route::has('login'))
                                    <a class="btn btn-yellow rounded-pill px-5 py-2 mt-3 text-white"
                                        href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
                                    <a class="btn btn-blue text-white rounded-pill px-5 py-2 ml-4 mt-3"
                                        href="#pricing"><b>{{ __('Create Card') }}</b></a>
                                @endif
                            @else
                                <a class="btn btn-yellow rounded-pill px-5 py-2 text-white"
                                    href="#pricing"><b>{{ __('Create Card') }}</b></a>
                                <a class="btn btn-blue rounded-pill px-5 py-2 text-white ml-4" href="{{ route('home') }}"><b>{{ __('Dashboard') }}</b></a>
                            @endguest
                        </form>
                    </div>
                </div>
            </nav>
        </section>
        <!-- HERO-IMG -->
        <section class="img-fluid customize_for_mob">
            <div class="hero_bg_img">
                <div class="container">
                    <div class="position-relative">
                        <div class="position-absolute text-black customize__absolute__text">
                            <h1>Digital Business </h1>
                            <h1 style="color:#3387FF">Card</h1>
                            <p>A digital business card (also referred to as a QR code business card, virtual business
                                card, electronic business card or mobile business card) is a profile that connects all
                                your digital contact information. They give people the ability to share who they are,
                                with anyone, wherever they go.</p>
                        </div>
                        <img src="{{ asset('frontend/img/landing_3.png') }}" alt="ID Cards"
                            class="position-absolute customize__absolute__img">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        <!-- FEATURES -->
        <section id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-2"></div>
                    <div class="col-md-4 mt-5">
                        <h3 class="text-center mt-3 rounded-pill px-4 py-2">
                            <b>FEATURES</b>
                        </h3>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px">
                            <div class="card-header btn-blue text-center text-white"
                                style="border-top-right-radius:25px;border-top-left-radius:25px">
                                <h6 class="card-title">Create Digital Business Card</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Create and customize stylish digital business cards.
                                    </li>
                                    <li class="list-group-item"> It stores the data of the user once you scan the QR
                                        code it will show the profile of the user</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px">
                            <div class="card-header btn-blue text-center text-white"
                                style="border-top-right-radius:25px;border-top-left-radius:25px">
                                <h6 class="card-title">Sharing Your Business Card</h6>
                            </div>
                            <div class="card-body mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Share your virtual business card using a QR code or
                                        send
                                        it through email, text, social media, and more. </li>
                                    <li class="list-group-item"> Anyone can receive your digital card, even if they
                                        don't have the app.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px">
                            <div class="card-header btn-blue text-white text-center"
                                style="border-top-right-radius:25px;border-top-left-radius:25px">
                                <h6 class="card-title">Address Book</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">When you share your digital business card using QR
                                        Code,
                                        the contact information of the person.</li>
                                    <li class="list-group-item"> you are sharing it with will automatically be saved in
                                        your digital address book. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px">
                            <div class="card-header btn-blue text-center text-white"
                                style="border-top-right-radius:25px;border-top-left-radius:25px">
                                <h6 class="card-title">Virtual Background</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Virtual background images or upload your image</li>
                                    <li class="list-group-item">Your virtual background will encompass the information
                                        on your digital business card, including your: QR code, Name, Pronouns,
                                        Preferred Name, Title, Company, and Logo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT US -->
        <section class="about_curved_bg mt-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-2"></div>
                    <div class="col-md-4 mt-5">
                        <h3 class="text-center mt-3 rounded-pill px-4 py-2">
                            <b>ABOUT US</b>
                        </h3>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-6 ml-1">
                        <img src="{{ asset('frontend/img/about_6.png') }}" alt="About Us" class="img-fluid float-left">
                    </div>

                    <div class="col-md-6">
                        <div class="about_content_text text-black text-justify mt-4" style="font-size: 15.5px">
                            <p>Welcome to our QR Generated Card application <strong>‘Cardify’</strong>
                                where sharing your contact information has never been easier. Our mission is to
                                revolutionize business communication, eliminating the need for traditional paper
                                business cards and providing a more sustainable solution.
                            </p>
                            <p>Our application allows you to create a personalized
                                digital business card that can be shared instantly by scanning a unique QR code. With
                                our app, you can share all of your contact information, including your name, email
                                address, phone number, and social media profiles.
                            </p>
                            <p>Using <strong>Cardify</strong> saves time and
                                money, reduces paper waste, and enhances your professional image. Our app is perfect for
                                anyone looking for a convenient and sustainable way to share their contact information,
                                whether you're a business professional, entrepreneur, or student..
                            </p>
                            <p> Our company is committed to providing innovative
                                solutions that help people improve their communication and productivity. We strive to
                                create technology that is easy to use, reliable, and environmentally friendly.With
                                <strong>Cardify</strong>, you can make a great first impression every time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing -->
        <section id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-2"></div>
                    <div class="col-md-4 mt-5">
                        <!-- <div style="background-color:#ff9d00"> -->
                        <h3 class="text-center mt-3 rounded-pill px-4 py-2">
                            <b>PRICING</b>
                        </h3>

                        <!-- </div> -->
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="card-ll mt-5" style=" border-radius: 25px;">
                    <div class="container p-5">

                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <div class="card h-100 shadow-lg">
                                    <button type="submit" class="btn btn-blue">
                                        <a class="nav-link text-black text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                Free
                                            </b>
                                        </a>
                                    </button>
                                    <div class="card-body">
                                        <div class="text-center p-3">
                                            <div class="card-body text-center">

                                            </div>
                                            <small>1 User</small>
                                            <br><br>
                                            <span class="h2">$0</span>/month
                                            <br><br>
                                        </div>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make
                                            up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Cras justo odio</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Dapibus ac facilisis in</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Vestibulum at eros</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Custom colors</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Personalized card link</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Additional card designs</li>
                                    </ul>
                                    <div class="card-body text-center">
                                        <button type="submit" class="rounded-pill px-5 py-2"
                                            style="background-color: #0056D2">
                                            <a class="nav-link text-white text-center" href="/register"
                                                data-name="feature">
                                                <b>
                                                    SignUp
                                                </b>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <div class="card h-100 shadow-lg">
                                    <button type="submit" class="btn btn-blue ">
                                        <a class="nav-link text-black text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                Professional
                                            </b>
                                        </a>
                                    </button>
                                    <div class="card-body">
                                        <div class="text-center p-3">
                                            <div class="card-body text-center">

                                            </div>
                                            <small>2 User</small>
                                            <br><br>
                                            <span class="h2">$5</span>/month
                                            <br><br>
                                        </div>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make
                                            up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Cras justo odio</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Dapibus ac facilisis in</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Vestibulum at eros</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Custom colors</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Personalized card link</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Additional card designs</li>
                                    </ul>
                                    <div class="card-body text-center">
                                        <button type="submit" class="rounded-pill px-5 py-2"
                                            style="background-color: #0056D2">
                                            <a class="nav-link text-white text-center" href="/register"
                                                data-name="feature">
                                                <b>
                                                    SignUp
                                                </b>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <div class="card h-100 shadow-lg">
                                    <button type="submit" class="btn btn-blue">
                                        <a class="nav-link text-black text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                Business
                                            </b>
                                        </a>
                                    </button>
                                    <div class="card-body">
                                        <div class="text-center p-3">
                                            <div class="card-body text-center">

                                            </div>
                                            <small>10 Users</small>
                                            <br><br>
                                            <span class="h4"><b>Contact Sales</b></span>
                                            <br><br>
                                        </div>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make
                                            up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Cras justo odio</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Dapibus ac facilisis in</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Vestibulum at eros</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Custom colors</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Personalized card link</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                            </svg> Additional card designs</li>
                                    </ul>
                                    <div class="card-body text-center">
                                        <button type="submit" class="rounded-pill px-5 py-2"
                                            style="background-color: #0056D2">
                                            <a class="nav-link text-white text-center" href="/register"
                                                data-name="feature">
                                                <b>
                                                    SignUp
                                                </b>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <div class="card h-100 shadow-lg">
                                    <button type="submit" class="btn btn-blue  " s>
                                        <a class="nav-link text-black text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                Enterprise
                                            </b>
                                        </a>
                                    </button>
                                    <div class="card-body">
                                        <div class="text-center p-3">
                                            <div class="card-body text-center">

                                            </div>
                                            <small>100+ Users</small>
                                            <br><br>
                                            <span class="h4"><b>Contact Sales</b></span>
                                            <br><br>
                                        </div>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make
                                            up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Cras justo odio</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Dapibus ac facilisis in</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Vestibulum at eros</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Custom colors</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Personalized card link</li>
                                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Additional card designs</li>
                                    </ul>
                                    <div class="card-body text-center">
                                        <button type="submit" class="rounded-pill px-5 py-2"
                                            style="background-color: #0056D2">
                                            <a class="nav-link text-white text-center" href="/register"
                                                data-name="feature">
                                                <b>
                                                    SignUp
                                                </b>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
        </section>
        <!-- request a feature-->

        <section id="request_a_feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mt-2"></div>
                    <div class="col-md-6 mt-5">
                        <!-- <div style="background-color:#ff9d00"> -->
                        <h3 class="text-center mt-3 rounded-pill px-6 py-2">
                            <b>JUST SEND REQUEST</b>
                        </h3>

                        <!-- </div> -->
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="section-content">
                            <div class="row py-4 section-contact">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                    <div class="contact_form">
                                        {{-- <h3 class="mb-5 fw-bolder">JUST SEND REQUEST</h3> --}}
                                        <form id="contactForm" action="/add_featureRequest" method="post">
                                            @csrf
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="name"
                                                    type="text" placeholder="Enter your name..."
                                                    data-sb-validations="required" />
                                                <label for="name">Full name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">A name
                                                    is
                                                    required.</div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email"
                                                    type="email" placeholder="name@example.com"
                                                    data-sb-validations="required,email" />
                                                <label for="email">Email address</label>
                                                <div class="invalid-feedback" data-sb-feedback="email:required">An
                                                    email
                                                    is required.</div>
                                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is
                                                    not valid.</div>
                                            </div>
                                            <!-- Phone number input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phone" name="phone"
                                                    type="tel" placeholder="(123) 456-7890"
                                                    data-sb-validations="required" />
                                                <label for="phone">Phone number</label>
                                                <div class="invalid-feedback" data-sb-feedback="phone:required">A
                                                    phone
                                                    number is required.</div>
                                            </div>
                                            <!-- Message input-->
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="message" type="text" name="request"
                                                    placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                                <label for="message">Enter Request Details</label>
                                                <div class="invalid-feedback" data-sb-feedback="message:required">A
                                                    Request is required.</div>
                                            </div>
                                            <!-- Submit success message-->
                                            <!---->
                                            <!-- This is what your users will see when the form-->
                                            <!-- has successfully submitted-->
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    To activate this form, sign up at
                                                </div>
                                            </div>
                                            <!-- Submit error message-->
                                            <!---->
                                            <!-- This is what your users will see when there is-->
                                            <!-- an error submitting the form-->
                                            <div class="d-none" id="submitErrorMessage">
                                                <div class="text-center text-danger mb-3">Error sending message!</div>
                                            </div>
                                            <!-- Submit Button-->
                                            <button id="submitButton" type="submit"
                                                class="btn rounded-pill btn-blue text-white w-50 fw-bold">Send
                                                Request</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">

                                    <img src="/frontend/img/request_2.png"
                                        style="padding-left: 15%; height: 100%; width: 100%;">
                                    <!-- <div class="contat_info">
                        <h3 class="mb-1 fw-bolder">REQUEST INFO</h3>
                        <p>You Can Do Request From Following Details</p>
                        <div class="d-flex">
                          <div class="icons_contact_info ms-2">
                            <i class="fa-solid fa-envelope fs-3 mt-4 p-3"></i>
                          </div>
                          <div class="mt-3 ms-3">
                            <p class="mb-0 pb-0 text-black fw-bold text-uppercase">email</p>
                            <small class="text-muted">example@example.com</small>
                          </div>
                        </div>
                        <div class="d-flex mt-1">
                          <div class="icons_contact_info ms-2">
                            <i class="fa-solid fa-phone fs-3 mt-4 p-3"></i>
                          </div>
                          <div class="mt-3 ms-3">
                            <p class="mb-0 pb-0 text-black fw-bold text-uppercase">phone</p>
                            <small class="d-block text-muted">+9202302222</small>
                            <small class="text-muted">+93232344433</small>
                          </div>
                        </div>
                        <div class="d-flex mt-1">
                          <div class="icons_contact_info ms-2">
                            <i class="fa-solid fa-map-location-dot fs-3 mt-4 p-3"></i>
                          </div>
                          <div class="mt-3 ms-3">
                            <p class="mb-0 pb-0 text-black fw-bold text-uppercase">Address</p>
                            <small class="d-block text-muted">Adress here</small>
                          </div>
                        </div>
                        <div class="d-flex mt-4">
                        </div>
                        <div class="social_icons mt-4">
                          <p>Visit our social profile and get connected.</p>
                          <div class="d-flex mt-2">
                            <a href="#">
                              <i class="fa-brands fa-facebook-f fs-3 me-2 mt-2" style="padding: 8px 12px !important;"></i>
                            </a>
                            <a href="#">
                              <i class="fa-brands fa-instagram fs-3 p-2 me-2 mt-2"></i>
                            </a>
                            <a href="#">
                              <i class="fa-brands fa-linkedin-in fs-3 p-2 me-2 mt-2"></i>
                            </a>
                            <a href="#">
                              <i class="fa-brands fa-youtube fs-3 p-2 me-2 mt-2"></i>
                            </a>
                            <a href="#">
                              <i class="fa-brands fa-twitter fs-3 p-2 me-2 mt-2"></i>
                            </a>
                          </div>
                        </div>
                      </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Contract US-->
        <section id="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-2"></div>
                    <div class="col-md-4 mt-5">
                        <!-- <div style="background-color:#ff9d00"> -->
                        <h3 class="text-center mt-3 rounded-pill px-6 py-2">
                            <b>CONTACT
                                US</b>
                        </h3>

                        <!-- </div> -->
                    </div>
                    <div class="col-md-4b "></div>
                </div>
                <div class="card mt-5" style="background-color: #ECF5FF">
                    <div class="card-body">
                        <div class="section-content">
                            <div class="row py-4 section-contact">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                    <div class="contact_form">
                                        <h3 class="mb-5 fw-bolder">JUST SAY HELLO</h3>
                                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">A name
                                                    is
                                                    required.</div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email"
                                                    placeholder="name@example.com"
                                                    data-sb-validations="required,email" />
                                                <label for="email">Email address</label>
                                                <div class="invalid-feedback" data-sb-feedback="email:required">An
                                                    email
                                                    is required.</div>
                                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is
                                                    not valid.</div>
                                            </div>
                                            <!-- Phone number input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phone" type="tel"
                                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                                <label for="phone">Phone number</label>
                                                <div class="invalid-feedback" data-sb-feedback="phone:required">A
                                                    phone
                                                    number is required.</div>
                                            </div>
                                            <!-- Message input-->
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                                <label for="message">Message</label>
                                                <div class="invalid-feedback" data-sb-feedback="message:required">A
                                                    message is required.</div>
                                            </div>
                                            <!-- Submit success message-->
                                            <!---->
                                            <!-- This is what your users will see when the form-->
                                            <!-- has successfully submitted-->
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    To activate this form, sign up at
                                                </div>
                                            </div>
                                            <!-- Submit error message-->
                                            <!---->
                                            <!-- This is what your users will see when there is-->
                                            <!-- an error submitting the form-->
                                            <div class="d-none" id="submitErrorMessage">
                                                <div class="text-center text-danger mb-3">Error sending message!</div>
                                            </div>
                                            <!-- Submit Button-->
                                            <button id="submitButton" type="submit"
                                                class="btn rounded-pill btn-blue text-white w-50 fw-bold">Send
                                                Messages</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="contat_info">
                                        <h3 class="mb-1 fw-bolder">CONTACT INFO</h3>
                                        <p>You Can Contact Us From Following Details</p>
                                        <div class="d-flex">
                                            <div class="icons_contact_info ms-2">
                                                <i class="fa-solid fa-envelope fs-3 mt-4 p-3"></i>
                                            </div>
                                            <div class="mt-3 ms-3">
                                                <p class="mb-0 pb-0 text-black fw-bold text-uppercase">email</p>
                                                <small class="text-muted">info@biafotech.com</small>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1">
                                            <div class="icons_contact_info ms-2">
                                                <i class="fa-solid fa-phone fs-3 mt-4 p-3"></i>
                                            </div>
                                            <div class="mt-3 ms-3">
                                                <p class="mb-0 pb-0 text-black fw-bold text-uppercase">phone</p>
                                                <small class="d-block text-muted">+92 4232303230</small>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1">
                                            <div class="icons_contact_info ms-2">
                                                <i class="fa-solid fa-map-location-dot fs-3 mt-4 p-3"></i>
                                            </div>
                                            <div class="mt-3 ms-3">
                                                <p class="mb-0 pb-0 text-black fw-bold text-uppercase">Address</p>
                                                <small class="d-block text-muted">Lake City Near Jalal Sons, Lahore,
                                                    Punjab, Pakistan </small>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4">
                                        </div>
                                        <div class="social_icons mt-4">
                                            <p>Visit our social profile and get connected.</p>
                                            <div class="d-flex mt-2">
                                                <a href="https://www.facebook.com/BIAFOTECH/" target="_blank">
                                                    <i class="fa-brands fa-facebook-f fs-3 me-2 mt-2"
                                                        style="padding: 8px 12px !important;"></i>
                                                </a>
                                                <a href="https://www.linkedin.com/company/biafotech-pvt-ltd?original_referer=https%3A%2F%2Fwww.biafotech.com%2F"
                                                    target="_blank">
                                                    <i class="fa-brands fa-linkedin-in fs-3 p-2 me-2 mt-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <footer>
        <section class="text-black text-center bg_main_content_yellowish mt-5" style="padding: 15px; background-color:#ECF5FF">

            <div class="container">
                <div class="d-flex justify-content-between text-black">
                    <div class="py-2">
                        <a href="#contact" class="text-black text-decoration-none">Contact us</a> <span
                            style="color:black">|</span> <a href="/privacy-policy"
                            class="text-black text-decoration-none">Privacy Policy</a>
                    </div>
                    <div class="py-2">
                        <p class="mb-0">Copyright @ 2022. <a href="#" class="text-black">Cardify.</a> All
                            rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('frontend\css\custom.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('frontend\css\fontawesome\css\all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\jquery.multiselect.css') }}" rel="stylesheet">
</body>
<style>
    .card {
        border: none;
    }

    .card::after {
        position: absolute;
        z-index: -1;
        opacity: 0;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .card:hover {

        transform: scale(1.02, 1.02);
        -webkit-transform: scale(1.02, 1.02);
        backface-visibility: hidden;
        will-change: transform;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
    }

    .card:hover::after {
        opacity: 1;
    }

    .card:hover .btn-outline-primary {
        color: white;
        background: #007bff;
    }
</style>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbarSupportedContent");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
            if (this.attr('data-name') == "feature") {
                alert('hello');
            }
        });
    }
</script>

</html>
