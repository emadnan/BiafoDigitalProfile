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
                                <a class="nav-link text-white text-center active" aria-current="page" href="#"
                                    style="position: relative;">
                                    Home
                                    <!-- <div class="overlay_menu"></div> -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="#feature" data-name="feature">
                                    Features
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="#about">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="#subscription">
                                    Subscription
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#">
                          Reviews
                        </a>
                      </li> -->
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="/contact-us">
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
                            @else
                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="fa-solid fa-right-from-bracket"></i>&nbsp;
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            @endguest
                        </form>
                        <a class="btn btn-yellow rounded-pill px-5 py-2 ml-4"
                                href="{{ route('register') }}"><b>{{ __('Create Card') }}</b></a>
                            @endif
                    </div>
                </div>
            </nav>
        </section>
        <!-- HERO-IMG -->
        <section class="img-fluid customize_for_mob">
            <div class="hero_bg_img">
                <div class="container">
                    <div class="position-relative">
                        <div class="position-absolute text-white customize__absolute__text" style="z-index: 99;">
                            <h1>Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius unum primis oportere ex,
                                his id paulo graece tacimates,</h1>
                            <p>Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius unum primis oportere ex, his
                                id paulo graece tacimates,.</p>
                        </div>
                        <img src="{{asset('frontend/img/hero_img_6.png')}}" alt=""
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
                        <!-- <div style="background-color:#ff9d00"> -->
                        <h1 class="text-center mt-3 rounded-pill px-4 py-2"
                            style="background-color:#ff9d00;">Features
                        </h1>

                        <!-- </div> -->
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="card" style="background-color: #ad021c; border-radius: 50px;">
                            <div class="card-body">
                            <h1 class="text-center"  style="background-color:#ff9d00;border-radius: 100px;"><strong><i class="bi bi-border-all"></i></strong></h1>
                            <p class="text-center text-white" style="font-size:18px;"> Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his
                                id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius
                                unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #ad021c; border-radius: 50px;">
                            <div class="card-body">
                            <h1 class="text-center"  style="background-color:#ff9d00;border-radius: 100px;"><strong><i class="bi bi-border-all"></i></strong></h1>
                            <p class="text-center text-white" style="font-size:18px;"> Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his
                                id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius
                                unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #ad021c; border-radius: 50px;">
                            <div class="card-body">
                            <h1 class="text-center"  style="background-color:#ff9d00;border-radius: 100px;"><strong><i class="bi bi-border-all"></i></strong></h1>
                            <p class="text-center text-white" style="font-size:18px;"> Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his
                                id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius
                                unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #ad021c; border-radius: 50px;">
                            <div class="card-body">
                            <h1 class="text-center"  style="background-color:#ff9d00;border-radius: 100px;"><strong><i class="bi bi-border-all"></i></strong></h1>
                            <p class="text-center text-white" style="font-size:18px;"> Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his
                                id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius
                                unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_curved_bg mt-3" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-2"></div>
                    <div class="col-md-4 mt-5">
                        <!-- <div style="background-color:#ff9d00"> -->
                        <h1 class="text-center mt-3 rounded-pill px-4 py-2" style="background-color:#ff9d00">ABOUT US
                        </h1>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 mt-3">
                        <div>
                            <img src="{{asset('frontend/img/about_3.png')}}" class="mt-5" alt="" width="300"
                                height="400">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_content_text">
                            <h4 class="text-center text-white">Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex,
                                his id paulo graece tacimates,</h4>
                            <p class="text-center text-white"> Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his
                                id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius
                                unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui
                                suavitate sententiae an. Ius unum primis oportere ex, his id paulo graece tacimates,
                                Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius unum primis oportere ex,
                                his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet,
                                qui suavitate sententiae an. Ius unum primis oportere ex, his id paulo graece tacimates,
                                Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius unum primis oportere ex,
                                his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet,
                                qui suavitate sententiae an. Ius unum primis oportere ex, his id paulo graece tacimates,
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
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
</body>
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