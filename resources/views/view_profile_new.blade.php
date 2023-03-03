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
    <script src="{{asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
</head>
<style>
html {
    scroll-behavior: smooth;
}

.float {
    position: fixed;
    width: 90px;
    height: 90px;
    bottom: 40px;
    right: 40px;
    background-color: #ff9d00;
    color: black;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}

/* On Hover REd Color */
.float:hover {
    background-color: #ad021c;
    color: white;

}

.my-float {
    margin-top: 24px;
    font-size: 35px;
}

.card {
    background-color: white;
    margin-top: 10%;
    /* border-radius: 50px; */
}

.card-img-top {
    /* give buttom waved curve */
    /* border-bottom-left-radius: 10%; */
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 5%;
    border-bottom: 30px solid #ad021c;
}

.line {
    border-bottom: 10px solid #ad021c;
    width: 100%;
    margin-top: 10px;
}

.dotted-left {
    border-left: 2px solid black;
    padding-left: 10px;

}

.icon {
    width: 50px;
    height: 50px;
    background-color: #ad021c;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    color: white;
    font-size: 20px;
}

.social_icon {
    width: 40px;
    height: 40px;
    background-color: #ad021c;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    color: white;
    font-size: 15px;
}

.pills {
    background-color: #ff9d00;
    color: black;
    border-radius: 25px;
    padding: 5px;
    /* font-size: 15px; */
    text-align: center;
}

.btn-red {
    background-color: #ad021c;
    border-color: #ad021c;
}

.btn-red {
    padding: 5px 10px;
    background-color: #ad021c;
    color: white;
    text-align: center;
    border-radius: 25px;
    border-color: #ad021c;
    width: 100%;
    height: 100%;
}

.btn-red:hover {
    background-color: #ff9d00;
    color: black;
    border-color: #ff9d00;
}

#bottomSheet {
    display: none;
    position: fixed;
    z-index: 999;
    top: 30%;
    left: 50%;
    transform: translate(-50%, 50%);
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 80%;
    max-width: 600px;
    border-radius: 10px;
}

#bottomSheetContent {
    max-height: 80vh;
    overflow-y: auto;
}

#closeBtn {
    margin-top: 10px;
    background-color: #ad021c;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
}

#closeBtn:hover {
    background-color: #ff9d00;
}

#openBtn {
    background-color: #ad021c;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
}

#openBtn:hover {
    background-color: #ff9d00;
}
</style>

