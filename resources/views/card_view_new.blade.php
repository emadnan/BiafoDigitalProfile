@extends('layouts.admin')
@section('content')
    @php
        $permissions = session()->get('permissions');
        if ($use_username == 1) {
            $url = $card->username;
        } else {
            $url = $card->id;
        }
    @endphp
    <style>
        tml {
            scroll-behavior: smooth;
        }

        .float {
            position: fixed;
            width: 90px;
            height: 90px;
            bottom: 40px;
            right: 40px;
            background-color: #E5F2FF;
            color: black;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        /* On Hover REd Color */
        .float:hover {
            background-color: #0056D2;
            color: white;

        }

        .my-float {
            margin-top: 24px;
            font-size: 35px;
        }

        .card {
            background-color: white;
            /* remove shadow */
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0) !important;
            /* margin-top: 10%; */
            border-radius: 25px;
        }

        .card-img-top {
            /* give buttom waved curve */
            border-bottom: 10px solid {{ $card->primary_color }};
            /* border raduis only top left and right */
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        .line {
            border-bottom: 10px solid #0056D2;
            width: 100%;
            margin-top: 10px;
        }

        .dotted-left {
            border-left: 2px solid black;
            padding-left: 10px;

        }

        .icon {
            width: 33px;
            height: 33px;
            min-width: 33px;
            background-color: {{ $card->primary_color }};
            border-radius: 50%;
            text-align: center;
            padding-top: 9px;
            color: {{ $card->secondary_color }};
            font-size: 15px;
        }

        .icon2 {
            width: 33px;
            height: 33px;
            background-color: #E49700;
            border-radius: 50%;
            text-align: center;
            padding-top: 5px;
            color: white;
            font-size: 15px;
        }

        .social_icon {
            width: 40px;
            height: 40px;
            background-color: #0056D2;
            border-radius: 50%;
            text-align: center;
            padding-top: 10px;
            color: white;
            font-size: 15px;
        }

        .pills {
            background-color: #ffeed2;
            color: #cfaa74;
            border-radius: 25px;
            padding: 5px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }

        .btn-red {
            background-color: #0056D2;
            border-color: #0056D2;
        }

        .btn-red {
            padding: 5px 10px;
            background-color: #0056D2;
            color: white;
            text-align: center;
            border-radius: 25px;
            border-color: #0056D2;
            width: 100%;
            height: 100%;
        }

        .btn-red:hover {
            background-color: black;
            color: black;
            border-color: #E5F2FF;
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
            background-color: #0056D2;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        #saveBtn {
            margin-top: 10px;
            background-color: #0056D2;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        #saveBtn:hover {
            background-color: black;
        }

        #closeBtn:hover {
            background-color: black;
        }

        #openBtn {
            background-color: #0056D2;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 20px;
        }

        #openBtn:hover {
            background-color: black;
        }

        .details {
            font-size: 20px;
            font-weight: bold;
            color: black;
            padding: 15px;
            background-color: #f1f1f1;
        }

        .experience {
            padding: 10px;
        }

        .education {
            padding: 10px;
        }

        .languages {
            padding: 15px;
        }

        .interests {
            padding: 15px;
        }

        .qrcode {
            /* align center dotted only on border */
            border: 2px dotted #0056D2;
            border-radius: 25px;
            padding: 10px;
            /* background-color: #f1f1f1; */
            align-items: center;
            text-align: center;
        }

        .qr_div {
            text-align: center;

        }

        .toolbar {
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
            /* font-faimly plantino*/
            /* font-family: 'Plantino'; */
        }

        .toolbar ul {
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .toolbar ul li {
            margin-left: 20px;
            font-size: 20px;
            text-decoration: none;
            cursor: pointer;
            /* text-align: center; */
        }

        .secondry-text {
            color: {{ $card->text_color }};
        }

        .card_headings {
            /* line-height: 0.3; */
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            color: #fff;
            padding: 10px;
            /* border-radius: 5px; */
            /* shadow */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 60%;
            max-width: 600px;
            border-radius: 10px;
            /* border: 3px solid {{ $card->primary_color }}; */
        }

        .card_header {
            position: relative;
            margin-bottom: 50px;
        }
    </style>
    <div class="content-wrapper">
        <input type="hidden" id="company_id" value="{{ empty($company) ? 'none' : $company->id }}">
        <input type="hidden" id="use_username" value="{{ $use_username }}">
        <section class="content-header">
            <div class='container'>
                <div class='row'>
                    <div class='col-md-12'>
                        <nav class="navbar navbar-expand-md toolbar">
                            {{-- <a class="navbar-brand" href="#"></a> --}}
                            <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation" style=""><i
                                    class="fa-solid fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link text-black" href="/edit_card/{{ $card->id }}"
                                            style="text-decoration:none; color:black;"><i class="fa fa-pencil"></i> Edit</a>
                                    </li>
                                    @if (isset($permissions['can_download_card']))
                                        <li class="nav-item">
                                            <a class="nav-link text-black" id="qr_modal" href="#"
                                                style="text-decoration:none; color:black;"><i
                                                    class="fa-solid fa-download"></i> Download QR Code</a>
                                        </li>
                                    @endif
                                    @if (isset($permissions['can_delete_card']))
                                        <li class="nav-item">
                                            <a class="delete-card nav-link text-black"
                                                data-delete-card-id="{{ $card->id }}" data-bs-toggle="modal"
                                                data-bs-target="#deletecardmodal"
                                                style="text-decoration:none; color:black;">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </a>
                                        </li>
                                    @endif

                                    <li class="nav-item">
                                        <a class="nav-link text-black"
                                            href="/visting_card/{{ $card->id }}/{{ $type }}"
                                            style="text-decoration:none; color:black;"><i
                                                class="fa-solid fa-address-card"></i>
                                            Visting Card</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-black" href="/edit_profile/{{ $card->id }}"
                                            style="text-decoration:none; color:black;"><i
                                                class="fa-solid fa-pen-to-square"></i> Edit
                                            Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div id="design">
                            @if ($card->design_html == 'Flat')
                                <img src="{{ asset('card_images') }}/{{ $card->image_path }}" class="card-img-top"
                                    id="card_image" alt="...">
                                <div style="display: flex; align-items: center;">
                                    <p style="margin:15px; text-align: left; font-size: 30px; font-weight: bold;"
                                        id="card_name" class="secondry-text">{{ $card->name }}</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <p style="margin-left:15px; text-align: left; font-size: 20px; font-weight: bold; color:{{ $card->primary_color }}"
                                        id="card_designation" class="primary-text">{{ $card->designation }}</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <p style="margin-left:15px; text-align: left; font-size: 17px; font-weight: bold; color:{{ $card->primary_color }}"
                                        id="card_company" class="primary-text">{{ $card->company }}</p>
                                </div>
                            @elseif($card->design_html == 'Sleek')
                                <div class="card_header"><img src="{{ asset('card_images') }}/{{ $card->image_path }}"
                                        class="card-img-top"
                                        style="border-bottom-left-radius: 30%; border-bottom-right-radius: 30%;"
                                        id="card_image" alt="...">
                                    <div class="card_headings">
                                        <p style="text-align: center; font-size:20px; font-weight: bold;" id="card_name"
                                            class="secondry-text"> {{ $card->name }}</p>
                                        <p style="text-align: center; font-size:18px; font-weight: bold; color:{{ $card->primary_color }}"
                                            id="card_designation" class="primary-text">{{ $card->designation }}</p>
                                        <p style="text-align: center; font-size:14px; font-weight: bold; color:{{ $card->primary_color }}"
                                            id="card_company" class="primary-text"> {{ $card->company }}</p>
                                    </div>
                                </div>
                            @elseif($card->design_html == 'Classic')
                                <img src="{{ asset('card_images') }}/{{ $card->image_path }}" class="card-img-top"
                                    style="border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; border-bottom: 20px solid {{ $card->primary_color }}"
                                    id="card_image" alt="...">
                                <div style="display: flex; align-items: center;">
                                    <p style="margin:15px; text-align: left; font-size: 30px; font-weight: bold;"
                                        id="card_name" class="secondry-text">{{ $card->name }}</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <p style="margin-left:15px; text-align: left; font-size: 20px; font-weight: bold; color:{{ $card->primary_color }}"
                                        id="card_designation" class="primary-text">{{ $card->designation }}</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <p style="margin-left:15px; text-align: left; font-size: 17px; font-weight: bold; color:{{ $card->primary_color }}"
                                        id="card_company" class="primary-text">{{ $card->company }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <i class="fa-solid fa-envelope icon"></i>
                                <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                    class="secondry-text">
                                    {{ $card->email }}
                                </p>
                            </div>
                            @if ($card->linkedin)
                                <div style="display: flex; align-items: center;">
                                    <i class="fa-brands fa-linkedin icon"></i>
                                    <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                        class="secondry-text">
                                        {{ $card->linkedin }}
                                    </p>
                                </div>
                            @endif
                            <div style="display: flex; align-items: center;">
                                <i class="fa-solid fa-phone icon"></i>
                                <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                    class="secondry-text">
                                    {{ $card->phone }}
                                </p>
                            </div>
                            @if ($card->website)
                                <div style="display: flex; align-items: center;">
                                    <i class="fa-solid fa-globe icon"></i>
                                    <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                        class="secondry-text">
                                        {{ $card->website }}
                                    </p>
                                </div>
                            @endif
                            <div style="display: flex; align-items: center;">
                                <i class="fa-solid fa-map-marker-alt icon"></i>
                                <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                    class="secondry-text">
                                    {{ $card->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center" style="font-size: 30px;font-family:Palatino; font-weight: bold;">
                                Send Card
                            </p>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 qr_div">
                                    <!-- <div class="qrcode"> -->
                                    <a class="qr_anchor" href="/v/{{ $url }}">
                                        <div id="qrcode">
                                        </div>
                                    </a>
                                    <!-- </div> -->
                                    <p style="font-size: 15px;font-family:Palatino; font-weight: bold; color: #0056D2">Scan
                                        or Click to
                                        View Profile</p>
                                    <button class="btn btn-primary" onclick="copyLink()"><i
                                            class="fa-regular fa-copy"></i>
                                        CopyLink</button>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="cardAnalytics" style="width:100%;max-width:600px;height: 500px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Model -->
        <div class="modal fade" id="deletecardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-body">
                            <p>Are you Sure to delete this card?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a class="btn btn-primary" href="" role="button" id="modaldeletecard">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Qr Code Options modal -->
        <div class="modal fade" id="qr_code_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Qr Code Options</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Qr Color -->
                        <div class="form-group">
                            <label for="qr_color">QR Color: <span style="color:red;">*</span></label>
                            <input type="color" class="form-control" name="qr_color" id="qr_color" value="#000000">
                        </div>
                        <div class="form-group">
                            <label for="qr_background">Want QR Background ? <span style="color:red;">*</span></label>
                            <select class="form-control" id="qr_background">
                                <option value="#ffffff">Yes</option>
                                <option value="transparent">No</option>
                            </select>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="download_qr" class="btn btn-primary"><i class="fa-solid fa-crop"></i>
                            Download Qr-Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete-card').click(function(e) {
            $('#modaldeletecard').attr('href', '/delete_card/' + $(this).attr('data-delete-card-id'))
        });
        var company_id = document.getElementById("company_id").value;
        var use_username = document.getElementById("use_username").value;
        url = "{{ route('view_profile', $card->id) }}";
        if (use_username == 1) {
            url = "{{ route('view_profile', $card->username) }}";
        }
        if (company_id != 'none') {
            var qrCode = new QRCodeStyling({
                width: 150,
                height: 150,
                type: "canvas",
                data: url,
                image: "{{ asset('company_logos') }}/{{ empty($company) ? 'default.png' : $company->logo }}",
                dotsOptions: {
                    color: "black",
                    // type: "classy-rounded"
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
                width: 150,
                height: 150,
                type: "canvas",
                data: url,
                image: "{{ asset('frontend/img/favIcon.png') }}",
                dotsOptions: {
                    color: "black",
                    // type: "classy-rounded"fav
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
        var qr_btn = document.getElementById('qr_modal');
        qr_btn.addEventListener('click', function() {
            //open modal
            $('#qr_code_modal').modal('show');
        });
        var download_qr = document.getElementById("download_qr");
        console.log($("#qr_background").val())
        download_qr.addEventListener('click', function() {
            // console.log($("#is_background").val())
            var qrCode2 = new QRCodeStyling({
                width: 500,
                height: 500,
                type: "canvas",
                data: url,
                // image: "{{ asset('frontend/img/qr_logo.svg') }}",
                dotsOptions: {
                    color: $("#qr_color").val(),
                    // type: "classy-rounded"
                },
                backgroundOptions: {
                    color: $("#qr_background").val(),
                },
                // imageOptions: {
                //     crossOrigin: "anonymous",
                //     margin: 0,
                //     imageSize: 0.4,
                // },
                qrOptions: {
                    errorCorrectionLevel: "H",
                },
            });
            qrCode2.download({
                name: "{{ $card->name }}_QrCode",
                extension: "png",
            });
            console.log($("#qr_background").val())
            console.log($("#qr_color").val())
        });

        function copyLink() {
            var textToCopy = url;

            navigator.clipboard.writeText(textToCopy)
                .then(function() {
                    console.log("Text copied to clipboard: " + textToCopy);
                })
                .catch(function(error) {
                    console.error("Failed to copy text: ", error);
                });
        }
        var xValues = ["Profile Views", "Save Contacts"];
        var yValues = [{{ $card->cardLogs->count() }}, {{ $card->contactLogs->count() }}];
        var barColors = [
            "#0056D2",
            "#ffa300"
        ];

        new Chart("cardAnalytics", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Card Analytics"
                }
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
