@extends('layouts.admin')
@section('content')
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
        <div class="row">
            <div class="col-md-2">
                <a style="text-decoration: none;" href="#" id="add_card" class="anchor">
                    <div class="card"
                        style="margin-top:50px;margin-left:20px; height:350px; background-color: rgba(173, 2, 28, 0.1); color:#ad021;border-radius:7%">
                        <div class="card-body">
                            <div class="justify-content-center text-center" style="margin-top:90px;">
                                <i style="font-size:65px;" class="fa-solid fa-plus"></i>
                            </div>
                            <div class="text-center mt-2">
                                <h5 style="color:#ad021;">Add Card</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @foreach ($cards as $card)
            <div class="col-md-2">
                <a style="text-decoration: none;" href="/view_card/{{$card->id}}" class="anchor">
                    <div class="card" style="margin-top:50px; height:350px; color:#ad021;border-radius:7%">
                        <img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" alt="..."
                            style="border-top-left-radius:7%;border-top-right-radius:7%;height:250px;">
                        <div class="card-body">
                            <div class="justify-content-center text-center">
                                <h3>{{$card->name}}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- add card Model -->
    <div class="modal fade" id="add_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="add_card" action="/add_card" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- //image -->
                        <div>
                            <h5><u>Add Card Here</u></h5>
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <img src="{{asset('frontend/img/your-image-here.jpg')}}" alt="image preview"
                                id="image_preview"
                                style="width: 200px; height: 200px; border-radius:50%;border: 5px solid;">
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}"
                                placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{Auth::user()->email}}" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" class="form-control" name="company" id="company"
                                placeholder="Enter Company">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation:</label>
                            <input type="text" class="form-control" name="designation" id="designation"
                                placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" name="country" id="country"
                                placeholder="Enter Country">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label for="linkiden">Linkiden:</label>
                            <input type="text" class="form-control" name="linkiden" id="linkiden"
                                placeholder="Enter Linkiden">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" name="website" id="website"
                                placeholder="Enter Website">
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
</div>


@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#add_card').click(function() {
        $('#add_card_modal').modal('show');
    });
});
//show image in image preview
$(document).ready(function() {
    $('#image').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
});
</script>
@endsection