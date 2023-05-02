<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="{{asset('frontend/img/favIcon.png')}}" />
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
                        <img src="{{ asset('frontend/img/cardify_logo_footer.png') }}" alt="" width="200px"
                            height="70px" class="d-inline-block align-text-top mt-2">
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
                            <li class="nav-item" id="requestFeaturesId">
                                <a class="nav-link text-black text-center" href="#request_a_feature">
                                    Request
                                </a>
                            </li>
                            <li class="nav-item" id="contactUsId">
                                <a class="nav-link text-black text-center" href="#contact_us">
                                    Contact Us
                                </a>
                            </li>
                            <li class="nav-item" id="faqID">
                                <a class="nav-link text-black text-center" href="/faq">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex ms-5 customize_mob_menu">
                            @guest
                                @if (Route::has('login'))
                                    <div class="d-grid gap-2 d-md-flex text-wrap">
                                        <a class="btn btn-yellow text-white me-md-3 px-4 mt-3" role="button"
                                            style="border-radius: 10px;"
                                            href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
                                        <a class="btn btn-blue text-white text-wrap mt-3" role="button"
                                            style="border-radius: 10px;" href="#pricing"><b>{{ __('Create Card') }}</b></a>
                                    </div>
                                @endif
                            @else
                                <a class="btn btn-yellow text-white me-md-3 px-4 mt-3" role="button"
                                    style="border-radius: 10px;" href="#pricing"><b>{{ __('Create Card') }}</b></a>
                                <a class="btn btn-blue text-white px-4 text-wrap mt-3" role="button"
                                    style="border-radius: 10px;" href="{{ route('home') }}"><b>{{ __('Dashboard') }}</b></a>
                            @endguest
                        </form>
                    </div>
                </div>
            </nav>
        </section>

        <section class="img-fluid customize_for_mob">
            <div class="hero_bg_img">
                <div class="container">
                    <div class="position-relative">
                        <div class="position-absolute text-black customize__absolute__text">
                            <h1>Digital Business </h1>
                            <h1 style="color:#3387FF">Card</h1>
                            <p class="text-justify mb-4">A digital business card (also referred to as a QR code business
                                card, virtual business
                                card, electronic business card or mobile business card) is a profile that connects all
                                your digital contact information. They give people the ability to share who they are,
                                with anyone, wherever they go.</p>
                            <div class="mt-4 mx-3">
                                <a role="button" class="btn text-wrap" href="#pricing"
                                    style="border-radius: 9px; height: 45px; background-color:#0056D2; color:white"><b>Get Started</b></a>
                                <button type="button" value="submit" class="btn btn-outline-primary mx-4"
                                    style="border-radius: 9px; height: 45px;">How it Works</button>
                            </div>
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
                    {{-- 1st column --}}
                    <div class="col-md-3 mb-2">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px;"
                            id="feature_hover">
                            <div class="container mt-4 justify-content-around">
                                <div class="row card-icon">
                                    <div class="col-md-2 rounded float-left">
                                        <i class="fa-solid fa-code fa-2xl" style="left:120px"></i>
                                    </div>
                                    <div class="col-md-10"></div>
                                </div>
                            </div>
                            <h6 class="card-title" style="margin-top: 40px; margin-left:20px;">Create Digital Business
                                Card</h6>
                            <div class="card-body" id="card_body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Create and customize stylish digital business cards.
                                    </li>
                                    <li class="list-group-item"> It stores the data of the user once you scan the QR
                                        code it will show the profile of the user</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- 2nd Column --}}
                    <div class="col-md-3 mb-2">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px;"
                            id="feature_hover">
                            <div class="container mt-4 justify-content-around">
                                <div class="row card-icon">
                                    <div class="col-md-2 rounded float-left" style="margin-left: 2px">
                                        <i class="fa-solid fa-id-card fa-2xl"></i>
                                    </div>
                                    <div class="col-md-10"></div>
                                </div>
                            </div>
                            <h6 class="card-title" style="margin-top: 40px; margin-left:20px;">Sharing Your Business
                                Card</h6>
                            <div class="card-body" id="card_body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Share your virtual business card using a QR code or
                                        send it through email, text, social media, and more.
                                    </li>
                                    <li class="list-group-item"> Anyone can receive your digital card, even if they
                                        don't have the app.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- 3rd column --}}
                    <div class="col-md-3 mb-2">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px;"
                            id="feature_hover">
                            <div class="container mt-4 justify-content-around">
                                <div class="row card-icon">
                                    <div class="col-md-2 rounded float-left" style="margin-left: 3px">
                                        <i class="fa-solid fa-location-arrow fa-2xl"></i>
                                    </div>
                                    <div class="col-md-10"></div>
                                </div>
                            </div>
                            <h6 class="card-title" style="margin-top: 40px; margin-left:20px;">Address Book</h6>
                            <div class="card-body" id="card_body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">When you share your digital business card using QR
                                        Code, the contact information of the person.
                                    </li>
                                    <li class="list-group-item"> When you share your digital business card using QR
                                        Code, the contact information of the person.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- 4th columnn --}}
                    <div class="col-md-3 mb-2">
                        <div class="card h-100 shadow-lg" style="width: 100%; height:100%; border-radius:25px;"
                            id="feature_hover">
                            <div class="container mt-4 justify-content-around">
                                <div class="row card-icon">
                                    <div class="col-md-2 rounded float-left" style="margin-left: 3px">
                                        <i class="fa-solid fa-palette fa-2xl"></i>
                                    </div>
                                    <div class="col-md-10"></div>
                                </div>
                            </div>
                            <h6 class="card-title" style="margin-top: 40px; margin-left:20px;">Virtual Background</h6>
                            <div class="card-body" id="card_body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Virtual background images or upload your image.
                                    </li>
                                    <li class="list-group-item"> Your virtual background will encompass the information
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
        <section class="mt-5" id="about">
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
                        <img src="{{ asset('frontend/img/about_6.png') }}" alt="About Us"
                            class="img-fluid float-left">
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h3 class="text-center px-4 py-2">
                            <b>PRICING</b>
                        </h3>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="container-sm p-5">
                    <div class="row">
                        {{-- 1st price card --}}
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow-lg" id="price_cards">
                                <h5 class="mt-4" style="margin-left: 30px; color:#0056D2">
                                    <b>Free</b>
                                </h5>
                                <div class="card-body">
                                    <div class="p-3">
                                        <p>1 User</p>
                                        <span class="h2">$0</span><span>/month</span>
                                        <br><br>
                                    </div>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make
                                        up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Cras justo odio</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Dapibus ac facilisis in</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Vestibulum at eros</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Custom colors</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Personalized card link</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Additional card designs</li>
                                </ul>
                                <div class="card-body text-center">
                                    {{-- <button type="submit" class="px-5 py-2"
                                        style="background-color: #0056D2; border-radius: 20px;">
                                        <a class="nav-link text-white text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                SignUp
                                            </b>
                                        </a>
                                    </button> --}}
                                    <a class="btn btn-primary col-8 mx-auto" href="/register" role="button"
                                        type="submit"
                                        style="background-color: #0056D2; border-radius: 12px;px"><strong>SignUp</strong></a>
                                </div>
                            </div>
                        </div>
                        {{-- 2nd price card --}}
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow-lg" id="price_cards">
                                <h5 class="mt-4" style="margin-left: 30px; color:#0056D2">
                                    <b>Professional</b>
                                </h5>
                                <div class="card-body">
                                    <div class="p-3">
                                        <p>2 User</p>
                                        <span class="h2">$5</span><span>/month</span>
                                        <br><br>
                                    </div>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make
                                        up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Cras justo odio</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Dapibus ac facilisis in</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Vestibulum at eros</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Custom colors</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Personalized card link</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Additional card designs</li>
                                </ul>
                                <div class="card-body text-center">
                                    {{-- <button type="submit" class="px-5 py-2"
                                        style="background-color: #0056D2; border-radius: 20px;">
                                        <a class="nav-link text-white text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                SignUp
                                            </b>
                                        </a>
                                    </button> --}}
                                    <a class="btn btn-primary col-8 mx-auto" href="/register" role="button"
                                        type="submit"
                                        style="background-color: #0056D2; border-radius: 12px;px"><strong>SignUp</strong></a>
                                </div>
                            </div>
                        </div>
                        {{-- 3rd price card --}}
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow-lg" id="price_cards">
                                <h5 class="mt-4" style="margin-left: 30px; color:#0056D2">
                                    <b>Business</b>
                                </h5>
                                <div class="card-body">
                                    <div class="p-3">
                                        <p>10 User</p>
                                        <span class="h2">Contact Sales</span>
                                        <br><br>
                                    </div>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make
                                        up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Cras justo odio</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Dapibus ac facilisis in</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Vestibulum at eros</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Custom colors</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Personalized card link</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                        </svg> Additional card designs</li>
                                </ul>
                                <div class="card-body text-center">
                                    {{-- <button type="submit" class="px-5 py-2"
                                        style="background-color: #0056D2; border-radius: 20px;">
                                        <a class="nav-link text-white text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                SignUp
                                            </b>
                                        </a>
                                    </button> --}}
                                    <a class="btn btn-primary col-8 mx-auto" href="/register" role="button"
                                        type="submit"
                                        style="background-color: #0056D2; border-radius: 12px;px"><strong>SignUp</strong></a>
                                </div>
                            </div>
                        </div>
                        {{-- 4th price card --}}
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow-lg" id="price_cards">
                                <h5 class="mt-4" style="margin-left: 30px; color:#0056D2">
                                    <b>Enterprise</b>
                                </h5>
                                <div class="card-body">
                                    <div class="p-3">
                                        <p>100+ User</p>
                                        <span class="h2 text-wrap">Contact Sales</span>
                                        <br><br>
                                    </div>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make
                                        up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Cras justo odio</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Dapibus ac facilisis in</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Vestibulum at eros</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Custom colors</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Personalized card link</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg> Additional card designs</li>
                                </ul>
                                <div class="card-body text-center">
                                    {{-- <button type="submit" class="px-5 py-2"
                                        style="background-color: #0056D2; border-radius: 20px;">
                                        <a class="nav-link text-white text-center" href="/register"
                                            data-name="feature">
                                            <b>
                                                SignUp
                                            </b>
                                        </a>
                                    </button> --}}
                                    <a class="btn btn-primary col-8 mx-auto" href="/register" role="button"
                                        type="submit"
                                        style="background-color: #0056D2; border-radius: 12px;px"><strong>SignUp</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- request a feature-->

        <section id="request_a_feature" style="background-color: #F5F5F5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 mt-3 mb-3">
                        <h3 class="text-center mt-3 rounded-pill px-6 py-2">
                            <b>JUST SEND REQUEST</b>
                        </h3>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <form id="contactForm" action="/add_featureRequest" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <img src="/frontend/img/request_2.png" style="height: 80%; width: 80%;">
                        </div>
                        <div class="col-md-3 mb-5 bg-white">
                            <!-- Name input-->
                            <div class="form-group mb-3 mt-5">
                                <label for="name" class="mb-2">Name<span style="color:red">*</span></label>
                                <input class="form-control mb-5" id="name" name="name" type="text"
                                    placeholder="Enter your name" required
                                    style="height: 3rem;border-radius:15px;border:1px solid #0056D2;" />
                            </div>
                            <!-- Email address input-->
                            <div class="form-group mb-3">
                                <label for="email" class="mb-2">Email address<span
                                        style="color:red">*</span></label>
                                <input class="form-control mb-5" id="email" name="email" type="email"
                                    placeholder="name@example.com" style="height: 3rem;border-radius:15px;border:1px solid #0056D2;" required/>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-group mb-3 ">
                                <label for="phone" class="mb-2">Phone number<span style="color:red">*</label>
                                <input class="form-control" id="phone" name="phone" type="tel"
                                    placeholder="(123) 456-7890" style="height: 3rem;border-radius:15px; border:1px solid #0056D2;" required/>
                            </div>
                        </div>

                        <div class="col-md-3 mb-5 bg-white">
                            <!-- Message input-->
                            <div class="form-group mb-3 mr-5 mt-5">
                                <label for="phone" class="mb-2">Message<span style="color:red">*</span></label>
                                <textarea class="form-control" id="message" type="text" name="request" placeholder="How we can help you?"
                                    style="height: 10rem; border-radius: 10px;border:1px solid #0056D2;" required></textarea>
                            <!-- Submit Button-->
                            <div class="mt-5">
                                <button id="submitButton" type="submit"
                                    class="btn btn-blue text-white w-100 fw-bold mt-5"
                                    style="height: 3rem;border-radius: 15px; width:20px;">Send
                                    Request</button>
                            </div>
                        </div>
                </form>
            </div>
        </section>

        <!-- Contact US-->
        <section id="contact_us" style="background-color: #ECF5FF">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="mb-5 fw-bolder">How We Can Help You</h3>
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb-5 fw-bolder">Contact</h3>
                    </div>
                </div>
                <div class="row">
                    <form class="col-md-4" id="contactForm" data-sb-form-api-token="API_TOKEN"
                        style="border-radius: 15px 0px 0px 15px; background-color:white">

                        <!-- Name input-->
                        <div class="mt-4">
                            <label for="name" class="mb-2">Name<span style="color:red">*</span></label>
                            <input class="form-control" id="name" type="text"
                                placeholder="Enter your name..." data-sb-validations="required"
                                style="height: 3rem;border-radius:15px; border:1px solid #0056D2;" />

                            <div class="invalid-feedback" data-sb-feedback="name:required">A name
                                is
                                required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="mb-3 mr-5 mt-5">
                            <label for="email" class="mb-2">Email<span style="color:red">*</span></label>
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email"
                                style="height: 3rem;border-radius:15px; border:1px solid #0056D2;" />

                            <div class="invalid-feedback" data-sb-feedback="email:required">An
                                email
                                is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is
                                not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="mb-3 mr-5 mt-5">
                            <label for="phone" class="mb-2">Phone number<span style="color:red">*</span></label>
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required"
                                style="height: 3rem;border-radius:15px; border:1px solid #0056D2;" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A
                                phone
                                number is required.</div>
                        </div>
                    </form>
                    <form class="col-md-4" style="border-radius: 0px 15px 15px 0px;background-color:white">
                        <!-- Message input-->

                        <div class="mb-3 mt-4">
                            <label for="message" class="mb-2">Message</label>
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem;border-radius:15px; border:1px solid #0056D2;" data-sb-validations="required"></textarea>

                            <div class="invalid-feedback" data-sb-feedback="message:required">A
                                message is required.</div>
                        </div>
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
                        <div class="mt-5 mb-3">
                            <button id="submitButton" type="submit"
                                class="btn btn-blue text-white w-100 fw-bold mt-5"
                                style="height: 3rem;border-radius: 10px;">Send
                                Messages</button>
                        </div>
                    </form>
                    <div class="col-lg-4">
                        <div class="contat_info h-100"
                            style="background-color: #0056D2; border-radius:20px; padding-right:20px">
                            <div class="d-flex">
                                <div class="icons_contact_info ms-2 mt-5">
                                    <i class="fa-solid fa-envelope fs-3 mt-4 p-3"></i>
                                </div>
                                <div class="ml-3">
                                    <p style="margin-top: 85px">info@cardify.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="icons_contact_info ms-2">
                                    <i class="fa-solid fa-phone fs-3 mt-4 p-3"></i>
                                </div>
                                <div>
                                    <p
                                        class="d-block mb-1 pb-0 text-white fw-bold text-uppercase"style="margin-top: 40px">
                                        +92 4232303230
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex mt-1">
                                <div class="icons_contact_info ms-2">
                                    <i class="fa-solid fa-map-location-dot fs-3 mt-4 p-3"></i>
                                </div>
                                <div class="mt-4">
                                    {{-- <p class="mb-0 pb-0 text-black fw-bold text-uppercase">Address</p> --}}
                                    <p class="text-white">Lake City Near Jalal Sons, Lahore,
                                        Punjab, Pakistan </p>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                            </div>
                            {{-- <div class="social_icons mt-4">
                                <p>Visit our social profile and get connected.</p>
                                <div class="d-flex mt-2">
                                    <a href="https://www.facebook.com/BIAFOTECH/" target="_blank">
                                        <i class="fa-brands fa-facebook-f fs-3 me-2 mt-2 mb-3"
                                            style="padding: 8px 12px !important;"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/biafotech-pvt-ltd?original_referer=https%3A%2F%2Fwww.biafotech.com%2F"
                                        target="_blank">
                                        <i class="fa-brands fa-linkedin-in fs-3 p-2 me-2 mt-2"></i>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-5"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- <footer>
        <section class="text-black text-center bg_main_content_yellowish"
            style="padding: 15px; background-color:#FFFFFF">

            <div class="container">
                <div class="d-flex justify-content-between text-black">
                    <div row>
                        <div col-md-></div>

                    </div> --}}
    {{-- <div class="py-2">
                        <a href="#contact" class="text-black text-decoration-none">Contact us</a> <span
                            style="color:black">|</span> <a href="/privacy-policy"
                            class="text-black text-decoration-none">Privacy Policy</a>
                    </div>
                    <div class="py-2">
                        <p class="mb-0">Copyright @ 2022. <a href="#" class="text-black">Cardify.</a> All
                            rights
                            reserved.</p>
                    </div> --}}
    {{-- </div>
            </div>
        </section>
    </footer> --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mt-5">
                    <div>
                            <img src="{{ asset('frontend/img/cardify_logo_footer.png') }}" alt=""
                                width="300" height="100" class="d-inline-block align-text-top">
                        <div class="mt-4">
                            <div class="d-flex">
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-facebook fa-2xl me-3 mb-4 ml-4"></i>
                                </a>
                                <a href="#"
                                    target="_blank">
                                    <i class="fa-brands fa-linkedin fa-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="mt-5">
                        <h5 style="color: #0056D2">Services</h5>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <a href="#pricing" class="text-decoration-none" style="color: black">Create Card</a>
                            </li>
                            <li>
                                <a href="#pricing" class="text-decoration-none" style="color: black">Share Card</a>
                            </li>
                            <li>
                                <a href="#contact_us" class="text-decoration-none" style="color: black">Address
                                    Book</a>
                            </li>
                            <li>
                                <a href="#pricing" class="text-decoration-none" style="color: black">Virtual
                                    Background</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="mt-5">
                        <h5 style="color: #0056D2">Support</h5>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <a href="#feature" class="text-decoration-none" style="color: black">Features</a>
                            </li>
                            <li>
                                <a href="#pricing" class="text-decoration-none" style="color: black">Pricing</a>
                            </li>
                            <li>
                                <a href="#request_a_feature" class="text-decoration-none"
                                    style="color: black">Request</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="mt-5">
                        <h5 style="color: #0056D2">About Us</h5>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <a href="#contact_us" class="text-decoration-none" style="color: black">Contact</a>
                            </li>
                            <li>
                                <a href="/faq" class="text-decoration-none" style="color: black">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2 border-top">
                <div class="copyright mt-3">
                    <p>Copyright @ 2023 <a href="#" target="">Cardify</a> All rights reserved.</p>
                </div>
            </div>
        </div>
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
</body>



</html>
