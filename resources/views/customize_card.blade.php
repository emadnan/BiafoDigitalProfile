@extends('layouts.admin')
@section('content')
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");

* {
    --dark: #393939;
    --red: #d12229;
}

body {
    margin: 0;
    font-family: Roboto, Arial, Helvetica, sans-serif;
    position: relative;
}
.name_and_designation{
    text-align: center;
    margin-top: 60px;
    font-weight: 900;
}
.input-hidden {
    /* For Hiding Radio Button Circles */
    position: absolute;
    left: -9999px;
}

input[type="radio"]:checked+label>img {
    border: 1px solid #d12229;
    box-shadow: 0 0 3px 3px #d12229;
}

input[type="radio"]+label>img {
    border: 1px rgb(0, 0, 0);
    padding: 10px;

    transition: 500ms all;
}

input[type="radio"]:checked+label>img {
    transform: rotateZ(-10deg) rotateX(10deg);
}

.back_image {
    width: 100%;
    box-sizing: border-box;
    height: 330px;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 20px;
    border-bottom-left-radius: 0px 0px;
    border-bottom-right-radius: 0px 0px;
}

.back_image_temp {
    width: 80%;
    box-sizing: border-box;
    height: 300px;
    margin-bottom: 20 auto;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 20px;
}

.profile_img {
    height: 120px;
    width: 120px;
    border-radius: 25%
}

.credit {
    position: absolute;
    top: 15px;
    right: 10px;
    border-radius: 10px;
    padding: 10px;
    background-color: rgb(248, 92, 113);
    cursor: pointer;
    z-index: 2;
    overflow: hidden;
}

.btn-yellow {
    background-color: #ff9d00;
    border-radius: 10px;
    padding: 10px;
    /* width: 200px; */
    text-align: center;
    font-weight: bold;
}

.btn-danger {
    background-color: #d12229;
    border-radius: 10px;
    padding: 10px;
    /* width: 100px; */
    text-align: center;
    font-weight: bold;
}

.credit a {
    text-decoration: none;
    color: #eee;
    padding: 10px;
}

.qr_anchor:hover {
    color: #d12229;
}

.credit:after {
    box-sizing: border-box;
    content: "";
    border: 8px solid;
    border-color: transparent transparent transparent #eee;
    width: 8px;
    height: 8px;
    position: absolute;
    right: 1px;
    top: 50%;
    transform: translateY(-50%);
    transition: all 0.5s;
}

.credit:hover::after {
    right: -4px;
}

.test {
    background-color: #1769ff;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: -100%;
    transition: .5s ease-in-out;
    z-index: -1;
}

.credit:hover .test {
    left: 0;
}

/* page backgroung color white */
.business2 {
    /* display: flex; */
    border-radius: 25%;
    /* align-items: center; */
    /* min-height: 100vh; */
    justify-content: left;
    /* margin-left: 70px; */
    /* background-color: #fdfdff; */
}

wantradius {
    border-radius: 25%;
}

/* set the postion and margin front and back side cards */
.business2 .front,
.business2 .back {
    background-color: var(--dark);
    width: 300px;
    height: 550px;
    margin: 20px;
    border-radius: 25px;
    overflow: hidden;
    /* position: relative; */
    color: white;

}

.business2 svg {
    width: 95px;
}

.business2 h1,
.business2 h2,
.business2 i,
.business2 p {
    margin: 0;
    /* color: #eee; */
}

.business2 .red {
    height: 35%;
    background-color: var(--red);
}

.business2 .head {
    display: flex;
    justify-content: center;
    border-radius: 25px;
    padding: 25px 0;
}

.business2 .head img {
    width: 40px;
    border-radius: 25px;
}

.business2 .head>div {
    text-align: center;
    margin: 0 10px;
    text-transform: uppercase;
}

.business2 .head>div p {
    font-size: 0.8rem;
    font-weight: 600;
}

/* round shapped avatar postion */
.business2 .avatar {
    position: absolute;
    width: 50%;
    left: 50%;
    top: 100px;
    transform: translate(-50%);
    text-align: center;
}

/* Round shapped avatar layout */
.business2 .img {
    /* background-color: #bfc2c7; */
    /* padding: 15px; */
    box-sizing: border-box;
    border-radius: 25%;
    border: 5px solid var(--dark);
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.business2 .img img {
    width: 80%;
    padding: 10px 0;
}

.business2 .avatar p:nth-of-type(1) {
    text-transform: uppercase;
    font-weight: 900;
}

.business2 .infos {
    /* position: absolute;
    bottom: 5%;
    left: 5%; */
    margin:10px

}

.business2 .infos>div {
    display: flex;
    /* margin: 5px;s */
    align-items: center;
}

/* icon background color, pading and radius */
.business2 .infos>div i {
    width: 25px;
    /* height: 25px; */
    /* margin-right: 10px; */
    /* background-color: var(--red); */
    /* background-color: antiquewhite; */
    padding: 5px;
    border-radius: 100px;
}

/* ICON font size, margin and font weight */
.business2 .infos>div p {
    font-size: 0.8rem;
    margin: 4px 0;
    font-weight: 500;
}

/* back  side picture fetch from URL and pic postion*/
.business2 .back .top {
    width: 100%;
    box-sizing: border-box;
    height: 65%;
    /* background: url("https://raw.githubusercontent.com/MohcineDev/Business-Card/main/imgs/e.webp") center; */
    /* background: url({{asset('frontend/img/card_img/backgournd3.jpg')}}) center; */
    background-size: cover;
    background-repeat: no-repeat;
    filter: contrast(160%);
    position: relative;
}

/* back side picture color shade red */
.business2 .back .top::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 10;
    /* background: linear-gradient(rgba(71, 11, 11, 0.8), rgba(240, 8, 8, 0.5)); */
    /* backgroud linear-gradient withot rgba */
    /* background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)); */
}

