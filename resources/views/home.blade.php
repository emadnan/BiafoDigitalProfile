@extends('layouts.admin')
@section('content')
@php
$permissions= session()->get('permissions');
$is_new = session()->get('is_new');
@endphp
<style>
.modal-dialog {
    margin-top: 6%;
}

.profile_card_img {
    /* width: 100%;
    height: 100%; */
    object-fit: cover;
    width: 100%;
    border-radius: 50%;
    border : 2px solid #fff;
}

.name {
    font-size: 1.1rem;
    /* time new roman */
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}

.designation {
    font-size: 0.9rem;
    font-family: 'Times New Roman', Times, serif;
}

.card {
    cursor: pointer;
    border-radius: 20px;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    border: none;
    /* margin-bottom: 30px; */
}

.card:hover {
    background-color: #E49700;
    color: #fff;
}
.row-eq-height {
  display: flex;
  flex-wrap: wrap;
}

.row-eq-height > [class*='col-'] {
  display: flex;
  flex-direction: column;
}
@media  only screen and (max-width: 800px) {
    .detail {
        text-align: center;
        line-height: 1.5;
        margin-left: 10px;
    }
}

/* .form-control{
        border-radius: 10px;
    } */
</style>
<div class="content-wrapper">
    <input type="hidden" id="is_new" value="{{$is_new}}">
    <div class="container">
        <section class="content-header">
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-8'>
                        <!-- Live Search -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" id="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        @if(isset($permissions['can_create_card']))
                        @if(Auth::user()->user_type=='company')
                        <a type="button" id="csv" class="anchor btn btn-primary">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i> CSV Upload
                        </a>
                        @endif
                        <a type="button" id="add_card" class="anchor btn btn-primary">
                            @if(Auth::user()->user_type=='company')
                            Add Employee Card
                            @else
                            Add Card
                            @endif
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row" id="card_divs">
                @foreach ($cards as $card)
                <div class="col-md-4 scard">
                    <a style="text-decoration: none; color: black;" href="/view_card/{{$card->id}}/work">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{asset('card_images')}}/{{$card->image_path}}" alt="image preview"
                                            class="profile_card_img">
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <p class="name">{{$card->name}}</p>
                                        <p class="designation">{{$card->designation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- add card Model -->
    <div class="modal fade" id="add_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="add_card_form" action="/add_card" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- //image -->
                        <div>
                            <h5
                                style="text-transform:uppercase; padding:12px; text-align:center; border-radius:25px 10px; background-color:#0056D2 ;color:white; border:2px solid #0056D2">
                                Add Card Here</h5>
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <div>
                                <img src="{{asset('frontend/img/your-image-here.jpg')}}" alt="image preview"
                                    id="image_preview"
                                    style="width: 200px; height: 200px; border-radius:20%;border: 5px solid;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Image: <span style="color:red;">*</span></label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" class="form-control" name="company" id="company"
                                placeholder="Enter Company" value="{{ empty($company) ? '' : $company->company_name }}">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation:</label>
                            <input type="text" class="form-control" name="designation" id="designation"
                                placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label for="address">Address: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Enter Address" value="{{ empty($company) ? '' : $company->address }}">
                        </div>
                        <div class="form-group">
                            <label for="country">Country: <span style="color:red;">*</span></label>
                            <select name="country" id="country" class="form-control">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                @if(empty($company))
                                <option value="{{$country->id}}" data-phone-code="{{$country->phonecode}}">
                                    {{$country->name}}</option>
                                @else
                                @if($company->country_id == $country->id)
                                <option value="{{$country->id}}" data-phone-code="{{$country->phonecode}}" selected>
                                    {{$country->name}}</option>
                                @else
                                <option value="{{$country->id}}" data-phone-code="{{$country->phonecode}}">
                                    {{$country->name}}</option>
                                @endif
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City: <span style="color:red;">*</span></label>
                            <select name="city" id="city" class="form-control">
                                <option value="">Select City</option>
                                @if(!empty($company))
                                @foreach($cities as $city)
                                @if($company->city_id == $city->id)
                                <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                @else
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endif
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No:</label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                placeholder="Enter Your Phone No">
                            <help class="">e.g+92-331********</help>
                        </div>
                        <div class="form-group">
                            <label for="linkiden">Linkiden:</label>
                            <input type="text" class="form-control" name="linkiden" id="linkiden"
                                placeholder="Enter Linkiden" value="{{ empty($company) ? '' : $company->linkedin }}">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" name="website" id="website"
                                placeholder="Enter Website" value="{{ empty($company) ? '' : $company->website }}">
                        </div>



                </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveButton" class="btn btn-primary">Save changes</button>
                </div>

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
    <!-- CSV Model -->
    <div class="modal fade" id="add_csv_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="add_csv_form" action="/csv_import" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h5
                                style="text-transform:uppercase; padding:12px; text-align:center; border-radius:25px 10px; background-color:#0056D2 ;color:white; border:2px solid #0056D2">
                                CSV Upload</h5>
                        </div>
                        <div class="form-group">
                            <label for="csv_file">CSV File: <span style="color:red;">*</span></label>
                            <input type="file" class="form-control" name="csv_file" id="csv_file"
                                placeholder="Enter CSV File">
                            <help>CSV file should be in this format: <a
                                    href="{{asset('sample_csv/sample.csv')}}">Download Sample</a> and don't forget to
                                format as text phone cell</help>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="saveButton" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Company Profile  Modal  -->
    <div class="modal fade bd-example-modal-lg" id="company_profile_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="company_profile_form" action="/add_company" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <h5
                            style="text-transform:uppercase; padding:12px; text-align:center; border-radius:25px 10px; background-color:#0056D2 ;color:white; border:2px solid #0056D2">
                            Setup Your Company Profile</h5>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{asset('frontend/img/logo_here.png')}}" alt="image preview" id="logo_preview"
                                    style="height: 200px; padding:10px;border: 5px solid;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Company Logo: <span style="color:red;">*</span></label>
                                    <input type="file" class="form-control" name="logo" id="logo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Company Name: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="company_name" id="company_name"
                                        placeholder="Enter Your Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Company Linkedin:</label>
                                    <input type="text" class="form-control" name="company_linkedin"
                                        id="company_linkedin" placeholder="Enter Your Company Linkedin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Company Website:</label>
                                    <input type="text" class="form-control" name="company_website" id="company_website"
                                        placeholder="Enter Your Company Website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Country: <span style="color:red;">*</span></label>
                                    <select name="company_country" id="company_country" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">City: <span style="color:red;">*</span></label>
                                    <select name="company_city" id="company_city" class="form-control">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Company Address: <span style="color:red;">*</span></label>
                                    <textarea class="form-control" name="company_address" id="company_address"
                                        placeholder="Enter Your Company Address"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <button type="submit" id="saveButton" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
//live search card divs by name
$(document).ready(function() {
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#card_divs .scard").filter(function() {
            var test = $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(document).ready(function() {
    $('#csv').click(function() {
        $('#add_csv_modal').modal('show');
    });
    $('#add_card').click(function() {
        $('#add_card_modal').modal('show');
    });
    var is_new = $('#is_new').val();
    if (is_new == '1') {
        $('#company_profile_modal').modal('show');
    }
    var logo = document.getElementById("logo");
    var logo_preview = document.getElementById("logo_preview");
    logo.addEventListener('change', function() {
        var reader = new FileReader();
        reader.onload = function() {
            logo_preview.src = reader.result;
        }
        reader.readAsDataURL(this.files[0]);
    });
    var country = document.getElementById("company_country");
    var city = document.getElementById("company_city");
    //country change event listener to get cities
    country.addEventListener('change', function() {
        var country_id = this.value;
        // alert(country_id);
        var url = "/cities/" + country_id;
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
                city.innerHTML = html;
            }
        });
    });
    var country2 = document.getElementById("country");
    var city2 = document.getElementById("city");
    //country change event listener to get cities
    country2.addEventListener('change', function() {
        var country_id2 = this.value;
        // var country_phone_code = this.options[this.selectedIndex].getAttribute('data-phone-code');
        // console.log(country_phone_code);
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
});

//show image in image preview
$(document).ready(function() {
    $('#country').change(function() {
        var selectedOption = $('option:selected', this);
        var country_code = $('option:selected', this).attr('data-phone-code');
        var phone_code = $('#phone_code');
        //put phone code in phone_code div 
        phone_code.text(country_code);
    });
    var image = document.getElementById("to_be_cropped_image");
    var cropButton = document.getElementById("cropButton");
    var downloadButton = document.getElementById("downloadButton");
    var croppedImageContainer = document.getElementById("image_preview");
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
    //crop button click
    cropButton.addEventListener("click", () => {
        //get cropped image
        var croppedImage = cropper.getCroppedCanvas().toDataURL();
        //show cropped image in image preview
        croppedImageContainer.src = croppedImage;
        //hide image crop modal
        $('#image_crop_modal').modal('hide');
    });
    //save button click
    saveButton.addEventListener("click", () => {

        //if form validate true then save data
        if ($('#add_card_form').valid()) {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector("#loader").style.visibility = "visible";
            //get cropped image
            var croppedImage = cropper.getCroppedCanvas().toDataURL();
            //show cropped image in image preview
            croppedImageContainer.src = croppedImage;
            //hide image crop modal
            $('#image_crop_modal').modal('hide');
            var data = new FormData();
            // data.append('_token',$('meta[name="csrf-token"]').attr('content'));
            data.append('image', croppedImage);
            data.append('name', $('#name').val());
            data.append('email', $('#email').val());
            data.append('phone', $('#phone').val());
            data.append('address', $('#address').val());
            data.append('city', $('#city').val());
            data.append('country', $('#country').val());
            data.append('website', $('#website').val());
            data.append('company', $('#company').val());
            data.append('designation', $('#designation').val());
            data.append('linkiden', $('#linkiden').val());

            //ajax request
            $.ajax({
                type: 'POST',
                url: "{{ route('add_card') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                //show loader till ajax request complete
                beforeSend: function() {
                    $('#loader').show();
                },
                success: function(data) {
                    //hide add card modal
                    $('#add_card_modal').modal('hide');
                    //show success message
                    toastr.success('Card Added Successfully');
                    //reload page
                    location.reload();
                },
                error: function(data) {
                    //show error message
                    toastr.error('Something Went Wrong');
                }
            });
        }
    });
    //form validate for add_card
    $('#add_card_form').validate({
        rules: {
            image: {
                required: true,
                extension: "jpg|jpeg|png",
            },
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: '/validate_email'
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
            image: {
                required: "Please Select Image",
                extension: "Please Select Valid Image",
            },
            name: {
                required: "Please Enter Name",
            },
            email: {
                required: "Please Enter Email",
                email: "Please Enter Valid Email",
                remote: "Email Already Exist"
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
    //form validate for add_csv_form
    $('#add_csv_form').validate({
        rules: {
            csv_file: {
                required: true,
                extension: "csv",
            },
        },
        messages: {
            csv_file: {
                required: "Please Select CSV File",
                extension: "Please Select Valid CSV File",
            },
        },
    });
    //form validate for company_profile
    $('#company_profile_form').validate({
        rules: {
            logo: {
                required: true,
                extension: "png",
            },
            company_name: {
                required: true,
            },
            company_address: {
                required: true,
            },
            company_city: {
                required: true,
            },
            company_country: {
                required: true,
            },
        },
        messege: {
            logo: {
                required: "Please Select Logo",
                extension: "Please Select Valid Logo",
            },
            company_name: {
                required: "Please Enter Company Name",
            },
            company_address: {
                required: "Please Enter Company Address",
            },
            company_city: {
                required: "Please Enter Company City",
            },
            company_country: {
                required: "Please Enter Company Country",
            },
        },
    });
});
</script>
@endsection