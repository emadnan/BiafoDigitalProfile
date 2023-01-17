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
                                <a class="nav-link text-white text-center" href="#contact">
                                    Contact Us
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
    <!-- <svg viewBox="0 0 1440 319">
        <path fill="#ad021c" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg> -->
        <section class="about_content mt-5" id="about_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-white mt-3">About Us </h1>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('frontend/img/about_3.png')}}" alt="" width="500" height="600">
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
                                Lorem ipsum dolor sit amet, qui suavitate sententiae an. Ius unum primis oportere ex,
                                his id paulo graece tacimates, Lorem ipsum dolor sit amet, qui suavitate sententiae an.
                                Ius unum primis oportere ex, his id paulo graece tacimates, Lorem ipsum dolor sit amet,
                                qui suavitate sententiae an. Ius unum primis oportere ex, his id paulo graece tacimates,
                                Lorem ipsum dolor sit amet, qui suavitate sententiae an.
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
                    <a href="#contact" class="text-white text-decoration-none">Contact us</a> <span style="color:#304367">|</span> <a
                      href="/privacy-policy" class="text-white text-decoration-none">Privacy Policy</a>
                  </div>
                  <div class="py-2">
                  <p class="mb-0">Copyright @ 2022. <a href="#" class="text-white">Biafotech.</a> All rights reserved.</p>
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