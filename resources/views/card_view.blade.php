@extends('layouts.admin')
@section('content')
<link href="{{asset('frontend/css/card_styles.css')}}" rel="stylesheet" />
<div class="content-wrapper">
    <section class="content-header">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                    @if(empty($profile))
                <a href="/add_profile/{{$card->id}}/{{$type}}" class="btn btn-primary" style="float:right;margin-top:10px;">Add
                            Profile</a>
                            @endif
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="business2 mt-5" id="download">
            <div class="front">
                <div class="red">
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
                        <img src="{{asset('card_images')}}/{{$card->image_path}}" alt=""
                            style="height: 120px; width: 120px; border-radius: 25%" />
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

            <div class="back">
                <div class="top">
                </div>
                <div class="qricon">
                <a class="qr_anchor" href="/view_profile/{{$card->id}}">
                    <div id="qrcode">
                    </div>
</a>
                </div>
            </div>
            <!-- kdjaskd -->
        </div>
        <div class="row mt-3">
          <div class="col-md-3"></div>
          <div class="col-md-6 d-flex justify-content-center">
          <a href="#" id="update_card" class="btn btn-yellow"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
          
          <button type="button" class="btn btn-danger ml-4 delete-card"
                                            data-delete-card-id="{{ $card->id }}" data-bs-toggle="modal"
                                            data-bs-target="#deletecardmodal"><i class="fa-solid fa-trash-can"></i> Delete
                                        </button>
        <a href="/customize_card_index/{{$card->id}}/{{$type}}"  class="btn btn-yellow ml-4"><i class="fa-brands fa-figma"></i> Customize Card</a>
        <a href="/visting_card/{{$card->id}}/{{$type}}"  class="btn btn-green ml-4"><i class="fa-brands fa-card"></i> Visting Card</a>
          </div>
          <div class="col-md-3"></div>
        </div>
    </div>
     <!-- Update Card Model -->
     <div class="modal fade" id="update_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="update_card_form" action="/update_card/{{$card->id}}/{{$type}}" method="POST" enctype="multipart/form-data">
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
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{$card->email}}" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" value="{{$card->phone}}">
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
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" value="{{$card->city}}">
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
                    <button type="button" id="cropButton" class="btn btn-primary"><i class="fa-solid fa-crop"></i> Crop</button>
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
            imageSize: 0.7,
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
            if(cropper)
            {
            var croppedImage = cropper.getCroppedCanvas().toDataURL();
            croppedImageContainer.src = croppedImage;
            }
            else{
                var croppedImage = "no_image";
            }
            //hide image crop modal
            $('#image_crop_modal').modal('hide');
            var data= new FormData();
            data.append('_token','{{ csrf_token() }}');
            data.append('card_id','{{$card->id}}');
            data.append('image',croppedImage);
            data.append('name',$('#name').val());
            data.append('email',$('#email').val());
            data.append('phone',$('#phone').val());
            data.append('address',$('#address').val());
            data.append('city',$('#city').val());
            data.append('country',$('#country').val());
            data.append('website',$('#website').val());
            data.append('company',$('#company').val());
            data.append('designation',$('#designation').val());
            data.append('linkiden',$('#linkiden').val());

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