.business2 .back .top {
    position: relative;
}

.business2 .back .top div img {
    width: 40px;
    margin: 10px;
}

.business2 .back .top div {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    top: 40%;
    left: 19%;
    z-index: 11;
    filter: contrast(80%);
    text-transform: uppercase;
}

/* .qricon {
    background-color: var(--dark);
    border-radius: 50%;
    width: 70%;
    padding: 15px 0;
    position: absolute;
    top: calc(70% - 40px);
    left: 15%;
    display: flex;
    align-items: center;
    justify-content: center;
} */

.qricon div {
    /* background-color: var(--red); */
    border-radius: 10%;
    padding: 08px 10px 12px 10px;


    display: block;
    height: 137px;
    width: 139px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    /* margin-bottom: auto; */
    background: white;
}

.margin-top-10 {
    margin-top: 10%;
}

/* .business2 .back>p {
    text-align: center;
    margin-top: 35%;
    font-weight: 10%;
    color: var(--red); 
}*/

/* .back_image{

width: 100%;
box-sizing: border-box;
height: 500px;
background-size: cover;
background-repeat: no-repeat;
position: relative;
border-radius: 20px;
z-index: -1;
} */
@media screen and (max-width: 600px) {
    .business2 .front .back .top div body {
        max-width: 100%;
    }
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class='container-fluid'>
            <div class='row'>
            <div class='col-md-7'>
                <a class="btn btn-primary" id="download"><i class="fa-solid fa-download"></i> Download</a>
                </div>
                <div class='col-md-5'>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mt-1">
                                <h6 style="font-family:Palatino;font-weight:bold;">Upper Color:</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="color" id="upper_color_picker" name="upper_color_picker" value="#d12229">
                            </div>
                            <div class="col-md-6 mt-1">
                                <h6 style="font-family:Palatino;font-weight:bold;">Buttom Color:</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="color" id="buttom_color_picker" name="buttom_color_picker" value="#393939">
                            </div>
                            <div class="col-md-6 mt-1">
                                <h6 style="font-family:Palatino;font-weight:bold;">Back Color:</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="color" id="main_back_color_picker" name="main_back_color_picker"
                                    value="#393939">
                            </div>
                            <div class="col-md-6 mt-1">
                                <h6 style="font-family:Palatino;font-weight:bold;">Text Color:</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="color" id="text_color_picker" name="text_color_picker" value="#ffffff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <button class="btn btn-primary" id="check_color">Save Changes</button>
                            </div>
                            <div class="col-md-6 mt-3">
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
    </section>
    <div class="container-fluid">
        <div class="row" id="download_able">
            
                <div class="business2 mt-5 wantradius">
                    <div class="col-md-6">
                    <div class="front float-right" id="buttom_color">
                        <div class="red" id="upper_color">
                            <div class="head">
                                <div>
                                    @if($type=="work")
                                    <h2>{{$card->company}}</h2>
                                    @endif

                                    <!-- <p>Tagline goes here</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="avatar">
                            <div>
                                <img src="{{asset('card_images')}}/{{$card->image_path}}" class="profile_img" alt="" />
                            </div>
                        </div>
                        <div class="name_and_designation text-center">
                            <div>
                                <p>{{$card->name}}</p>
                                @if($type=="work")
                                <p>{{$card->designation}}</p>
                                @endif
                            </div>
                        </div>

                        <!-- Info code start from here -->

                        <div class="infos">
                            <!-- Logo for email -->
                            <div>
                                <i class="fa-solid fa-envelope"></i>
                                <div class="ml-2">
                                    <p>{{$card->email}}</p>
                                </div>
                            </div>
                            <!-- Logo for phone Number -->
                            <div>
                                <i class="fa-solid fa-phone"></i>
                                <div class="ml-2">
                                    <p>{{$card->phone}}</p>
                                </div>
                            </div>
                            @if($type=="work")
                            <!-- Logo for website -->
                            <div>
                                <i class="fa-solid fa-globe"></i>
                                <div class="ml-2">
                                    <p>{{$card->website}}</p>
                                </div>
                            </div>
                            <!-- Logo for website -->
                            <div>
                                <i class="fa-brands fa-linkedin"></i>
                                <div class="ml-2">
                                    <p>{{$card->linkedin}}</p>
                                </div>
                            </div>
                            @endif
                            <div>
                                <!-- Logo of current location -->
                                <i class="fa-solid fa-map-marker-alt"></i>
                                <div class="ml-2">
                                    <p>{{$card->address}}</p>
                                    <!-- <p>LAHORE</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <!-- Back side of the card -->

                    <div class="back" id="main_back_color">


                        <div class="top">
                            <img src="{{asset('frontend/img/dubai_burjkhalifa.jpg')}}" id="back_image" alt=""
                                class="back_image">
                        </div>
                        <div class="qricon">
                            <a class="qr_anchor" href="/view_profile/{{$card->id}}">
                                <div id="qrcode">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row ml-4">
            <div class="col-md-12 mt-2  ml-4">
                <h4 style="font-family:Palatino;font-weight:bold;">Background Images:</h4>
            </div>
            <div class="col-md-2">
                <input type="radio" name="background_image" id="background_image1" class="input-hidden"
                    value="{{asset('frontend/img/dubai_burjkhalifa.jpg')}}" checked>
                    <label for="background_image1">
                <img src="{{asset('frontend/img/dubai_burjkhalifa.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-2">
                <input type="radio" name="background_image" id="background_image2" class="input-hidden"
                    value="{{asset('frontend/img/backgroud_one.jpg')}}">
                    <label for="background_image2">
                <img src="{{asset('frontend/img/backgroud_one.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-2">
                <input type="radio" name="background_image" id="background_image3" class="input-hidden"
                    value="{{asset('frontend/img/backgroud_three.jpg')}}">
                    <label for="background_image3">
                <img src="{{asset('frontend/img/backgroud_three.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-2">
                <input type="radio" name="background_image" id="background_image4" class="input-hidden"
                    value="{{asset('frontend/img/backgroud_four.jpg')}}">
                    <label for="background_image4">
                <img src="{{asset('frontend/img/backgroud_four.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-2">
                <input type="radio" name="background_image" id="background_image5" class="input-hidden"
                    value="{{asset('frontend/img/backgroud_five.jpg')}}">
                    <label for="background_image5">
                <img src="{{asset('frontend/img/backgroud_five.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-2">
                <input type="radio" name="background_image" id="background_image6" class="input-hidden"
                    value="{{asset('frontend/img/background_six.jpg')}}">
                    <label for="background_image6">
                <img src="{{asset('frontend/img/background_six.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
const qrCode = new QRCodeStyling({
    width: 120,
    height: 120,
    type: "canvas",
    data: "{{route('view_profile', $card->id)}}",
    image: "{{asset('frontend/img/qr_logo.svg')}}",
    dotsOptions: {
        color: "black",
        type: "classy-rounded"
    },
    backgroundOptions: {
        color: "#ffffff",
    },
    imageOptions: {
        crossOrigin: "anonymous",
        margin: 0,
        imageSize: 0.4,
    },
    qrOptions: {
        errorCorrectionLevel: "H",
    },
});

qrCode.append(document.getElementById("qrcode"));

var upper_color_picker = document.getElementById("upper_color_picker").value;
var buttom_color_picker = document.getElementById("buttom_color_picker").value;
var main_back_color_picker = document.getElementById("main_back_color_picker").value;
var text_color_picker = document.getElementById("text_color_picker").value;
var check_color = document.getElementById("check_color");
check_color.addEventListener("click", function() {
    upper_color_picker = document.getElementById("upper_color_picker").value;
    buttom_color_picker = document.getElementById("buttom_color_picker").value;
    main_back_color_picker = document.getElementById("main_back_color_picker").value;
    text_color_picker = document.getElementById("text_color_picker").value;
    document.getElementById("upper_color").style.background = upper_color_picker;
    document.getElementById("buttom_color").style.background = buttom_color_picker;
    document.getElementById("main_back_color").style.background = main_back_color_picker;
    //change text color
    document.getElementById("upper_color").style.color = text_color_picker;
    document.getElementById("buttom_color").style.color = text_color_picker;
    //back image change
    // var background_image = document.querySelector('input[name="background_image"]:checked').value;
    // document.getElementById("back_image").src = background_image;
    //console.log(test);

});
//download download-able
$(document).ready(function() {
    // var element = $("#download_able");
    $("#download").on('click', function() {
        // qrCode.download({name: "my-qr-code.png"});
        // html2canvas(element, {
        //     onrendered: function(canvas) {
        //         var imgData = canvas.toDataURL("image/png");
        //         var newData = imgData.replace(/^data:image\/png/,
        //             "data:application/octet-stream");
        //         $("#download").attr("download", "your_image.png").attr("href", newData)
        //     }
        var node = document.getElementById('download_able');
        domtoimage.toPng(node)
          .then(function(dataUrl) {
            var link = document.createElement('a');
            link.download = 'Your_vCard.png';
            link.href = dataUrl;
            link.click();
      });
        });
    });
//on radio button change image
var background_image = document.getElementsByName("background_image");
for (var i = 0; i < background_image.length; i++) {
    background_image[i].addEventListener("change", function() {
        var background_image = document.querySelector('input[name="background_image"]:checked').value;
        document.getElementById("back_image").src = background_image;
    });
}
</script>
@endsection