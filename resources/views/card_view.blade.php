@extends('layouts.admin')
@section('content')
@php
$permissions= session()->get('permissions');
@endphp
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
    width: 100px;
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
    display: flex;
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
    height: 500px;
    margin: 20px;
    border-radius: 25px;
    overflow: hidden;
    position: relative;
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
    position: absolute;
    bottom: 5%;
    left: 5%;

}

.business2 .infos>div {
    display: flex;
    margin: 5px;
}

/* icon background color, pading and radius */
.business2 .infos>div i {
    width: 25px;
    height: 25px;
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
    .business2 .front .back .top div {
        max-width: 100%;
    }
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                    @if(empty($profile))
                    @if(isset($permissions['can_add_profile']))
                    <a href="/add_profile/{{$card->id}}/{{$type}}" class="btn btn-primary"
                        style="float:right;margin-top:10px;">Add
                        Profile</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center"  id="download_able">
                @if(isset($permissions['can_view_card']))
                <div class="business2 mt-5 wantradius">
                    <div class="front" id="buttom_color">
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
                            <p class="mt-2">{{$card->name}}</p>
                            @if($type=="work")
                            <p>{{$card->designation}}</p>
                            @endif
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
        @endif
        <div class="row mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                @if(isset($permissions['can_edit_card']))
                <a href="#" id="update_card" class="btn btn-yellow"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                @endif
                @if(isset($permissions['can_delete_card']))
                <button type="button" class="btn btn-danger ml-4 delete-card" data-delete-card-id="{{ $card->id }}"
                    data-bs-toggle="modal" data-bs-target="#deletecardmodal"><i class="fa-solid fa-trash-can"></i>
                    Delete
                </button>
                @endif
                @if(isset($permissions['can_customize_card']))
                <a href="/customize_card_index/{{$card->id}}/{{$type}}" class="btn btn-yellow ml-4"><i
                        class="fa-brands fa-figma"></i> Customize Card</a>
                @endif
                @if(isset($permissions['can_create_visting_card']))
                <a href="/visting_card/{{$card->id}}/{{$type}}" class="btn btn-yellow ml-4"><i
                        class="fa-regular fa-id-card"></i> Visting Card</a>
                @endif
                @if(isset($permissions['can_download_card']))
                <a href="#" id="download_card" class="btn btn-yellow ml-4"><i class="fa-solid fa-download"></i> Download
                    Card</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Update Card Model -->
    <div class="modal fade" id="update_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="update_card_form" action="/update_card/{{$card->id}}/{{$type}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- //image -->
                        <div>
                            <h5><u>Update Card Here</u></h5>
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <img src="{{asset('card_images')}}/{{$card->image_path}}" alt="image preview"
                                id="image_preview"
                                style="width: 200px; height: 200px; border-radius:50%;border: 5px solid;">
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$card->name}}"
                                placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$card->email}}"
                                placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone"
                                value="{{$card->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" class="form-control" name="company" id="company"
                                placeholder="Enter Company" value="{{$card->company}}">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation:</label>
                            <input type="text" class="form-control" name="designation" id="designation"
                                placeholder="Enter Designation" value="{{$card->designation}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Enter Address" value="{{$card->address}}">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" name="country" id="country"
                                placeholder="Enter Country" value="{{$card->country}}">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City"
                                value="{{$card->city}}">
                        </div>
                        <div class="form-group">
                            <label for="linkiden">Linkiden:</label>
                            <input type="text" class="form-control" name="linkiden" id="linkiden"
                                placeholder="Enter Linkiden" value="{{$card->linkedin}}">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" name="website" id="website"
                                placeholder="Enter Website" value="{{$card->website}}">
                        </div>



                </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="saveButton" class="btn btn-primary">Save changes</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal delete -->
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
    <!-- Modal add profile warning -->
    <div class="modal fade" id="warningmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body">
                        <p>Add You Profile First !</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
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
</div>
@endsection
@section('scripts')
<script>
$("#download_card").on('click', function() {
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
$('.delete-card').click(function(e) {
    $('#modaldeletecard').attr('href', '/delete_card/' + $(this).attr('data-delete-card-id'))
});
// var qrcode = new QRCode("qrcode", {
//     text: "{{route('view_profile', $card->id)}}",
//     width: 80,
//     height: 80,
//     colorDark: "#000000",
//     colorLight: "#ffffff",
//     correctLevel: QRCode.CorrectLevel.H,
// });
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
$('#update_card').click(function() {
    $('#update_card_modal').modal('show');
});
$(document).ready(function() {
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
            data.append('card_id', '{{$card->id}}');
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
                url: "{{ route('update_card') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    //hide add card modal
                    $('#update_card_modal').modal('hide');
                    //show success message
                    toastr.success('Card Updated Successfully');
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
});
</script>
@endsection