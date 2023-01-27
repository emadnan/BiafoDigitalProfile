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

<body>
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
                                <a class="nav-link text-white text-center active" aria-current="page" href="/"
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
                                <a class="nav-link text-white text-center" href="/#pricing">
                                    Pricing
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#">
                          Reviews
                        </a>
                      </li> -->
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="/#contact_us">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex ms-5 customize_mob_menu">
                            {{-- <a class="btn btn-yellow rounded-pill px-5 py-2" >Login</a> --}}
                            @guest
                            @if (Route::has('login'))
                            <a class="btn btn-yellow rounded-pill px-5 py-2"
                                href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
                            <a class="btn btn-yellow rounded-pill px-5 py-2 ml-4"
                                href="{{ route('pricing') }}"><b>{{ __('Create Card') }}</b></a>
                            @endif
                            @else
                            <a class="btn btn-yellow rounded-pill px-5 py-2 "
                            @if($profile->user_id == Auth::user()->id)
                               <a href="/edit_profile/{{$profile->card_id}}"><b><i class="fa-solid fa-pen-to-square"></i> Edit Profile</b></a>
                            @endif
                            <a class="btn btn-yellow ml-4" href="{{ route('home') }}"><b><i class="fa-solid fa-house-chimney"></i> {{ __('Dashboard') }}</b></a>
                            @endguest
                        </form>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <main>
        <div class="container">
            <div class="card" style="backgroud-color:white; margin-top:150px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('card_images')}}/{{$profile->image_path}}" alt="profile_pic"
                                style="width: 200px; height: 200px; border-radius:25%;border: 2px solid;">
                        </div>
                        <div class="col-md-7">
                            <h1 style="font-family:Palatino;font-weight:bold;">{{$profile->name}}</h1>
                            <h5 class="mt-3" style="font-family:Palatino;font-weight:bold;"><i class="fa-solid fa-map-location-dot"></i>&nbsp; {{$profile->address}}, {{$profile->city}}, {{$profile->country}}</h5>
                            <h5 class="mt-3" style="font-family:Palatino;font-weight:bold;"><i class="fa-solid fa-envelope"></i>&nbsp; {{$profile->email}}</h5>
                            <h5 class="mt-3" style="font-family:Palatino;font-weight:bold;"><i class="fa-solid fa-mobile-button"></i>&nbsp; {{$profile->phone}}</h5>
                            <h5 class="mt-3" style="font-family:Palatino;font-weight:bold;"><i class="fa-solid fa-cake-candles"></i>&nbsp; {{$profile->dob}}</h5>
                            <div class="border-top my-3"></div>
                            <h5 class="mt-3" style="font-family:Palatino;font-weight:bold;">Description:</h5>
                            <p style="font-family:Palatino;">{{$profile->description}}</p>
                        </div>
                        <div class="col-md-2">
                            @foreach($profile->social_links as $link)
                            <a href="{{$link->social_link}}" target="_blank" class="btn btn-primary mt-3 float-right"
                                style="width: 130px; height: 40px; border-radius: 10px; font-size: 15px; font-weight: bold; float:right;">
                                @if($link->social_name == 'facebook')
                                <i class="fa-brands fa-facebook"></i>&nbsp;Facebook
                                @elseif($link->social_name == 'github')
                                <i class="fa-brands fa-github"></i>&nbsp;Github
                                @elseif($link->social_name == 'website')
                                <i class="fa-solid fa-globe"></i> &nbsp;Website
                                @elseif($link->social_name == 'linkedin')
                                <i class="fa-brands fa-linkedin-in"></i>&nbsp;Linkedin
                                @endif
                            </a>
                            <br>
                            @endforeach
                        </div>

                    </div>
                    <div class="border-top my-3"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3 style="font-family:Palatino;font-weight:bold;" class="mt-2">Skills</h3>
                        </div>
                        <div class="col-md-9">
                            @if(!empty($profile->skills))
                            @foreach($profile->skills as $skill)
                            <a target="_blank" class="btn btn-yellow float-right mt-2 ml-4"
                                style="width: 100px; height: 40px; border-radius: 10px; font-size: 15px; font-weight: bold;">
                                {{$skill->skill_name}}
                            </a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="border-top my-3"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3 style="font-family:Palatino;font-weight:bold;" class="mt-2">Education</h3>
                        </div>
                        <div class="col-md-9">
                            @if(!empty($profile->educations))
                            @foreach($profile->educations as $education)
                            <div class="row">
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold;" class="mt-2">
                                        {{$education->degree}}</h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold;" class="mt-2">
                                        {{$education->school}}</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 style="font-family:Palatino;font-weight:bold;" class="mt-2">
                                        {{$education->start_date}} -
                                        @if($education->end_date)
                                        {{$education->end_date}}
                                        @else
                                        Present
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="border-top my-3"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3 style="font-family:Palatino;font-weight:bold;" class="mt-2">Experience</h3>
                        </div>
                        <div class="col-md-9">
                            @if(!empty($profile->experiences))
                            @foreach($profile->experiences as $experience)
                            <div class="row">
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold;" class="mt-2">
                                        {{$experience->position}}</h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold;" class="mt-2">
                                        {{$experience->company}}</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 style="font-family:Palatino;font-weight:bold;" class="mt-2">
                                        {{$experience->start_date}} -
                                        @if($experience->end_date)
                                        {{$experience->end_date}}
                                        @else
                                        Present
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="border-top my-3"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3 style="font-family:Palatino;font-weight:bold;" class="mt-2">Languages</h3>
                        </div>
                        <div class="col-md-9">
                            @if(!empty($profile->languages))
                            @foreach($profile->languages as $language)
                            <a target="_blank" class="btn btn-yellow float-right mt-2 ml-4"
                                style="width: 100px; height: 40px; border-radius: 10px; font-size: 15px; font-weight: bold;">
                                {{$language->language_name}}
                            </a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="border-top my-3"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3 style="font-family:Palatino;font-weight:bold;" class="mt-2">Interests</h3>
                        </div>
                        <div class="col-md-9">
                            @if(!empty($profile->interests))
                            @foreach($profile->interests as $interest)
                            <a target="_blank" class="btn btn-yellow float-right mt-2 ml-4"
                                style=" border-radius: 10px; font-size: 15px; font-weight: bold;">
                                {{$interest->interest_name}}
                            </a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <section class="text-white text-center bg_main_content_yellowish mt-5" style="padding: 15px;">

            <div class="container">
                <div class="d-flex justify-content-between text-white">
                    <div class="py-2">
                        <a href="#contact" class="text-white text-decoration-none">Contact us</a> <span
                            style="color:#304367">|</span> <a href="/privacy-policy"
                            class="text-white text-decoration-none">Privacy Policy</a>
                    </div>
                    <div class="py-2">
                        <p class="mb-0">Copyright @ 2022. <a href="#" class="text-white">Biafotech.</a> All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('frontend/js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\fontawesome\css\all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\jquery.multiselect.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome-free/css/all.min.css') }}">
</body>
<style>
.card {
    /* border: none; */
    padding: 10px 50px;
    border-radius: 20px;
}

.card::after {
    position: absolute;
    z-index: -1;
    opacity: 0;
    -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.card {

    transform: scale(1.02, 1.02);
    -webkit-transform: scale(1.02, 1.02);
    backface-visibility: hidden;
    will-change: transform;
    box-shadow: 0 1rem 3rem rgba(137, 137, 137, .75) !important;
}

.card {
    opacity: 1;
}

.card .btn-outline-primary {
    color: white;
    background: #007bff;
}
</style>

</html>