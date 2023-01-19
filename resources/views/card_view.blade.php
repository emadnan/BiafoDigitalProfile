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
        <div class="business2 mt-5" id="download">
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
          <a href="#" id="update_card" class="btn btn-yellow"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
          
          <button type="button" class="btn btn-danger ml-4 delete-card"
                                            data-delete-card-id="{{ $card->id }}" data-bs-toggle="modal"
                                            data-bs-target="#deletecardmodal"><i class="fa-solid fa-trash-can"></i> Delete
                                        </button>
          </div>
          <div class="col-md-4"></div>
        </div>
    </div>
     <!-- Update Card Model -->
     <div class="modal fade" id="update_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="add_card" action="/add_card" method="POST" enctype="multipart/form-data">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
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
</div>
</div>
@endsection
@section('scripts')
<script>
  $('.delete-card').click(function(e) {
    $('#modaldeletecard').attr('href', '/delete_card/' + $(this).attr('data-delete-card-id'))
});
var qrcode = new QRCode("qrcode", {
    text: "www.google.com",
    width: 80,
    height: 80,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H,
});
$('#update_card').click(function() {
        $('#update_card_modal').modal('show');
    });
    $('#image').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection