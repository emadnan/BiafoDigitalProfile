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


<body>
    <header>
        <!-- NAVBAR-BAR -->
        <section class="navbar fixed-top" style="background-color: #0056D2">
            <nav class="navbar navbar-expand-lg w-100 p-0 ">
                <div class="container">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/img/cardify_white.png') }}" alt="" width="120"
                            height="40" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler btn-yellow text-white" style="color: #FAFAFA" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" aria-current="page" href="/">
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
                                <a class="nav-link text-white text-center" href="/#request_a_feature">
                                    Request A Feature
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="/#contact-us">Contact Us</a>
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
                                    <a class="btn btn-yellow px-4 py-2 text-white"
                                    style="border-radius: 10px;" href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
                                    <a class="btn btn-yellow  px-4 py-2 ml-4 text-white"
                                        href="/#pricing" style="border-radius: 10px;"><b>{{ __('Create Card') }}</b></a>
                                @endif
                            @else
                                <a class="btn btn-yellow  px-4 py-2 text-white" style="border-radius: 10px;"
                                    href="#/pricing"><b>{{ __('Create Card') }}</b></a>
                                <a class="btn btn-yellow  px-4 py-2 text-white ml-4" style="border-radius: 10px;"
                                    href="{{ route('home') }}"><b>{{ __('Dashboard') }}</b></a>
                            @endguest

                        </form>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <main>
        <!-- <div style ="margin-left:10%"> -->
        <div class="" style=" margin-top: 3%;">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="card shadow-lg">
                            <div>
                                <h1 style="font-family: Arial, Helvetica, sans-serif;"
                                    class="d-flex justify-content-center mt-5">
                                    <b>
                                        Frequently Asked Questions
                                    </b>
                                </h1>

                                <div style="margin-left:10%;margin-top:5%" class="row">
                                    <div class="col-md-6">

                                        <h2><b>Contents</b></h2>
                                        <p>
                                            <a style="text-decoration:none; color:#0056D2" href="#general">
                                                <h5>General</h5>
                                            </a>
                                        </p>
                                        <p>
                                            <a style="text-decoration:none; color:#0056D2"
                                                href="#creating-your-digital-business-cards">
                                                <h5>Creating your digital business cards</h5>
                                            </a>
                                        </p>
                                        <p>
                                            <a style="text-decoration:none; color:#0056D2"
                                                href="#sharing-your-digital-business-cards">
                                                <h5>Sharing your digital business cards</h5>
                                            </a>
                                        </p>
                                        <p>
                                            <a style="text-decoration:none; color:#0056D2" href="#Profile">
                                                <h5>Profile</h5>
                                            </a>
                                        </p>
                                        <p>
                                            <a style="text-decoration:none; color:#0056D2" href="#virtual-backgrounds">
                                                <h5>Virtual backgrounds</h5>
                                            </a>
                                        </p>

                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('frontend/img/faq_2.png') }}" alt=""
                                            height="80%" width="80%">
                                    </div>
                                </div>
                            </div>

                            <!-- 1. General sectoion starts here -->
                            <section id="general" style="margin-left:5%;margin-right:5%; margin-bottom:5%;">

                                <h1 class="heading-23"><b>General</b></h1><br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingone">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseone"
                                                aria-expanded="false" aria-controls="collapseone">
                                                <h5>Where can I get Cardify?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseone" class="accordion-collapse collapse"
                                            aria-labelledby="headingone" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Cardify is available as a web app, and users can create and share their
                                                digital business cards without the need to download an additional
                                                application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <h5>How much does Cardify cost?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Cardify allows you to create and share your digital business card for
                                                free. For a more premium experience, we offer digital business card
                                                subscriptions with additional features for individuals and businesses.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <h5>Is Cardify active on social media?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes! Follow us to keep up with the latest product updates.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <h5>Where do I send feedback??</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We love hearing your comments; it is how we make cardify better!
                                                Please send your feedback to info@biafotech.com, or fill out a
                                                form on our Contact Us page.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                <h5>I’m interested in writing about Cardify. Who should I
                                                    contact?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                If you’d like to write an article about Cardify, please
                                                contact info@biafotech.com, and we’ll get back to you as
                                                soon as we can.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                                <h5>I found a bug! What should I do?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse"
                                            aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>If you found a bug, we’d love to fix it. Please
                                                    contact US
                                                    through:</p>
                                                <ul style="list-style-type:square;">
                                                    <li>Web: Click on your name at the top right and
                                                        select Contact us.</li>
                                                    <li>Mobile: Tap settings and scroll down to the
                                                        Contact us page</li>
                                                    <li>Mail: Contact us at info@biafotech.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                aria-expanded="false" aria-controls="collapseEight">
                                                <h5>I forgot my password. Can I reset it?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse"
                                            aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes! You can reset your password.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                aria-expanded="false" aria-controls="collapseNine">
                                                <h5>Can I change the email associated with my
                                                    account?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse"
                                            aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You can change your email address in your
                                                cardify Settings. Remember, the email address
                                                associated with your account is used for logging
                                                in and for all communications.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTen"
                                            aria-expanded="false"
                                            aria-controls="collapseTen">
                                            <h5>How do I delete my account?</h5>
                                        </button>
                                    </h2>
                                    <div id="collapseTen"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTen"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            If you’d like to stop receiving marketing emails, please click Unsubscribe at the bottom
                                            of the email to be removed from that list. If you are a cardify. it user, you will continue
                                            to receive certain product-related emails that are integral to the cardify app </div>
                                    </div>
                                </div>

                                <br> -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEleven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                                aria-expanded="false" aria-controls="collapseEleven">
                                                <h5>How do I unsubscribe from marketing
                                                    emails?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseEleven" class="accordion-collapse collapse"
                                            aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                If you’d like to stop receiving
                                                marketing emails, please click
                                                Unsubscribe at the bottom of the email
                                                to be removed from that list. If you are
                                                a Cardify user, you will continue to
                                                receive certain product-related emails
                                                that are integral to the Cardify app.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header"
                                            id="headingTwelve">
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwelve"
                                                aria-expanded="false"
                                                aria-controls="collapseTwelve">
                                                <h5>How do I export my contacts?
                                                </h5>
                                            </button>
                                        </h2>
                                        <div id="collapseTwelve"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingTwelve"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You can export your contacts by
                                                going to the Cardify Settings,
                                                scrolling down to the Advanced
                                                section, and tapping Export
                                                Contacts.
                                                Your exported contacts will be
                                                emailed to you.

                                            </div>
                                        </div>
                                    </div>

                                        <br> -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThirteen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                                aria-expanded="false" aria-controls="collapseThirteen">
                                                <h5>Why was Cardify created?
                                                </h5>
                                            </button>
                                        </h2>
                                        <div id="collapseThirteen" class="accordion-collapse collapse"
                                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We strongly believe in our mission:
                                                helping people strengthen relationships
                                                and amplify the power oftheir network.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </section>
                            <!-- 2. SECTION "Creating Your Digital Business Cards" STARTS HERE-->
                            <section id="creating-your-digital-business-cards"
                                style="margin-left:5%;margin-right:5%; margin-bottom:5%; margin-top:3%">
                                <h1 class="heading-23"><b>Creating Your Digital Business Cards</b></h1><br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfourteen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsefourteen"
                                                aria-expanded="false" aria-controls="collapsefourteen">
                                                <h5>Can I make digital business cards without downloading the app?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsefourteen" class="accordion-collapse collapse"
                                            aria-labelledby="headingfourteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You can seamlessly create and share digital business cards on your
                                                computer
                                                with the cardify web app.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfifteen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsefifteen"
                                                aria-expanded="false" aria-controls="collapsefifteen">
                                                <h5>How many digital business cards can I create?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsefifteen" class="accordion-collapse collapse"
                                            aria-labelledby="headingfifteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                With a free user account on Cardify, you can create an unlimited number
                                                of digital business
                                                cards. However, for individuals and businesses seeking additional
                                                features and a more premium
                                                experience, we offer digital business card subscriptions.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingsixteen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsesixteen"
                                                aria-expanded="false" aria-controls="collapsesixteen">
                                                <h5>What different cards do you recommend?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsesixteen" class="accordion-collapse collapse"
                                            aria-labelledby="headingsixteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Everyone has their preferences, but we recommend having cards for
                                                personal use, work, networking, and
                                                even your side hustle.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingseventeen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseseventeen"
                                                aria-expanded="false" aria-controls="collapseseventeen">
                                                <h5>What information can I include on my digital business card?
                                                </h5>
                                            </button>
                                        </h2>
                                        <div id="collapseseventeen" class="accordion-collapse collapse"
                                            aria-labelledby="headingseventeen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You can include a variety of information on your digital
                                                business cards, such as your name, job title,
                                                company, contact information, and social media links.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingeighteen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseeighteen"
                                                aria-expanded="false" aria-controls="collapseeighteen">
                                                <h5>What is the ideal image size?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapseeighteen" class="accordion-collapse collapse"
                                            aria-labelledby="headingeighteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The ideal image size for your profile photo is 2MB.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <!-- <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingnineteen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapsenineteen"
                                            aria-expanded="false"
                                            aria-controls="collapsenineteen">
                                            <h5>Is it okay to put social media handles on my digital
                                                business card? Is that unprofessional?</h5>
                                        </button>
                                    </h2>
                                    <div id="collapsenineteen" class="accordion-collapse collapse"
                                        aria-labelledby="headingnineteen"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Sharing social media pages is a great networking tool to
                                            maintain your connections.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br> -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingnineteen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsenineteen"
                                                aria-expanded="false" aria-controls="collapsenineteen">
                                                <h5>Is it safe to share my digital business card with
                                                    others?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsenineteen" class="accordion-collapse collapse"
                                            aria-labelledby="headingnineteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, sharing your digital business card using a QR code
                                                is
                                                safe and secure. Cardify takes measures to protect your
                                                personal information and ensure the privacy of your
                                                data.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwenty">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwenty"
                                                aria-expanded="false" aria-controls="collapsetwenty">
                                                <h5>How do I change the color of my digital business
                                                    cards?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwenty" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwenty" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Cardify offers various customization options,
                                                including the
                                                ability to choose a color scheme, font style,and
                                                background
                                                image.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentyone">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentyone"
                                                aria-expanded="false" aria-controls="collapsetwentyone">
                                                <h5>Any recommendations on what I should write
                                                    in my business card headline?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentyone" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentyone" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                It depends on the type of card you’re creating.
                                                If it’s a
                                                networking card, perhaps list out your core
                                                skills
                                                and work history. If it’s a personal card,
                                                maybe make it a little more fun and write a bit
                                                about who you are
                                                outside of work!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <!-- <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header"
                                        id="headingtwentytwo">
                                        <button class="accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsetwentytwo"
                                            aria-expanded="false"
                                            aria-controls="collapsetwentytwo">
                                            <h5>How do I choose a different card design?
                                            </h5>
                                        </button>
                                    </h2>
                                    <div id="collapsetwentytwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingtwentytwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Choose from our three distinct design
                                            options with a Cardify Professional,
                                            Business, or Enterprise plan. At this time,
                                            card designs can only be updated on the
                                            Cardify web app.
                                        </div>
                                    </div>
                                </div>
                                <br> -->

                            </section>
                            <!--3. SECTION "Sharing Your Digital Business Cards" STARTS HERE-->
                            <section id="sharing-your-digital-business-cards"
                                style="margin-left:5%;margin-right:5%; margin-bottom:5%; margin-top:3%">
                                <h1 class="heading-23"><b>Sharing Your Digital Business Cards</b></h1><br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentythree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentythree"
                                                aria-expanded="false" aria-controls="collapsetwentythree">
                                                <h5>How do I share my card?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentythree" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentythree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are a few ways to share your digital business card. We recommend
                                                sharing it using your unique QR code, but you can also text, email, and
                                                share the link to your card. To share your card, simply double-tap the
                                                card
                                                you’d like to share and select your preferred sharing method.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentyfour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentyfour"
                                                aria-expanded="false" aria-controls="collapsetwentyfour">
                                                <h5>Can I share my v-card with someone who doesn’t have the app?
                                                </h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentyfour" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentyfour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes! You can share your V-card with anyone even if they don’t have the
                                                app via your QR code, email, text message, and link sharing. Once
                                                received, anyone can save your contact information by emailing or
                                                texting your card to themselves or downloading it as a virtual contact
                                                file.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentyfive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentyfive"
                                                aria-expanded="false" aria-controls="collapsetwentyfive">
                                                <h5>How do I share my card using my QR code?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentyfive" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentyfive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Every digital business card has its unique QR code. Double-tap the
                                                card you’d like to share and show your Cardify QR code to the person
                                                with whom you’re sharing your card. They’ll have the option to save
                                                your card by texting or emailing it to themselves or downloading it
                                                as a virtual contact file.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header collapsed" id="headingtwentysix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentysix"
                                                aria-expanded="false" aria-controls="collapsetwentysix">
                                                <h5>What is a QR code?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentysix" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentysix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                QR stands for Quick Response. A QR code acts like a barcode
                                                you’d see at a grocery store. When scanned with a smartphone,
                                                it’ll pull up the encoded information.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                            </section>

                            <!--4. SECTION "Profile" STARTS HERE -->
                            <section id="Profile"
                                style="margin-left:5%;margin-right:5%; margin-bottom:5%; margin-top:3%">
                                <h1 class="heading-23"><b>Profile</b></h1><br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentyseven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentyseven"
                                                aria-expanded="false" aria-controls="collapsetwentyseven">
                                                <h5>How does a user&#39;s profile get generated on Cardify?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentyseven" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentyseven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                When the user creates a digital business card, the user clicks on the
                                                &quot;add
                                                profile&quot; button and fills out the required form. Once the
                                                information
                                                is entered,
                                                the user clicks the &quot;save&quot; button, and their profile will be
                                                created.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentyeight">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentyeight"
                                                aria-expanded="false" aria-controls="collapsetwentyeight">
                                                <h5>Can I customize my digital business card profile?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentyeight" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentyeight" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can customize your profile on Cardify by adding information
                                                such as
                                                your name, job title, company, contact information, and social media
                                                links.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwentynine">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsetwentynine"
                                                aria-expanded="false" aria-controls="collapsetwentynine">
                                                <h5>Can a user update their Profile?
                                                </h5>
                                            </button>
                                        </h2>
                                        <div id="collapsetwentynine" class="accordion-collapse collapse"
                                            aria-labelledby="headingtwentynine" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes! he can update their profile.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </section>
                            <!--5.SECTION "Virtual Background" STARTS HERE -->
                            <section id="virtual-backgrounds"
                                style="margin-left:5%;margin-right:5%; margin-bottom:5%; margin-top:3%">
                                <h1 class="heading-23"><b>Virtual Background</b></h1><br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingthirtyOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsethirtyOne"
                                                aria-expanded="false" aria-controls="collapsethirtyOne">
                                                <h5>How can I add virtual background?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsethirtyOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingthirtyOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                When you are designing your digital business card, you can add an image
                                                that you would like to use as your background.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingthirtytwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsethirtytwo"
                                                aria-expanded="false" aria-controls="collapsethirtytwo">
                                                <h5>Can I upload an image?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsethirtytwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingthirtytwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can upload an image while creating your digital business cards.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingthirtythree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsethirtythree"
                                                aria-expanded="false" aria-controls="collapsethirtythree">
                                                <h5>Can I update my image?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsethirtythree" class="accordion-collapse collapse"
                                            aria-labelledby="headingthirtythree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can update your image.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingthirtyfour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsethirtyfour"
                                                aria-expanded="false" aria-controls="collapsethirtyfour">
                                                <h5>What is the image size?</h5>
                                            </button>
                                        </h2>
                                        <div id="collapsethirtyfour" class="accordion-collapse collapse"
                                            aria-labelledby="headingthirtyfour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The ideal size of the image is 2 Mb.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer>
        <section class="text-white text-center bg_main_content_yellowish mt-5"
            style="padding: 20px; margin-right: -30%; margin-left: -30%;">

            <div class="container ">
                <div class="d-flex justify-content-between text-white">
                    <div class="py-2">
                        <a href="#contact" class="text-white text-decoration-none">Contact us</a> <span
                            style="color:#304367">|</span> <a href="/privacy-policy"
                            class="text-white text-decoration-none">Privacy Policy</a>
                    </div>
                    <div class="py-2">
                        <p class="mb-0">Copyright @ 2022. <a href="#" class="text-white">Cardify.</a> All
                            rights
                            reserved.</p>
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

    .panel-default>.panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title>a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
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
