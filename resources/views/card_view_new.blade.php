@extends('layouts.admin')
@section('content')
@php
$permissions = session()->get('permissions');
if($use_username == 1){
$url = $card->username;
}else{
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
    border-bottom: 10px solid {{$card->primary_color}};
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
    background-color: {{$card->primary_color}};
    border-radius: 50%;
    text-align: center;
    padding-top: 9px;
    color: {{$card->secondary_color}};
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
    align-items: center;
    /* font-faimly plantino*/
    font-family: 'Plantino';
}

.toolbar ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
}

.toolbar ul li {
    margin-left: 20px;
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
}
.secondry-text{
    color:{{$card->text_color}};
}
</style>
<div class="content-wrapper">
    <input type="hidden" id="company_id" value="{{ empty($company) ? 'none' : $company->id }}">
    <input type="hidden" id="use_username" value="{{ $use_username }}">
    <section class="content-header">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <nav class="toolbar">
                        <ul>
                            <li>
                                <a href="/edit_card/{{ $card->id }}" style="text-decoration:none; color:black;"><i
                                        class="fa fa-pencil"></i> Edit</a>
                            </li>
                            @if (isset($permissions['can_download_card']))
                            <li>
                                <a id="qr_modal" href="#" style="text-decoration:none; color:black;"><i
                                        class="fa-solid fa-download"></i> Download QR Code</a>
                            </li>
                            @endif
                            @if (isset($permissions['can_delete_card']))
                            <li>
                                <a class="delete-card" data-delete-card-id="{{ $card->id }}" data-bs-toggle="modal"
                                    data-bs-target="#deletecardmodal" style="text-decoration:none; color:black;">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </a>
                            </li>
                            @endif

                            <li>
                                <a href="/visting_card/{{ $card->id }}/{{ $type }}" style="text-decoration:none; color:black;"><i
                                        class="fa-solid fa-address-card"></i> Visting Card</a>
                            </li>
                            <li>
                                <a href="/edit_profile/{{ $card->id }}" style="text-decoration:none; color:black;"><i
                                        class="fa fa-pencil"></i> Edit Profile</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div style="display: flex; align-items: center;">
                            <p style="text-align: left; font-size: 30px; font-weight: bold;" class="secondry-text">
                                {{$card->name}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <p style="text-align: left; font-size: 20px; font-weight: bold; color:{{$card->primary_color}}" class="primary-text"> 
                                {{$card->designation}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <p style="text-align: left; font-size: 17px; font-weight: bold; color:{{$card->primary_color}}">
                                {{$card->company}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-envelope icon"></i>
                            <p
                                style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;" class="secondry-text">
                                {{$card->email}}
                            </p>
                        </div>
                        @if($card->linkedin)
                        <div style="display: flex; align-items: center;">
                            <i class="fa-brands fa-linkedin icon"></i>
                            <p
                                style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;" class="secondry-text">
                                {{$card->linkedin}}
                            </p>
                        </div>
                        @endif
                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-phone icon"></i>
                            <p
                                style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;" class="secondry-text">
                                {{$card->phone}}
                            </p>
                        </div>
                        @if($card->website)
                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-globe icon"></i>
                            <p
                                style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;" class="secondry-text">
                                {{$card->website}}
                            </p>
                        </div>
                        @endif
                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-map-marker-alt icon"></i>
                            <p
                                style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;" class="secondry-text">
                                {{$card->address}}
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
                                <button class="btn btn-primary" onclick="copyLink()"><i class="fa-regular fa-copy"></i>
                                    CopyLink</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
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
var qr_btn = document.getElementById('qr_modal');
qr_btn.addEventListener('click', function() {
    //open modal
    $('#qr_code_modal').modal('show');
});
var download_qr = document.getElementById("download_qr");
console.log($("#qr_background").val())
download_qr.addEventListener('click', function() {
    console.log($("#is_background").val())
    qrCode2 = new QRCodeStyling({
        width: 3000,
        height: 3000,
        type: "canvas",
        data: "{{ route('view_profile', $card->username) }}",
        dotsOptions: {
            color: $("#qr_color").val(),
            // type: "classy-rounded"
        },
        backgroundOptions: {
            color: $("#qr_background").val(),
        },
        qrOptions: {
            errorCorrectionLevel: "H",
        },
    });
    qrCode2.download({
        name: "{{ $card->name }}_QrCode",
        extension: "png",
    });
});
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
        image: "{{ asset('frontend/img/qr_logo.svg') }}",
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
}
qrCode.append(document.getElementById("qrcode"));

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
</script>
@endsection