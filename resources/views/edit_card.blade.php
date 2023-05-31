@extends('layouts.admin')
@section('content')
@php
$permissions = session()->get('permissions');
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
    border-bottom: 10px solid {{$card->primary_color }};
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
    background-color: {{$card->primary_color }};
    border-radius: 50%;
    text-align: center;
    padding-top: 9px;
    color: {{$card->secondry_color }};
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

.mytabs {
    display: flex;
    flex-wrap: wrap;
    max-width: 600px;
    /* margin: 50px auto; */
    /* padding: 25px; */
}

.mytabs input[type="radio"] {
    display: none;
}

.mytabs label {
    padding: 15px;
    /* background: #E5F2FF; */
    font-weight: bold;
    margin-left: 20px;
    margin-right: 20px;
    cursor: pointer;
}

.mytabs .tab {
    width: 100%;
    padding: 20px;
    background: #fff;
    order: 1;
    display: none;
}

.mytabs .tab h2 {
    font-size: 3em;
}

.mytabs input[type='radio']:checked+label+.tab {
    display: block;
}

.mytabs input[type="radio"]:checked+label {
    border-bottom: 2px solid #0056D2;
}

.colorPickSelector {
    -webkit-transition: all linear .2s;
    -moz-transition: all linear .2s;
    -ms-transition: all linear .2s;
    -o-transition: all linear .2s;
    transition: all linear .2s;
    width: 35px;
    height: 35px;
    text-align: center;
    cursor: pointer;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: red;
}
.secondry-text{
    color: {{$card->text_color}};
}
.card_headings{
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
    /* border: 3px solid {{$card->primary_color}}; */
}
.card_header{
    position: relative;
    margin-bottom: 50px;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                </div>
            </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div id="design">
                    @if($card->design_html == 'Flat')
                        <img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" id="card_image" alt="..."><div style="display: flex; align-items: center;"><p style="margin:15px; text-align: left; font-size: 30px; font-weight: bold;" id="card_name" class="secondry-text">{{$card->name}}</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 20px; font-weight: bold; color:#8E44AD" id="card_designation" class="primary-text">{{$card->designation}}</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 17px; font-weight: bold; color:#8E44AD" id="card_company" class="primary-text">{{$card->company}}</p></div>
                        @elseif($card->design_html == 'Sleek')
                        <div class="card_header"><img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" style="border-bottom-left-radius: 30%; border-bottom-right-radius: 30%;" id="card_image" alt="..."><div class="card_headings"><p style="text-align: center; font-size:20px; font-weight: bold;" id="card_name" class="secondry-text"> {{$card->name}}</p><p style="text-align: center; font-size:18px; font-weight: bold; color:#8E44AD" id="card_designation" class="primary-text">{{$card->designation}}</p><p style="text-align: center; font-size:14px; font-weight: bold; color:#8E44AD" id="card_company" class="primary-text"> {{$card->company}}</p></div></div>
                        @elseif($card->design_html == 'Classic')
                        <img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" style="border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; border-bottom: 20px solid {{$card->primary_color}}"  id="card_image" alt="..."><div style="display: flex; align-items: center;"><p style="margin:15px; text-align: left; font-size: 30px; font-weight: bold;" id="card_name" class="secondry-text">{{$card->name}}</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 20px; font-weight: bold; color:{{$card->primary_color}}" id="card_designation" class="primary-text">{{$card->designation}}</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 17px; font-weight: bold; color:{{$card->primary_color}}" id="card_company" class="primary-text">{{$card->company}}</p></div>
                        @endif
                        </div>
                    <div class="card-body">
                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-envelope icon"></i>
                            <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                id="card_email" class="secondry-text">
                                {{$card->email}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fa-brands fa-linkedin icon"></i>
                            <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                id="card_linkedin" class="secondry-text">
                                {{$card->linkedin}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-phone icon"></i>
                            <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                id="card_phone" class="secondry-text">
                                {{$card->phone}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-globe icon"></i>
                            <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                id="card_website" class="secondry-text">
                                {{$card->website}}
                            </p>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fa-solid fa-map-marker-alt icon"></i>
                            <p style="text-align: left; font-size: 15px; font-weight: bold; margin: 7px; max-width: 270px;"
                                id="card_address" class="secondry-text">
                                {{$card->address}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mytabs">
                            <input type="radio" id="tabfree" name="mytabs" checked="checked">
                            <label for="tabfree">General</label>
                            <div class="tab">
                                <form id="update_card_form" action="/update_card/{{ $card->id }}/work" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="image"
                                            placeholder="Enter Image">
                                        <small id="imageHelp" class="form-text text-muted">Choose Image to
                                            Change</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="update_name"
                                            value="{{ $card->name }}" placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="update_email"
                                            value="{{ $card->email }}" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company" id="update_company"
                                            placeholder="Enter Company" value="{{ $card->company }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="designation"
                                            id="update_designation" placeholder="Enter Designation"
                                            value="{{ $card->designation }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" id="update_address"
                                            placeholder="Enter Address" value="{{ $card->address }}">
                                    </div>
                                    <div class="form-group">
                                        <select name="country" id="country" class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                            @if ($card->country_id == $country->id)
                                            <option value="{{ $country->id }}"
                                                data-phone-code="{{ $country->phonecode }}" selected>
                                                {{ $country->name }}</option>
                                            @else
                                            <option value="{{ $country->id }}"
                                                data-phone-code="{{ $country->phonecode }}">
                                                {{ $country->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="city" id="city" class="form-control">
                                            <option value="">Select City</option>
                                            @foreach ($cities as $city)
                                            @if ($card->city_id == $city->id)
                                            <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
                                            @else
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="update_phone" name="phone"
                                            placeholder="Enter Your Phone No" value="{{ $card->phone }}">
                                        <help class="">e.g+92-331********</help>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="linkiden" id="update_linkiden"
                                            placeholder="Enter Linkiden" value="{{ $card->linkedin }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="website" id="update_website"
                                            placeholder="Enter Website" value="{{ $card->website }}">
                                    </div>
                                </form>
                            </div>
                            <input type="radio" id="tabsilver" name="mytabs">
                            <label for="tabsilver">Display</label>
                            <div class="tab">
                            <hr></hr>
                            <h5 style="font-family:Plantino; font-weight:bold">Design :</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" id="design1" name="design" value='Flat' checked>
                                    <label for="design1" class="text-center">
                                    <img src="{{ asset('frontend/img/flat.png') }}" alt="Flat" width="120px" height="100px">
                                        Flat</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" id="design2" name="design" value='Sleek'>
                                    <label for="design2" class="text-center">
                                    <img src="{{ asset('frontend/img/sleek2.png') }}" alt="Sleek" width="120px" height="100px">
                                        Sleek</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" id="design3" name="design" value='Classic'>
                                    <label for="design3" class="text-center">
                                    <img src="{{ asset('frontend/img/classic.png') }}" alt="Classic" width="110px" height="100px">    
                                    Classic</label>
                                </div>
                            </div>
                                <hr></hr>
                                <h5 style="font-family:Plantino; font-weight:bold">Color :</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 style="font-family:Plantino">Primary Color</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="font-family:Plantino">Secondry Color</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="font-family:Plantino">Text Color</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="colorPickSelector" id="primaryColor"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="colorPickSelector" id="secondryColor"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="colorPickSelector" id="textColor"></div>
                                    </div>
                                </div>
                                <hr></hr>

                            </div>

                        </div>
                    </div>
                </div>
                <button type="button" id="saveButton" class="btn btn-primary float-right">Save changes</button>
            </div>
        </div>
    </div>
    <!-- //image crop modal -->
    <div class="modal fade" id="image_crop_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Crop Image</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex " style=" width: 600px;height: 600px;">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10 mt-4">
                            <img id="to_be_cropped_image" style=" width: 600px;height: 600px;" />

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="cropButton" class="btn btn-primary"><i class="fa-solid fa-crop"></i>
                        Crop</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var update_name = document.getElementById("update_name");
    var update_email = document.getElementById("update_email");
    var update_company = document.getElementById("update_company");
    var update_designation = document.getElementById("update_designation");
    var update_address = document.getElementById("update_address");
    var update_phone = document.getElementById("update_phone");
    var update_linkiden = document.getElementById("update_linkiden");
    var update_website = document.getElementById("update_website");
    var primaryColor = "{{$card->primary_color}}";
    var secondryColor = "{{$card->secondry_color}}";
    var textColor = "{{$card->text_color}}";
    var design = document.getElementById("design");
    // console.log(design_html);

$("#primaryColor").colorPick({
    'initialColor': '{{$card->primary_color}}',
    'allowRecent': true,
    'recentMax': 5,
    'allowCustomColor': false,
    'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad",
        "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b",
        "#ecf0f1",
        "#bdc3c7", "#95a5a6", "#7f8c8d", '#000000', '#ffffff', '#d12229', '#393939', '#0056D2'
    ],
    'onColorSelected': function() {
        document.getElementById("primaryColor").style.background = this.color;
        //get by class
        var primary = document.getElementsByClassName("card-img-top");
        //change bottom border color
        primary[0].style.borderBottomColor = this.color;
        var icons = document.getElementsByClassName("icon");
        for (var i = 0; i < icons.length; i++) {
            icons[i].style.background = this.color;
        }
        var primary_text = document.getElementsByClassName("primary-text");
        for (var i = 0; i < primary_text.length; i++) {
            primary_text[i].style.color = this.color;
        }
        primaryColor = this.color;
    }
});
$("#secondryColor").colorPick({
    'initialColor': '{{$card->secondary_color}}',
    'allowRecent': true,
    'recentMax': 5,
    'allowCustomColor': false,
    'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad",
        "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b",
        "#ecf0f1",
        "#bdc3c7", "#95a5a6", "#7f8c8d", '#000000', '#ffffff', '#d12229', '#393939', '#0056D2'
    ],
    'onColorSelected': function() {
        document.getElementById("secondryColor").style.background = this.color;
        var icons = document.getElementsByClassName("icon");
        for (var i = 0; i < icons.length; i++) {
            icons[i].style.color = this.color;
        }
        secondryColor = this.color;
    }
});
$("#textColor").colorPick({
    'initialColor': '{{$card->text_color}}',
    'allowRecent': true,
    'recentMax': 5,
    'allowCustomColor': false,
    'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad",
        "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b",
        "#ecf0f1",
        "#bdc3c7", "#95a5a6", "#7f8c8d", '#000000', '#ffffff', '#d12229', '#393939', '#0056D2'
    ],
    'onColorSelected': function() {
        document.getElementById("textColor").style.background = this.color;
        var secondry_text = document.getElementsByClassName("secondry-text");
        for (var i = 0; i < secondry_text.length; i++) {
            secondry_text[i].style.color = this.color;
        }
        textColor = this.color;
    }
});
//name change event listener to get name
update_name.addEventListener('keyup', function() {
    var name = this.value;
    // p tag text with id card_name 
    var card_name = document.getElementById("card_name");
    card_name.innerText = name;
});
//email change event listener to get email
update_email.addEventListener('keyup', function() {
    var email = this.value;
    // p tag text with id card_email 
    var card_email = document.getElementById("card_email");
    card_email.innerText = email;
});
update_company.addEventListener('keyup', function() {
    var company = this.value;
    // p tag text with id card_company 
    var card_company = document.getElementById("card_company");
    card_company.innerText = company;
});
update_designation.addEventListener('keyup', function() {
    var designation = this.value;
    // p tag text with id card_designation 
    var card_designation = document.getElementById("card_designation");
    card_designation.innerText = designation;
});
update_address.addEventListener('keyup', function() {
    var address = this.value;
    // p tag text with id card_address 
    var card_address = document.getElementById("card_address");
    card_address.innerText = address;
});
update_phone.addEventListener('keyup', function() {
    var phone = this.value;
    // p tag text with id card_phone 
    var card_phone = document.getElementById("card_phone");
    card_phone.innerText = phone;
});
update_linkiden.addEventListener('keyup', function() {
    var linkiden = this.value;
    // p tag text with id card_linkiden 
    var card_linkiden = document.getElementById("card_linkedin");
    card_linkiden.innerText = linkiden;
});
update_website.addEventListener('keyup', function() {
    var website = this.value;
    // p tag text with id card_website 
    var card_website = document.getElementById("card_website");
    card_website.innerText = website;
});
$('#country').change(function() {
    var selectedOption = $('option:selected', this);
    var country_code = $('option:selected', this).attr('data-phone-code');
    var phone_code = $('#phone_code');
    //put phone code in phone_code div 
    phone_code.text(country_code);
});
var country2 = document.getElementById("country");
var city2 = document.getElementById("city");
//country change event listener to get cities
country2.addEventListener('change', function() {
    var country_id2 = this.value;
    // alert(country_id);
    var url = "/cities/" + country_id2;
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            console.log(city);
            var cities = data;
            var html = '<option value="">Select City</option>';
            for (var i = 0; i < cities.length; i++) {
                html += '<option value="' + cities[i].id + '">' + cities[i].name +
                    '</option>';
            }
            city2.innerHTML = html;
        }
    });
});
var image = document.getElementById("to_be_cropped_image");
var cropButton = document.getElementById("cropButton");
var croppedImageContainer = document.getElementById("card_image");
var saveButton = document.getElementById("saveButton");
let cropper;
$('#image').change(function() {
    //open image crop modal and show image
    $('#image_crop_modal').modal('show');
    var reader = new FileReader();
    reader.onload = function() {
        //set image widht and height
        image.width = 560;
        image.height = 500;
        image.src = reader.result;
        //destroy previous cropper
        if (cropper) {
            cropper.destroy();
        }
        cropper = new Cropper(image, {
            aspectRatio: 1,
            crop(event) {
                console.log(event.detail.x);
                console.log(event.detail.y);
                console.log(event.detail.width);
                console.log(event.detail.height);
                console.log(event.detail.rotate);
                console.log(event.detail.scaleX);
                console.log(event.detail.scaleY);
            },
            //cropper size set
            viewMode: 1,
            minContainerWidth: 560,
            minContainerHeight: 500,
            minCanvasWidth: 560,
            minCanvasHeight: 500,
        });
    };
    reader.readAsDataURL(event.target.files[0]);
});
var image_path = "{{asset('card_images')}}/{{$card->image_path}}";
//crop button click
cropButton.addEventListener("click", () => {
    //get cropped image
    var croppedImage = cropper.getCroppedCanvas().toDataURL();
    //show cropped image in image preview
    image_path = croppedImage;
    document.getElementById("card_image").src = croppedImage;
    
    //hide image crop modal
    $('#image_crop_modal').modal('hide');
});

var radio = document.getElementsByName("design");
    var desgin1 = document.getElementById("design1");
    var desgin2 = document.getElementById("design2");
    var desgin3 = document.getElementById("design3");
    
    var type = '{{$card->design_html}}';
    if(desgin2.value == '{{$card->design_html}}'){
        desgin2.checked = true;
        type = 'Sleek';
    }
    else if(desgin1.value == '{{$card->design_html}}')
    {
        desgin1.checked = true;
        type = 'Flat';
    }
    else{
        desgin3.checked = true;
        type = 'Classic';
    }
for (var i = 0; i < radio.length; i++) {
    radio[i].addEventListener("change", function() {
        var radio = document.querySelector('input[name="design"]:checked').value;
        if(radio == 'Flat'){
            var flat  = '<img src="'+image_path+'" class="card-img-top" id="card_image" alt="..."><div style="display: flex; align-items: center;"><p style="margin:15px; text-align: left; font-size: 30px; font-weight: bold;" id="card_name" class="secondry-text">'+update_name.value+'</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 20px; font-weight: bold; color:'+primaryColor+'" id="card_designation" class="primary-text">'+update_designation.value+'</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 17px; font-weight: bold; color:'+primaryColor+'" id="card_company" class="primary-text">'+update_company.value+'</p></div>';
            design.innerHTML = flat;
            type = 'Flat';
        }
        else if(radio == 'Sleek'){
    var sleek = '<div class="card_header"><img src="'+image_path+'" class="card-img-top" style="border-bottom-left-radius: 30%; border-bottom-right-radius: 30%;" id="card_image" alt="..."><div class="card_headings"><p style="text-align: center; font-size:20px; font-weight: bold;" id="card_name" class="secondry-text">'+update_name.value+'</p><p style="text-align: center; font-size:18px; font-weight: bold; color:'+primaryColor+'" id="card_designation" class="primary-text">'+update_designation.value+'</p><p style="text-align: center; font-size:14px; font-weight: bold; color:'+primaryColor+'" id="card_company" class="primary-text"> '+update_company.value+'</p></div></div>';
            design.innerHTML = sleek;
            type = 'Sleek';
        }
        else{
            var classic = '<img src="'+image_path+'" class="card-img-top" style="border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; border-bottom: 20px solid '+primaryColor+'" id="card_image" alt="..."><div style="display: flex; align-items: center;"><p style="margin:15px; text-align: left; font-size: 30px; font-weight: bold;" id="card_name" class="secondry-text">'+update_name.value+'</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 20px; font-weight: bold; color:'+primaryColor+'" id="card_designation" class="primary-text">'+update_designation.value+'</p></div><div style="display: flex; align-items: center;"><p style="margin-left:15px; text-align: left; font-size: 17px; font-weight: bold; color:'+primaryColor+'" id="card_company" class="primary-text">'+update_company.value+'</p></div>';
            design.innerHTML = classic;
            type = 'Classic';
        }
    });
}
saveButton.addEventListener("click", () => {
    //if form validate true then save data
    if ($('#update_card_form').valid()) {
        //get cropped image
        if (cropper) {
            var croppedImage = cropper.getCroppedCanvas().toDataURL();
            croppedImageContainer.src = croppedImage;
        } else {
            var croppedImage = "no_image";
        }
        //hide image crop modal
        $('#image_crop_modal').modal('hide');
        var data = new FormData();
        data.append('_token', '{{ csrf_token() }}');
        data.append('card_id', '{{ $card->id }}');
        data.append('image', croppedImage);
        data.append('name', $('#update_name').val());
        data.append('email', $('#update_email').val());
        data.append('phone', $('#update_phone').val());
        data.append('address', $('#update_address').val());
        data.append('city', $('#city').val());
        data.append('country', $('#country').val());
        data.append('website', $('#update_website').val());
        data.append('company', $('#update_company').val());
        data.append('designation', $('#update_designation').val());
        data.append('linkiden', $('#update_linkiden').val());
        data.append('primary_color', primaryColor);
        data.append('secondary_color', secondryColor);
        data.append('text_color', textColor);
        data.append('design_html', type);

        //ajax request
        $.ajax({
            type: 'POST',
            url: "{{ route('update_card') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                //hide add card modal
                // $('#update_card_modal').modal('hide');
                //show success message
                toastr.success('Card Updated Successfully');
                //redirect to view card page
                location.href = "/view_card/{{ $card->id }}/work";
            },
            error: function(data) {
                //show error message
                toastr.error('Something Went Wrong');
            }
        });
    }
});
$('#update_card_form').validate({
    rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
            email: true,
        },
        phone: {
            required: true,
        },
        address: {
            required: true,
        },
        country: {
            required: true,
        },
        city: {
            required: true,
        }
    },
    messages: {
        name: {
            required: "Please Enter Name",
        },
        email: {
            required: "Please Enter Email",
            email: "Please Enter Valid Email",
        },
        phone: {
            required: "Please Enter Phone",
        },
        address: {
            required: "Please Enter Address",
        },
        country: {
            required: "Please Enter Country",
        },
        city: {
            required: "Please Enter City",
        }
    },
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
@endsection