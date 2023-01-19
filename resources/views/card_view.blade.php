@extends('layouts.admin')
@section('content')
<link href="{{asset('frontend/css/card_styles.css')}}" rel="stylesheet" />
<div class="content-wrapper">
    <section class="content-header">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="business2 mt-5">
            <div class="front">
                <div class="red">
                    <div class="head">
                        <div>
                            <h2>{{$card->company}}</h2>
                            <!-- <p>Tagline goes here</p> -->
                        </div>
                    </div>
                </div>
                <div class="avatar">
                    <div>
                        <img src="{{asset('card_images')}}/{{$card->image_path}}" alt=""
                            style="height: 120px; width: 120px; border-radius: 25%" />
                    </div>
                    <p class="mt-2">{{$card->name}}</p>
                    <p>{{$card->designation}}</p>
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


            <!-- Back side of the card -->

            <div class="back">
                <div class="top">
                </div>
                <div class="qricon">
                <a class="qr_anchor" href="https://www.google.com">
                    <div id="qrcode">
                    </div>
</a>
                </div>
            </div>
            <!-- kdjaskd -->
        </div>
        <div class="row mt-3">
          <div class="col-md-4"></div>
          <div class="col-md-4 d-flex justify-content-center">
          <a href="#" class="btn btn-yellow"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
          
          <a href="#" class="btn btn-danger ml-4"><i class="fa-solid fa-trash-can"></i> Delete</a>
          </div>
          <div class="col-md-4"></div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
var qrcode = new QRCode("qrcode", {
    text: "www.google.com",
    width: 80,
    height: 80,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H,
});
</script>
@endsection