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
                    </ul>
                    <form class="d-flex ms-5 customize_mob_menu">
                        {{-- <a class="btn btn-yellow rounded-pill px-5 py-2" >Login</a> --}}
                        @guest
                        @if (Route::has('login'))
                        <a class="btn btn-yellow rounded-pill px-5 py-2"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
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
                        <a class="btn btn-yellow rounded-pill px-5 py-2 ml-4"
                            href="{{ route('register') }}"><b>{{ __('Create Card') }}</b></a>
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
//background-color: #ad021c;
<body>
    <div>
        <div class="card-ll mt-5" style=" border-radius: 25px;">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6 mb-4" style="margin-top: 9%;">
                  <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                        <div class="card-body text-center">
                    <button type="submit" class="btn btn-yellow rounded-pill px-5 py-2">
                        <a class="nav-link text-black text-center" href="/register" data-name="feature">
                            <b>
                                Free
                            </b>
                        </a>
                    </button>
                </div>
                            <small>Individual</small>
                            <br><br>
                            <span class="h2">$0</span>/month
                            <br><br>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg> Cras justo odio</li>
                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg> Dapibus ac facilisis in</li>
                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Vestibulum at eros</li>
                </ul>
                <div class="card-body text-center">
                    <button type="submit" class="rounded-pill px-5 py-2" style="background-color: #ad021c">
                        <a class="nav-link text-white text-center" href="/register" data-name="feature">
                            <b>
                                SignUp
                            </b>
                        </a>
                    </button>
                </div>
              </div>
            </div>
        <div class="col-lg-6 mb-4" style="margin-top: 9%;";>
          <div class="card h-100 shadow-lg">
            <div class="card-body">
              <div class="text-center p-3">
              <div class="card-body text-center">
                    <button type="submit" class="btn btn-yellow  rounded-pill px-5 py-2">
                        <a class="nav-link text-black text-center" href="/register" data-name="feature">
                            <b>
                                Standerd
                            </b>
                        </a>
                    </button>
                </div>
                <small>Small Business</small>
                <br><br>
                <span class="h2">$20</span>/month 
                <br><br>
              </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg> Cras justo odio</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg> Dapibus ac facilisis in</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg> Vestibulum at eros</li>
            </ul>
            <div class="card-body text-center">
                    <button type="submit" class="rounded-pill px-5 py-2" style="background-color: #ad021c">
                        <a class="nav-link text-white text-center" href="/register" data-name="feature">
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

<!-- 
 -->
<style>
    .card {
      border:none;
      padding: 10px 50px;
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
      box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
    }

    .card:hover::after {
      opacity: 1;
    }

    .card:hover .btn-outline-primary{
      color:white;
      background:#007bff;
    }

  </style>
