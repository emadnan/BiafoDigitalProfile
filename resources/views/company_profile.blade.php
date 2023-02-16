@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header mb-4">
        <div class='container-fluid'>
            <div class="container">
                <div class='row'>
                    <div class='col-md-8'>
                        <!-- <h2 style="font-family:Palatino;font-weight:bold;">Company Profile <button
                                class="btn btn-primary" id="edit_profile"><i class="fa-solid fa-pencil"></i></button>
                        </h2> -->
                    </div>
                    <div class='col-md-4'>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class='container-fluid'>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="row mt-5">
                                <div class="col-md-12 mb-3">
                                <button class="btn btn-primary float-right" id="edit_profile"><i class="fa-solid fa-pencil"></i></button>
                                    <img src="{{asset('company_logos')}}/{{$company->logo}}" alt="image preview"
                                        class="img-fluid" style="height: 100px;">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold; text-align:left">Name</h3>
                                </div>
                                <div class="col-md-9">
                                    <h5 style="font-family:Palatino;">{{$company->company_name}}</h3>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold; text-align:left">Website</h3>
                                </div>
                                <div class="col-md-9">
                                    <h5 style="font-family:Palatino;">{{$company->website}}</h3>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold; text-align:left">Linkedin</h3>
                                </div>
                                <div class="col-md-9">
                                    <h5 style="font-family:Palatino;">{{$company->linkedin}}</h3>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold; text-align:left">Address</h3>
                                </div>
                                <div class="col-md-9">
                                    <h5 style="font-family:Palatino;">{{$company->address}}</h3>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold; text-align:left">City</h3>
                                </div>
                                <div class="col-md-9">
                                    <h5 style="font-family:Palatino;">{{$company->city->name}}</h3>
                                </div>
                                <div class="col-md-3">
                                    <h5 style="font-family:Palatino;font-weight:bold; text-align:left">Country</h3>
                                </div>
                                <div class="col-md-9">
                                    <h5 style="font-family:Palatino;">{{$company->country->name}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('frontend/img/company_profile_2.png')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Profile  Modal  -->
    <div class="modal fade bd-example-modal-lg" id="update_company_profile_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="company_profile_form" action="/update_company/{{$company->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <h5 style="text-transform:uppercase; padding:12px; text-align:center; border-radius:25px 10px; background-color:#ad021c ;color:white; border:2px solid #ad021c"> Update Your Company Profile</h5>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{asset('company_logos')}}/{{$company->logo}}" alt="image preview"
                                    id="logo_preview"
                                    style="height: 200px; padding:10px;border: 2px solid;">
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
                                        placeholder="Enter Your Company Name" value="{{$company->company_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Company Linkedin:</label>
                                    <input type="text" class="form-control" name="company_linkedin" id="company_linkedin"
                                        placeholder="Enter Your Company Linkedin" value="{{$company->linkedin}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Company Website:</label>
                                    <input type="text" class="form-control" name="company_website" id="company_website"
                                        placeholder="Enter Your Company Website" value="{{$company->website}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Country: <span style="color:red;">*</span></label>
                                    <select name="company_country" id="company_country" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                        @if($company->country_id == $country->id)
                                        <option value="{{$country->id}}" selected>{{$country->name}}</option>
                                        @else
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">City: <span style="color:red;">*</span></label>
                                    <select name="company_city" id="company_city" class="form-control">
                                        <option value="">Select City</option>
                                        @foreach ($cities as $city)
                                        @if($company->city_id == $city->id)
                                        <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                        @else
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Company Address: <span style="color:red;">*</span></label>
                                    <textarea class="form-control" name="company_address" id="company_address"
                                        placeholder="Enter Your Company Address">{{$company->address}}</textarea>
                                </div>
                            </div>
                        </div>
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
@endsection
@section('scripts')
<script>
    var country = document.getElementById("company_country");
    var city = document.getElementById("company_city");
    $(document).ready(function () {
        country.addEventListener('change',function(){
        var country_id = this.value;
        // alert(country_id);
        var url = "/cities/"+country_id;
        $.ajax({
            url:url,
            type:'GET',
            success:function(data){
                console.log(city);
                var cities = data;
                var html = '<option value="">Select City</option>';
                for(var i=0;i<cities.length;i++){
                    html += '<option value="'+cities[i].id+'">'+cities[i].name+'</option>';
                }
                city.innerHTML = html;
            }
        });
    });
        var edit_company_profile = $('#edit_profile');
        edit_company_profile.on('click', function () {
            $('#update_company_profile_modal').modal('show');
        });
    });
    var logo=document.getElementById("logo");
    var logo_preview=document.getElementById("logo_preview");
    logo.addEventListener('change',function(){
        var reader=new FileReader();
        reader.onload=function(){
            logo_preview.src=reader.result;
        }
        reader.readAsDataURL(this.files[0]);
    });
    $('#company_profile_form').validate({
    rules:{
        logo:{
            extension:"png",
        },
        company_name:{
            required:true,
        },
        company_address:{
            required:true,
        },
        company_city:{
            required:true,
        },
        company_country:{
            required:true,
        },
    },
    messege:{
        logo:{
            extension:"Please Select Valid Logo",
        },
        company_name:{
            required:"Please Enter Company Name",
        },
        company_address:{
            required:"Please Enter Company Address",
        },
        company_city:{
            required:"Please Enter Company City",
        },
        company_country:{
            required:"Please Enter Company Country",
        },
    },
});
</script>
@endsection