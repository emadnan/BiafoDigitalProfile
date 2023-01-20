@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-8'>
                </div>
                <div class='col-md-4'>
                </div>
            </div>
        </div>
    </section>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-body">
                        <div class="justify-content-center text-center">
                            <h3 style="font-family:Palatino;font-weight:bold;">Add Profile</h3>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{asset('frontend/img/your-image-here.jpg')}}" alt="image preview"
                                id="image_preview"
                                style="width: 150px; height: 150px; border-radius:25%;border: 2px solid;">
                        </div>
                        <form id="add_profile">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mt-2">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Full Name:</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Your Full Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="phone">Phone No:</label>
                                        <input type="phone" class="form-control" id="phone" name="phone"
                                            placeholder="Enter Your Phone No">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter Your Address">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter Your City">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="country">Country:</label>
                                        <input type="text" class="form-control" id="country" name="country"
                                            placeholder="Enter Your Country">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
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