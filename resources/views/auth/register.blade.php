@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8 mt-5">
                <div class="card mt-5" style="background-color: #ECF5FF; border-radius: 25px;">

                    <div class="card-body">
                        <div align="center"class="image">
                            <img src="{{ asset('frontend\img\logo_3.png') }}" alt="AdminLTE Logo" width="300"
                                hieght="300">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end text-black">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end text-black">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 mt-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end text-black">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback text-black" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end text-black">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <!-- // two radio button individual or company -->
                            <div class="row mb-3">
                                <!-- <label for="email" class="col-md-4 col-form-label text-md-end text-black">{{ __('Register As') }}</label> -->
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" id="user_type" class="form-check-input" name="user_type"
                                        value="individual" checked>
                                    <label for="individual" class="text-black form-check-label">Individual</label><br>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" id="user_type" name="user_type" class="form-check-input"
                                        value="company">
                                    <label for="company" class="text-black form-check-label">Company</label><br>
                                </div>

                                <div class="row mb-3 mt-3">
                                    <div class="col-md-6 offset-md-5">
                                        <button type="submit" class="btn rounded-pill px-5 py-2 text-white" style="background-color: #0056D2">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