<body style="background-color:#f2f2f2;">
    @if($profile->user_id == Auth::user()->id || $profile->company_user_id == Auth::user()->id)
    <a href="/edit_profile/{{$profile->card_id}}" class="float" role="button">
        <i class="fa-solid fa-pen-to-square my-float"></i>
    </a>
    @endif
    <div class="container">
        <div class="row" id="content">
            <div class="col-sm-4"></div>
            <div class="col-lg-4">
                <!-- Profile Here -->
                <div class="card" style="color:#ad021;border-top-left-radius:7%;border-top-right-radius:7%">
                    <img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" alt="..."
                        style="border-top-left-radius:7%;border-top-right-radius:7%;">
                    <!-- <div class="line"></div> -->

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6 d-flex justify-content-center">
                                @foreach($profile->social_links as $link)
                                <div class="col-md-3">
                                    <a href="{{$link->social_link}}">
                                        <div class="social_icon">
                                            @if($link->social_name == 'facebook')
                                            <i class="fa-brands fa-facebook"></i>
                                            @elseif($link->social_name == 'github')
                                            <i class="fa-brands fa-github"></i>
                                            @elseif($link->social_name == 'website')
                                            <i class="fa-solid fa-globe"></i>
                                            @elseif($link->social_name == 'linkedin')
                                            <i class="fa-brands fa-linkedin-in"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dotted-left">
                                    <h3 style="font-family:Palatino;font-weight:bold;">{{$profile->name}}</h3>
                                    <h5 class="card-title" style="font-family:Palatino;">{{$card->designation}}</h5>
                                    <p class="card-text" style="font-family:Palatino;">{{$card->company}}</p>
                                    <p class="card-text" style="font-family:Palatino;">{{$profile->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-10 mt-2">
                                <p class="card-text" style="font-family:Palatino;font-size:20px;">{{$card->email}}
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <!-- <a href="tel:{{$card->phone}}" class="btn btn-primary btn-sm"
                                style="border-radius: 50px;"><i class="fa-solid fa-phone"></i>
                            </a> -->
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-10 mt-2">
                                <p class="card-text" style="font-family:Palatino;font-size:20px;">
                                    {{$profile->country->phonecode}}-{{$profile->phone}}</p>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="icon">
                                        <i class="fa-solid fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-10 mt-2">
                                    <p class="card-text" style="font-family:Palatino;font-size:20px;">
                                        {{$profile->address}}, {{$profile->city->name}}, {{$profile->country->name}}
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="icon">
                                        <i class="fa-solid fa-cake-candles"></i>
                                    </div>
                                </div>
                                <div class="col-md-10 mt-2">
                                    <p class="card-text" style="font-family:Palatino;font-size:20px;">
                                        {{$profile->dob}}
                                    </p>
                                </div>
                            </div>
                            @if($skills)
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3 style="font-family:Palatino;font-weight:bold;">Skills</h3>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($skills as $skill)
                                <div class="col-md-6 mt-1">
                                    <div class="pills">
                                        <p class="card-text" style="font-family:Palatino;">{{$skill}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            <!-- Experinece -->
                            @if($profile->experiences)
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3 style="font-family:Palatino;font-weight:bold;">Experience</h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="dotted-left">
                                        @foreach($profile->experiences as $experience)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="font-family:Palatino;font-weight:bold;">
                                                    {{$experience->position}}
                                                </h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p style="font-family:Palatino;">{{$experience->company}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p style="font-family:Palatino;">{{$experience->start_date}} -
                                                        @if($experience->end_date == null)
                                                        Present
                                                        @else
                                                        {{$experience->end_date}}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <!-- Education -->
                            @if($profile->educations)
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3 style="font-family:Palatino;font-weight:bold;">Education</h3>
                                </div>
                                <div class="col-md-12">

                                    @foreach($profile->educations as $education)
                                    <div class="dotted-left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="font-family:Palatino;font-weight:bold;">
                                                    {{$education->degree}}
                                                </h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p style="font-family:Palatino;">{{$education->school}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p style="font-family:Palatino;">{{$education->start_date}} -
                                                        @if($education->end_date == null)
                                                        Present
                                                        @else
                                                        {{$education->end_date}}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            @if($languages)
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3 style="font-family:Palatino;font-weight:bold;">Languages</h3>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($languages as $language)
                                <div class="col-md-6 mt-1">
                                    <div class="pills">
                                        <p class="card-text" style="font-family:Palatino;">{{$language}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @if($interests)
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3 style="font-family:Palatino;font-weight:bold;">Interests</h3>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($interests as $interest)
                                <div class="col-md-6 mt-1">
                                    <div class="pills">
                                        <p class="card-text" style="font-family:Palatino;">{{$interest}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row mt-5 mb-4">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <button id="openBtn">Save Contact</button>
                <div id="bottomSheet">
                    <div id="bottomSheetContent">
                        <h2>Bottom Sheet Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis libero sed malesuada
                            finibus. Donec euismod elit nec turpis blandit, vel feugiat mauris mollis.</p>
                        <button id="closeBtn">Close</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
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
    <link href="{{ asset('frontend\css\fontawesome\css\all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend\css\jquery.multiselect.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome-free/css/all.min.css') }}">
</body>
<script>
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const bottomSheet = document.getElementById('bottomSheet');

openBtn.addEventListener('click', () => {
    //animationcome from buttom
    bottomSheet.classList.add('bottom-sheet--open');
    bottomSheet.style.display = 'block';
    //blur all the body content exept the bottom sheet
    document.getElementById('content').style.filter = 'blur(5px)';
});

closeBtn.addEventListener('click', () => {
  bottomSheet.style.display = 'none';
  document.getElementById('content').style.filter = 'blur(0px)';
});
</script>
</html>