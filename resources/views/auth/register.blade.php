<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cardify - Login</title>
    <link rel="icon" href="{{asset('frontend/img/favIcon.png')}}" />
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="{{asset('frontend/js/countrypicker\js\countrypicker.js')}}"></script>
    <script src="{{asset('frontend/js/countrypicker\js\countrypicker.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.multiselect.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/additional-methods.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/dist/min/dropzone.min.js')}}"></script>
    <script type="text/javascript">
    jQuery.validator.setDefaults({
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\fontawesome\css\all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\jquery.multiselect.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\countrypicker\css\flags') }}" rel="stylesheet">
    <link href="{{ asset('frontend\dist\min\dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\login_styles.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>

<body>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blue-card">
                                <img src="{{asset('frontend/img/cardify_white.png')}}" alt="logo" class="logo">
                                <img src="{{asset('frontend/img/landing_3.png')}}" alt="banner" class="banner">
                                <div class="slug_div mb-5">
                                    <h3>Welcome to QR Generated Card Application </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 text-center">
                            <h2 class="login-text">Signup</h2>
                            <div class="row mt-5">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 mt-2">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="Email" required
                                                autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback text-black" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password">

                                            @error('password')
                                            <span class="invalid-feedback text-black" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <input id="password-confirm" type="password" class="form-control"
                                                placeholder="Confirm Password" name="password_confirmation" required
                                                autocomplete="new-password">
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <input type="radio" id="user_type" class="form-check-input"
                                                    name="user_type" value="individual" checked>
                                                <label for="individual"
                                                    class="text-black form-check-label">Individual</label><br>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" id="user_type" name="user_type"
                                                    class="form-check-input" value="company">
                                                <label for="company"
                                                    class="text-black form-check-label">Company</label><br>
                                            </div>
                                            <button type="submit" class="btn-blue mt-5">Register</button>
                                            <div class="privary-policy-text mt-3">
                                                <p>By clicking Register, you agree to our <a href="#">Terms</a> and that
                                                    you have read our <a href="#">Data Policy</a>, including our
                                                    <a href="#">Cookie Use</a>.
                                                </p>
                                            </div>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    </div>
    </div>
</body>

</html>