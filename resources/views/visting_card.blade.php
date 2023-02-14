@extends('layouts.admin')
@section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,300,800);
@import url(https://fonts.googleapis.com/css?family=Lato:300,700);

* {
    box-sizing: border-box;
}

html,
body {
    width: 100%;
    height: 100%;
}

body {
    background: whitesmoke;
    font-weight: 400;
    font-size: 1em;
    font-family: 'Raleway', Arial, sans-serif;
}

/* Container Card size */
.card_container,
figure {
    width: 450px;
    height: 270px;
}

/* Container card margin */
.card_container {
    position: block;
    perspective: 1000;
    margin-top: -300px;
    top: 50%;
}


figure {
    /* background: #2e5d5a; */
    color: #fff;
    /* color: black; */
    backface-visibility: hidden;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    text-align: center;
    /* cursor: pointer;
  transition: 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 1px 5px rgba(0,0,0,0.9); */
    border-radius: 15px;
    /*Border Radius*/
}

figure.front {
    z-index: 2;
}

/* Figure image */
figure img {
    position: relative;
    display: block;
    min-height: 100%;
    /* opacity: 10; */

}

figure .caption {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    text-transform: uppercase;
    padding: 2em;
    backface-visibility: hidden;
}

.front .caption {
    font-size: 1.25em;
}

.front .caption:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* content: ''; */
}


.front h2 {
    /* word-spacing: -0.15em; */
    font-weight: 300;
    font-size: 1em;
    position: absolute;
    top: 10%;
    left: 0;
    width: 100%;
    /* color: #272833; */
    color: #fff;

    text-align: left;
    margin-left: 19px;
}

.front h2 span {
    font-weight: bold;
}



.front p {
    letter-spacing: 5px;
    font-size: 68.5%;
    position: absolute;
    bottom: 10;
    left: 0;
    padding: 1.5em;
    width: 100%;
    opacity: 0;
    /* transform: translate3d(0,10px,0); */
    /* transition: opacity 0.35s, transform 0.35s; */
    text-align: left;

}


.front p {
    opacity: 1;
    /* transform: translate3d(0,0,0); */
}

.paragraph {
    letter-spacing: 5px;
    font-size: 68.5%;
    position: absolute;
    bottom: 130px;
    left: 0;
    padding: 1.5em;
    width: 100%;
    opacity: 0;
    /* transform: translate3d(0,10px,0); */
    /* transition: opacity 0.35s, transform 0.35s; */
    text-transform: uppercase;
    text-align: left;
    margin-left: 5px;
}

/* figure a{
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
} */
.qricon {
    /* background-color: var(--red); */
    border-radius: 10%;
    padding: 5px 5px 6px 5px;
    /* display: flex; */
    height: 130px;
    width: 130px;
    /* margin-left: 520px; */
    /* margin-right: auto; */
    /* margin-top: 95%; */
    /* margin-bottom: auto; */
    background: white;
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 70%;
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
    transform: rotateZ(-5deg) rotateX(5deg);
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
    width: 300px;
    height: 200px;
    box-sizing: border-box;
    margin-bottom: 20 auto;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 20px;
}

.upload-btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.btn {
    border: 2px solid gray;
    color: gray;
    background-color: white;
    padding: 8px 20px;
    border-radius: 8px;
    font-size: 20px;
    font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
}

@media (min-width: 450px) {
    .card_container {
        left: 50%;
        margin-left: -225px;
    }
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-8'>
                </div>
                <div class='col-md-4'>
                </div>
            </div>
    </section>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card_container" id="card">
                        <figure class="front">
                            <img src="{{asset('frontend/img/visting_imges/front.jpg')}}" id="back_image" alt="front"
                                style="width: 450px;height: 270px;" />
                            <div class="caption" id="text">
                                <h2 id="name_text">{{$card->name}}</h2>
                                <p>{{$card->designation}}</p>
                            </div>
                            @if($type == "work")
                            <p class="paragraph" id="company_text">{{$card->company}}</p>
                            @endif
                            <a href="{{route('view_profile', $card->id)}}">
                                <div class="qricon" id="qrcode">
                                </div>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="upload-btn-wrapper">
                            <button class="btn">Upload a Image</button>
                            <input type="file" name="image" id="image" class="form-control" style="margin-top: 20px;">
                            <span>Image Dimension: 1920 X 1080</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-4 mb-3">
                            <h5> <b>Text Color:</b></h5>
                        </div>
                        <div class="col-md-4 mt-3 mb-3">
                            <input type="color" id="text_color" name="text_color" value="#ffffff">
                        </div>
                        <div class="col-md-4 mt-2 mb-3">
                            <button class="btn btn-primary" id="save">Save Colors</button>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <button class="btn btn-primary" id="download">Download</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-4" style="margin-top:300px">
            <div class="col-md-12 ml-4 mt-2 mb-4">
                <h4 style="font-family:Palatino;font-weight:bold;">Background Images:</h4>
            </div>
            <div class="col-md-4">
                <input type="radio" name="background_image" id="background_image1" class="input-hidden"
                    value="{{asset('frontend/img/visting_imges/front.jpg')}}" checked>
                <label for="background_image1">
                    <img src="{{asset('frontend/img/visting_imges/front.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="background_image" id="background_image2" class="input-hidden"
                    value="{{asset('frontend/img/visting_imges/1.jpg')}}">
                <label for="background_image2">
                    <img src="{{asset('frontend/img/visting_imges/1.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="background_image" id="background_image3" class="input-hidden"
                    value="{{asset('frontend/img/visting_imges/2.png')}}">
                <label for="background_image3">
                    <img src="{{asset('frontend/img/visting_imges/2.png')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="background_image" id="background_image4" class="input-hidden"
                    value="{{asset('frontend/img/visting_imges/3.jpg')}}">
                <label for="background_image4">
                    <img src="{{asset('frontend/img/visting_imges/3.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="background_image" id="background_image5" class="input-hidden"
                    value="{{asset('frontend/img/visting_imges/4.jpg')}}">
                <label for="background_image5">
                    <img src="{{asset('frontend/img/visting_imges/4.jpg')}}" alt="" class="back_image_temp">
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="background_image" id="background_image6" class="input-hidden"
                    value="{{asset('frontend/img/visting_imges/5.jpg')}}">
                <label for="background_image6">
                    <img src="{{asset('frontend/img/visting_imges/5.jpg')}}" alt="" class="back_image_temp">
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
var background_image = document.getElementsByName("background_image");
for (var i = 0; i < background_image.length; i++) {
    background_image[i].addEventListener("change", function() {
        var background_image = document.querySelector('input[name="background_image"]:checked').value;
        document.getElementById("back_image").src = background_image;
    });
}
var image = document.getElementById("image");
image.addEventListener("change", function() {
    var image = document.getElementById("image").files[0];
    var reader = new FileReader();
    reader.onload = function() {
        document.getElementById("back_image").src = reader.result;
    }
    reader.readAsDataURL(image);
});

$('#download').click(function() {
    var node = document.getElementById('card');
    domtoimage.toPng(node)
        .then(function(dataUrl) {
            var link = document.createElement('a');
            link.download = 'Your_vCard.png';
            link.href = dataUrl;
            link.click();
        });
});
//change text color of the card
var text_color = document.getElementById("text_color");
$('#save').click(function() {
    text_color = document.getElementById("text_color").value;
    document.getElementById("text").style.color = text_color;
    document.getElementById("name_text").style.color = text_color;
    document.getElementById("company_text").style.color = text_color;
    console.log(text_color);
});
</script>
@endsection