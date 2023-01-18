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
                                <a class="nav-link text-white text-center" href="/pricing">
                                    Pricing
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#">
                          Reviews
                        </a>
                      </li> -->
                            <li class="nav-item">
                                <a class="nav-link text-white text-center active" href="/contact-us" class="active">Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex ms-5 customize_mob_menu">
                            {{-- <a class="btn btn-yellow rounded-pill px-5 py-2" >Login</a> --}}
                            @guest
                            @if (Route::has('login'))
                            <a class="btn btn-yellow rounded-pill px-5 py-2"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                <a class="btn btn-yellow rounded-pill px-5 py-2 ml-4"
                                href="{{ route('pricing') }}"><b>{{ __('Create Card') }}</b></a>
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
    <div class="container" style="margin-top: 10%; margin-bottom: 9.1%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card mt-5" style="background-color: #ad021c; border-radius: 25px;">

                <div class="card-body">
                    <div style="text-align: center;">
                        <a class="navbar-brand text-white fs-3" href="#">
                        <h2>Contact Us</h2>
                    </a>
                    </div>
                    <form method="POST" action="#">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-white">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-white">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end text-white">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" required autocomplete="phone_number">

                                @error('Phone Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Message input -->
                        <!-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-white">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" rows="4" class="form-control @error('Message') is-invalid @enderror" name="Message" value="{{ old('Message') }}" required autocomplete="name" autofocus style="padding: 20px 10px; line-height: 60px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end text-white">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" required autocomplete="phone_number"></textarea>

                                @error('Phone Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <!-- <div class="form-outline mb-3 w-50" style="margin-left: 34%; margin-top: -2%">
                            <label for="email" class="text-md-end text-white" style="margin-left: -23%">{{ __('Message') }}</label>
                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                          </div> -->
                        <!-- <div class="form-outline w-50">
                          <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                          <label class="form-label" for="textAreaExample">Message</label>
                        </div> -->

                        <div class="row mb-5">
                            <div class="col-md-6 offset-md-5 mt-3" style="margin-top:3px;">
                                <button type="submit" class="btn btn-yellow rounded-pill px-5 py-2">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
           
        
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
<footer>
    <section class="text-white text-center bg_main_content_yellowish mt-5" style="padding: 20px;">
      
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
    </section>
</footer>
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