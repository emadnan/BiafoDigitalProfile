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
            /* font-size: 1em; */
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
            /* margin-bottom: -900px; */
            /* top: 100%; */

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
            top: 72px;
            left: -40px;
            width: 100%;
            height: 100%;
            /* text-transform: uppercase; */
            padding: 2.5em;


        }

        .caption {
            text-align: center;
        }

        /* .front .caption {
                                                            font-size: 1.25em;
                                                        } */

        /* .front .caption:before {
                                                            position: absolute;
                                                            top: 0;
                                                            left: 0;
                                                            width: 100%;
                                                            height: 100%;
                                                           
                                                        } */


        .front h2 {
            /* word-spacing: -0.15em; */
            /* font-weight: 300; */
            font-size: 1.3em;
            position: absolute;
            top: -17%;
            left: 60px;
            width: 100%;
            /* color: #272833; */
            color: #fff;
            /* right: -65% */
            text-transform: uppercase;
            text-align: left;
            word-wrap: break-word;
            white-space: pre-wrap;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }



        .front h2 span {
            font-weight: bold;
        }

        .designation {
            letter-spacing: 1px;
            /* font-size: 0.7em; */
            font-size: 68.5%;
            /* position: absolute; */
            position: relative;
            bottom: 10;
            /* left: 20px; */
            /* padding: 1.5em; */
            width: 100%;
            opacity: 0;
            /* transform: translate3d(0,10px,0); */
            /* transition: opacity 0.35s, transform 0.35s; */
            /* top: 8px; */
            text-align: left;
            opacity: 1;
            /* word-wrap: break-word;
                                                            white-space: pre-wrap; */
            margin-left: 21px;

        }

        .paragraph {
            letter-spacing: 1px;
            font-size: 68.5%;
            position: absolute;
            bottom: 177px;
            /* left: 20px; */
            /* padding: 1.5em; */
            width: 100%;
            /* opacity: 0; */
            /* transform: translate3d(0,10px,0); */
            /* transition: opacity 0.35s, transform 0.35s; */
            /* text-transform: uppercase; */
            text-align: left;
            margin-left: 21px;
        }

        .phone {
            letter-spacing: 1px;
            font-size: 68.5%;
            position: absolute;
            bottom: 158px;
            /* left: 20px; */
            /* padding: 1.5em; */
            width: 100%;
            /* opacity: 0; */
            /* transform: translate3d(0,10px,0); */
            /* transition: opacity 0.35s, transform 0.35s; */
            text-transform: uppercase;
            text-align: left;
            margin-left: 21px;
        }

        .email {
            letter-spacing: 1px;
            font-size: 68.5%;
            position: absolute;
            bottom: 138px;
            /* left: 20px; */
            /* padding: 1.5em; */
            width: 100%;
            /* opacity: 0; */
            /* transform: translate3d(0,10px,0); */
            /* transition: opacity 0.35s, transform 0.35s; */
            /* text-transform: uppercase; */
            text-align: left;
            margin-left: 21px;
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
            margin-left: 311px;
            /* margin-right: auto; */
            /* margin-top: 95%; */
            /* margin-bottom: auto; */
            background: white;
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 1%;
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

        /* Radio Color */
        input[name="color"] {
            display: none;
        }

        .button {
            display: inline-block;
            position: relative;
            width: 50px;
            height: 50px;
            margin: 10px;
            cursor: pointer;
        }

        .button span {
            display: block;
            position: absolute;
            width: 50px;
            height: 50px;
            padding: 0;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            border-radius: 100%;
            background: #eeeeee;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
            transition: ease .3s;
        }

        .orange .button span {
            background: #FF5722;
        }

        .amber .button span {
            background: #FFC107;
        }

        .lime .button span {
            background: #8BC34A;
        }

        .teal .button span {
            background: #009688;
        }

        .blue .button span {
            background: #2196F3;
        }

        .indigo .button span {
            background: #3F51B5;
        }

        .black .button span {
            background: black;
        }

        .white .button span {
            background: white;
        }

        .layer {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: transparent;
            /*transition: ease .3s;*/
            z-index: -1;
        }

        .primary_color {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            border: 1px solid #ccc;
            outline: none;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
            -webkit-appearance: none;
        }

        .primary_color::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        .primary_color::-webkit-color-swatch {
            border: none;
            border-radius: 50%;
        }

        .colorPickSelector {
            /* border-radius: 5px; */
            width: 36px;
            height: 10px;
            cursor: pointer;
            -webkit-transition: all linear .2s;
            -moz-transition: all linear .2s;
            -ms-transition: all linear .2s;
            -o-transition: all linear .2s;
            transition: all linear .2s;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
            margin-right: 12px;
            /* margin-top: -2px; */
        }

        .selector {
            /* border-radius: 5px; */
            width: 70px;
            height: 20px;
            cursor: pointer;
            -webkit-transition: all linear .2s;
            -moz-transition: all linear .2s;
            -ms-transition: all linear .2s;
            -o-transition: all linear .2s;
            transition: all linear .2s;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
            margin-right: 20px;
            margin-top: -2px;
        }

        .colorPickSelector2 {
            /* border-radius: 5px;
                                                          width: 36px;
                                                          height: 36px;
                                                          cursor: pointer; */
            -webkit-transition: all linear .2s;
            -moz-transition: all linear .2s;
            -ms-transition: all linear .2s;
            -o-transition: all linear .2s;
            transition: all linear .2s;
            /* border: 1px solid black; */
            width: 60px;
            height: 45px;
            align-items: center;
            justify-content: center;
            display: flex;
            text-align: center;
            /* box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1); */
            /* colored Underline */
        }

        /* .colorPickSelector:hover {
                                                            transform: scale(1.1);
                                                        } */
    </style>
    <div class="content-wrapper">
        <input type="hidden" id="company_id" value="{{ empty($company) ? 'none' : $company->id }}">
        <section class="content-header">
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-8'>
                    </div>
                    <div class='col-md-4'>
                        <button class="btn btn-primary float-right" id="download">Download</button>
                    </div>
                </div>
        </section>
        <div class="container-fluid">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card_container" id="card">
                            <figure class="front">
                                <img src="{{ asset('frontend/img/visting_imges/front.jpg') }}" id="back_image"
                                    alt="front" style="width: 450px;height: 270px;" />
                                <div class="caption" id="text">
                                    <h2 class="drag user_name_font" id="name_text"><b>{{ $card->name }}</b></h2>

                                    @if ($card->designation)
                                        <p class='designation drag user_designation_size'><i
                                                class="fa-solid fa-briefcase"></i>&nbsp;|&nbsp;<b>{{ $card->designation }}</b>
                                        </p>
                                    @endif

                                    @if ($card->company)
                                        @if ($type == 'work')
                                            <p class="paragraph drag company_name_size" id="company_text"><i
                                                    class="fa-solid fa-building"></i>&nbsp;|&nbsp;<b>{{ $card->company }}</b>
                                            </p>
                                        @endif
                                    @endif
                                    <!-- <p class="paragraph" id="company_address"><i class="fa-solid fa-building"></i>&nbsp;|&nbsp;{{ $card->company }}</p> -->
                                    <p class="phone drag user_phone_size" id="company_phone"><i
                                            class="fa-solid fa-square-phone-flip "></i>&nbsp;|&nbsp;<b>{{ $card->phone }}</b>
                                    </p>
                                    <p class="email drag user_email_size" id="company_email"><i
                                            class="fa-solid fa-envelope"></i>&nbsp;|&nbsp;<b>{{ $card->email }}</b></p>
                                </div>
                                <div class="qricon drag" id="qrcode">
                                </div>
                            </figure>
                        </div>
                        <h6 class="mt-3">*Drag to Change Position</h6>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="upload-btn-wrapper">
                                <button class="btn">Upload a Image</button>
                                <input type="file" name="image" id="image" class="form-control"
                                    style="margin-top: 20px;">
                                <span>Image Dimension: 1920 X 1080</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mt-5 mb-3">
                                <div class="colorPickSelector2">
                                    <h3><i class="fa-solid fa-font">
                                            <span>
                                                <i style="font-size:11px" class="fa-solid fa-caret-down drop_picker"></i>
                                                <div class="colorPickSelector" id="line" style="background:black;">
                                                </div>
                                            </span>
                                        </i>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mb-3">

                            </div>
                        </div>
                        <h5>Adjust Font Sizes</h5>
                        <div class="row text-center d-flex-justify-content-center">

                            <div class="col-md-2 mt-3 mb-3">
                                <h1><i class="fa-solid fa-user user_name_font">
                                        <span>
                                            <select id="font-size-dropdown" style="font-size:11px;">
                                                <option value="1">Small</option>
                                                <option value="2">Meduim</option>
                                                <option value="3">Large</option>
                                                <option value="default" selected>Default</option>

                                            </select>
                                        </span>
                                    </i>
                                </h1>
                            </div>
                            <div class="col-md-2 mt-3 mb-3">
                                <h1><i class="fa-solid fa-briefcase user_designation_size">
                                        <span>
                                            <select id="designation_size" style="font-size:11px;">
                                                <option value="1">Small</option>
                                                <option value="2">Meduim</option>
                                                <option value="3">Large</option>
                                                <option value="default" selected>Default</option>
                                            </select>
                                        </span>
                                    </i>
                                </h1>
                            </div>
                            <div class="col-md-2 mt-3 mb-3">
                                <h1><i class="fa-solid fa-building company_name_size">
                                        <span>
                                            <select id="company_size" style="font-size:11px;">
                                                <option value="1">Small</option>
                                                <option value="2">Meduim</option>
                                                <option value="3">Large</option>
                                                <option value="default" selected>Default</option>
                                            </select>
                                        </span>
                                    </i>
                                </h1>
                            </div>
                            <div class="col-md-2 mt-3 mb-3">
                                <h1><i class="fa-solid fa-square-phone-flip user_phone_size">
                                        <span>
                                            <select id="phone_size" style="font-size:11px;">
                                                <option value="1">Small</option>
                                                <option value="2">Meduim</option>
                                                <option value="3">Large</option>
                                                <option value="default" selected>Default</option>
                                            </select>
                                        </span>
                                    </i>
                                </h1>
                            </div>
                            <div class="col-md-2 mt-3 mb-3">
                                <h1><i class="fa-solid fa-envelope user_email_size">
                                        <span>
                                            <select id="email_size" style="font-size:11px;">
                                                <option value="1">Small</option>
                                                <option value="2">Meduim</option>
                                                <option value="3">Large</option>
                                                <option value="default" selected>Default</option>
                                            </select>
                                        </span>
                                    </i>
                                </h1>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="row">
                                                                                <div class="col-md-4 mt-5 mb-3">
                                                                                    <h3> <b>Color Picker:</b></h3>
                                                                                </div>
                                                                                <div class="col-md-2 mt-5 mb-3">
                                                                                    <input type="color" id="text_color" class="primary_color"name="text_color" value="#ffffff">
                                                                                </div>
                                                                                <div class="col-md-4 mt-5 mb-3">
                                                                                    <button class="btn btn-primary" id="save">Save Colors</button>
                                                                                </div>
                                                                            </div> -->
                    <div class="col-md-6 mt-5">

                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-4" style="margin-top:100px">
            @if (auth()->user()->user_type != 'company_user')
                <div class="col-md-12 ml-4 mt-2 mb-4">
                    <h4 style="font-family:Palatino;font-weight:bold;">Background Images:</h4>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image1" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/front.jpg') }}" checked>
                    <label for="background_image1">
                        <img src="{{ asset('frontend/img/visting_imges/front.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image2" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/1.jpg') }}">
                    <label for="background_image2">
                        <img src="{{ asset('frontend/img/visting_imges/1.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image3" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/2.png') }}">
                    <label for="background_image3">
                        <img src="{{ asset('frontend/img/visting_imges/2.png') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image4" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/3.jpg') }}">
                    <label for="background_image4">
                        <img src="{{ asset('frontend/img/visting_imges/3.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image5" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/4.jpg') }}">
                    <label for="background_image5">
                        <img src="{{ asset('frontend/img/visting_imges/4.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image6" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/5.jpg') }}">
                    <label for="background_image6">
                        <img src="{{ asset('frontend/img/visting_imges/5.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
            @endif
        </div>
        @if ($visting_card_backgrounds)
            <div class="row ml-4">
                <div class="col-md-12 ml-4 mt-2 mb-4">
                    <h4 style="font-family:Palatino;font-weight:bold;">Company's Background Images:</h4>
                </div>
                @foreach ($visting_card_backgrounds as $image)
                    <div class="col-md-4">
                        <input type="radio" name="background_image" id="background_image{{ $image->id }}C"
                            class="input-hidden" value="{{ asset('visting_card_images') }}/{{ $image->image }}">
                        <label for="background_image{{ $image->id }}C">
                            <img src="{{ asset('visting_card_images') }}/{{ $image->image }}" alt=""
                                class="back_image_temp">
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection
@section('scripts')
    <script>
        $('.drag').dragmove();
        $(".drop_picker").colorPick({
            'initialColor': 'black',
            'allowRecent': true,
            'recentMax': 5,
            'allowCustomColor': false,
            'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad",
                "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b",
                "#ecf0f1",
                "#bdc3c7", "#95a5a6", "#7f8c8d", "white",
                "#ff0000", "#00ff00", "#0000ff", "#ffff00", "#00ffff", "#ff00ff", "black"
            ],
            'onColorSelected': function() {
                // this.element.css({
                //     'backgroundColor': this.color,
                //     'color': this.color
                // });
                var text_color = this.color;
                document.getElementById("line").style.background = this.color;
                document.getElementById("text").style.color = text_color;
                document.getElementById("name_text").style.color = text_color;
                if (document.getElementById("company_text")) {
                    document.getElementById("company_text").style.color = text_color;
                }
            }
        });
        var company_id = document.getElementById("company_id").value;
        if (company_id != 'none') {
            var qrCode = new QRCodeStyling({
                width: 120,
                height: 120,
                type: "canvas",
                data: "{{ route('view_profile', $card->username) }}",
                image: "{{ asset('company_logos') }}/{{ empty($company) ? 'default.png' : $company->logo }}",
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
        } else {
            var qrCode = new QRCodeStyling({
                width: 120,
                height: 120,
                type: "canvas",
                data: "{{ route('view_profile', $card->username) }}",
                image: "{{ asset('frontend/img/qr_logo.svg') }}",
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
        }

        qrCode.append(document.getElementById("qrcode"));
        var background_image = document.getElementsByName("background_image");
        for (var i = 0; i < background_image.length; i++) {
            background_image[i].addEventListener("change", function() {
                var background_image = document.querySelector('input[name="background_image"]:checked').value;
                document.getElementById("back_image").src = background_image;
            });
        }
        var color = document.getElementsByName("color");
        for (var i = 0; i < color.length; i++) {
            color[i].addEventListener("change", function() {
                var text_color = document.querySelector('input[name="color"]:checked').value;
                document.getElementById("text").style.color = text_color;
                document.getElementById("name_text").style.color = text_color;
                var company_text = document.getElementById("company_text");
                if (company_text != null) {
                    document.getElementById("company_text").style.color = text_color;
                }
            });
        }
        var image = document.getElementById("image");
        image.addEventListener("change", function() {
            var image = document.getElementById("image").files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById("back_image").src = reader.result;
                base64 = reader.result;
                //send base64 to server
                var company_id = document.getElementById("company_id").value;
                if (company_id) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('save_visting_card_backgrounds') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "image": base64,
                        },
                        success: function(data) {
                            console.log(data);
                        }
                    });
                }
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


        // Select the dropdowns
        const fontSizeDropdown = document.getElementById("font-size-dropdown");
        const designationSizeDropdown = document.getElementById("designation_size");
        const companySizeDropdown = document.getElementById("company_size");
        const phoneSizeDropdown = document.getElementById("phone_size");
        const emailSizeDropdown = document.getElementById("email_size");

        // Select the elements whose font size needs to be changed
        const userName = document.querySelector(".user_name_font");
        const userDesignation = document.querySelector(".user_designation_size");
        const userCompany = document.querySelector(".company_name_size");
        const userPhone = document.querySelector(".user_phone_size");
        const userEmail = document.querySelector(".user_email_size");

        // Add event listeners to the dropdowns
        fontSizeDropdown.addEventListener("change", (event) => {
            const value = event.target.value;
            if (value === "default") {
                userName.style.fontSize = "20.8px";
            } else {
                userName.style.fontSize = getFontSize(value);
            }
        });


        designationSizeDropdown.addEventListener("change", (event) => {
            const value = event.target.value;
            if (value === "default") {
                userDesignation.style.fontSize = "10.96px";
            } else {
                userDesignation.style.fontSize = getFontSize(value);
            }
        });


        companySizeDropdown.addEventListener("change", (event) => {
            const value = event.target.value;
            if (value === "default") {
                userCompany.style.fontSize = "10.96px";
            } else {
                userCompany.style.fontSize = getFontSize(value);
            }
        });


        phoneSizeDropdown.addEventListener("change", (event) => {
            const value = event.target.value;
            if (value === "default") {
                userPhone.style.fontSize = "10.96px";
            } else {
                userPhone.style.fontSize = getFontSize(value);
            }
        });



        emailSizeDropdown.addEventListener("change", (event) => {
            const value = event.target.value;
            if (value === "default") {
                userEmail.style.fontSize = "10.96px";
            } else {
                userEmail.style.fontSize = getFontSize(value);
            }
        });


        // end code

        // Helper function to get the font size value based on the dropdown option
        function getFontSize(optionValue) {
            switch (optionValue) {
                case "1":
                    return "16px"; // small
                case "2":
                    return "20px"; // medium
                case "3":
                    return "24px"; // large
                    // default:
                    //     return "20.8px"; // default to small
            }
        }
    </script>
@endsection
