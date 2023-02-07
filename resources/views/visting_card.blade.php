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
    top:50%;
    left: 70%;
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
                    <div class="card_container">
                        <figure class="front">
                            <img src="{{asset('frontend/img/visting_imges/front.jpg')}}" alt="front" />
                            <div class="caption">
                                <h2>Sultan <span>Zubair</span></h2>
                                <p>web developer</p>
                            </div>
                            <p class="paragraph">BiafoTech</p>
                            <div class="qricon" id="qrcode">
                        </div>
                        </figure>
                    </div>
                </div>
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
        imageSize: 0.7,
    },
    qrOptions: {
        errorCorrectionLevel: "H",
    },
});

qrCode.append(document.getElementById("qrcode"));
</script>
@endsection