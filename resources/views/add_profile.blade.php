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
        <div class="container">
            <div class='row'>
                <div class='col-md-12'>
                    <div class="card">
                        <div class="card-body">
                            <div class="justify-content-center text-center">
                                <h3 style="font-family:Palatino;font-weight:bold;">Add Profile</h3>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <img src="{{asset('card_images')}}/{{$card->image_path}}" alt="image preview"
                                    id="image_preview"
                                    style="width: 150px; height: 150px; border-radius:25%;border: 2px solid;">
                            </div>
                            <form id="add_profile" action="/insert_profile" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="card_id" value="{{$card->id}}">
                                <input type="hidden" name="type" value="{{$type}}">
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
                                                placeholder="Enter Your Full Name" value="{{$card->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Your Email" value="{{$card->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="phone">Phone No:</label>
                                            <input type="phone" class="form-control" id="phone" name="phone"
                                                placeholder="Enter Your Phone No" value="{{$card->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Enter Your Address" value="{{$card->address}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Enter Your City" value="{{$card->city}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="country">Country:</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                placeholder="Enter Your Country" value="{{$card->country}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea class="form-control" id="description" name="description" rows="1"
                                                placeholder="Enter Your Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top my-3"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 style="font-family:Palatino;font-weight:bold;">Social Links</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary float-right" id="add_social" style="float:right;"><i
                                                class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row" id="socials">
                                </div>
                                <div class="border-top my-3"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 style="font-family:Palatino;font-weight:bold;">Skills</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary float-right" id="add_skill" style="float:right;"><i
                                                class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row" id="skills">
                                </div>
                                <div class="border-top my-3"></div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h3 style="font-family:Palatino;font-weight:bold;">Experiences</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary float-right" id="add_experience"
                                            style="float:right;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row" id="experiences">
                                </div>
                                <div class="border-top my-3"></div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h3 style="font-family:Palatino;font-weight:bold;">Educations</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary float-right" id="add_education"
                                            style="float:right;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row" id="educations">
                                </div>
                                <div class="border-top my-3"></div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h3 style="font-family:Palatino;font-weight:bold;">Languages</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary float-right" id="add_language" style="float:right;"><i
                                                class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row" id="languages">
                                </div>
                                <div class="border-top my-3"></div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h3 style="font-family:Palatino;font-weight:bold;">Interests</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary float-right" id="add_interest" style="float:right;"><i
                                                class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="row" id="interests">
                                </div>
                                <div class="border-top mt-3"></div>
                                <div class="float-right mt-3">
                                    <button type="submit"
                                        class="btn btn-primary mt-3 rounded-pill py-2 px-3">Submit</button>
                                </div>
                            </form>
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
//add skill with delete whole row button
$(document).ready(function() {
    var i = 1;
    $('#add_skill').click(function() {
        i++;
        $('#skills').append('<div class="col-md-6" id="skill_row_name' + i +
            '"><div class="form-group"><label for="skill">Skill:</label><input type="text" class="form-control" id="skill" name="skill[]" placeholder="Enter Your Skill"></div></div><div class="col-md-6" id="skill_row_level' +
            i +
            '"><div class="form-group"><label for="skill">Skill Level:</label><select class="form-select" id="skill_level" name="skill_level[]" aria-label="Default select example"><option value="beginner" selected>Beginner</option><option value="intermediate">Intermediate</option><option value="advance">Advance</option></select><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
            i +
            '" style="float:right;" onclick="removeSkill(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
            );
    });
    removeSkill = (id) => {
        $('#skill_row_name' + id).remove();
        $('#skill_row_level' + id).remove();
    }
});
//add experience
$(document).ready(function() {
    var i = 1;
    $('#add_experience').click(function() {
        i++;
        $('#experiences').append('<div class="col-md-6" id="experice_row_company' + i +
            '"><div class="form-group"><label for="company">Company:</label><input type="text" class="form-control" id="company" name="company[]" placeholder="Enter Your Company"></div></div><div class="col-md-6" id="experice_row_position' +
            i +
            '"><div class="form-group"><label for="position">Position:</label><input type="text" class="form-control" id="position" name="position[]" placeholder="Enter Your Position"></div></div><div class="col-md-6" id="experice_row_start_date' +
            i +
            '"><div class="form-group"><label for="start_date">Start Date:</label><input type="date" class="form-control" id="start_date_exp" name="start_date_exp[]" placeholder="Enter Your Start Date"></div></div><div class="col-md-6" id="experice_row_end_date' +
            i +
            '"><div class="form-group"><label for="end_date">End Date:</label><input type="date" class="form-control" id="end_date_exp" name="end_date_exp[]" placeholder="Enter Your End Date"><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
            i +
            '" style="float:right;" onclick="removeExperience(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
            );
    });
    removeExperience = (id) => {
        $('#experice_row_company' + id).remove();
        $('#experice_row_position' + id).remove();
        $('#experice_row_start_date' + id).remove();
        $('#experice_row_end_date' + id).remove();
    }
});
//add education
$(document).ready(function() {
    var i = 1;
    $('#add_education').click(function() {
        i++;
        $('#educations').append('<div class="col-md-6" id="school_row' + i +
            '"><div class="form-group"><label for="school">School:</label><input type="text" class="form-control" id="school" name="school[]" placeholder="Enter Your School"></div></div><div class="col-md-6" id="degree_row' +
            i +
            '"><div class="form-group"><label for="degree">Degree:</label><input type="text" class="form-control" id="degree" name="degree[]" placeholder="Enter Your Degree"></div></div><div class="col-md-6" id="start_row' +
            i +
            '"><div class="form-group"><label for="start_date">Start Date:</label><input type="date" class="form-control" id="start_date" name="start_date[]" placeholder="Enter Your Start Date"></div></div><div class="col-md-6" id="end_row' +
            i +
            '"><div class="form-group"><label for="end_date">End Date:</label><input type="date" class="form-control" id="end_date" name="end_date[]" placeholder="Enter Your End Date"><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
            i +
            '" style="float:right;" onclick="removeEduction(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
            );
        removeEduction = (id) => {
            $('#school_row' + id).remove();
            $('#degree_row' + id).remove();
            $('#start_row' + id).remove();
            $('#end_row' + id).remove();
        }
    });
});
//add social link
$(document).ready(function() {
    var i = 1;
    $('#add_social').click(function() {
        i++;
        $('#socials').append('<div class="col-md-6" id="social_row_name' + i +
            '"><div class="form-group"><label for="social">Social Name:</label><select class="form-select" id="social_name" name="social_name[]" aria-label="Default select example"><option value="website" selected>Website</option><option value="github">Github</option><option value="linkedin">Linkedin</option><option value="facebook">Facebook</option></select></div></div><div class="col-md-6" id="social_row_link' +
            i +
            '"><div class="form-group"><label for="social_link">Social Link:</label><input type="text" class="form-control" id="social_link" name="social_link[]" placeholder="Enter Your Social Link"><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
            i +
            '" style="float:right;" onclick="removeSocial(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
            );
    });
    removeSocial = (id) => {
        $('#social_row_name' + id).remove();
        $('#social_row_link' + id).remove();
    }
});
//add language
$(document).ready(function() {
    var i = 1;
    $('#add_language').click(function() {
        i++;
        $('#languages').append('<div class="col-md-6" id="language_row_name' + i +
            '"><div class="form-group"><label for="language">Language Name:</label><input type="text" class="form-control" id="language_name" name="language_name[]" placeholder="Enter Your Language Name"></div></div><div class="col-md-6" id="language_row_level' +
            i +
            '"><div class="form-group"><label for="language_level">Language Level:</label><select class="form-select" id="language_level" name="language_level[]" aria-label="Default select example"><option value="beginner" selected>Beginner</option><option value="intermediate">Intermediate</option><option value="advanced">Advanced</option></select><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
            i +
            '" style="float:right;" onclick="removeLanguage(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
            );
    });
    removeLanguage = (id) => {
        $('#language_row_name' + id).remove();
        $('#language_row_level' + id).remove();
    }
});
//add interest
$(document).ready(function() {
    var i = 1;
    $('#add_interest').click(function() {
        i++;
        $('#interests').append('<div class="col-md-6" id="interest_row_name' + i +
            '"><div class="form-group"><label for="interest">Interest Name:</label><input type="text" class="form-control" id="interest_name" name="interest_name[]" placeholder="Enter Your Interest Name"></div></div><div class="col-md-6" id="interest_row_level' +
            i + '"><a  class="btn btn-danger btn-sm float-right mt-4" id="' + i +
            '" style="float:right;" onclick="removeInterest(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
            );
    });
    removeInterest = (id) => {
        $('#interest_row_name' + id).remove();
        $('#interest_row_level' + id).remove();
    }
});
//form validation of add_profile
$(document).ready(function() {
    $('#add_profile').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 11,
                maxlength: 15
            },
            address: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            city: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            country: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            description: {
                required: true,
                minlength: 3,
                maxlength: 500
            },
            company: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            position:{
                required: true,
                minlength: 3,
                maxlength: 50
            },
            start_date_exp: {
                required: true,
            },
            school: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            degree: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            start_date: {
                required: true,
            },
            social_name: {
                required: true,
            },
            social_link: {
                required: true,
            },
            language_name: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            language_level: {
                required: true,
            },
            interest_name: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must be at least 3 characters long",
                maxlength: "Your name must be at most 50 characters long"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address",
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Your phone number must be at least 11 characters long",
                maxlength: "Your phone number must be at most 15 characters long"
            },
            address: {
                required: "Please enter your address",
                minlength: "Your address must be at least 3 characters long",
            },
            city: {
                required: "Please enter your city",
                minlength: "Your city must be at least 3 characters long",
            },
            country: {
                required: "Please enter your country",
                minlength: "Your country must be at least 3 characters long",
            },
            description: {
                required: "Please enter your description",
                minlength: "Your description must be at least 3 characters long",
            },
            company: {
                required: "Please enter your company",
                minlength: "Your company must be at least 3 characters long",
            },
            position: {
                required: "Please enter your position",
                minlength: "Your position must be at least 3 characters long",
            },
            start_date_exp: {
                required: "Please enter your start date",
            },
            school: {
                required: "Please enter your school",
                minlength: "Your school must be at least 3 characters long",
            },
            degree: {
                required: "Please enter your degree",
                minlength: "Your degree must be at least 3 characters long",
            },
            start_date: {
                required: "Please enter your start date",
            },
            social_name: {
                required: "Please enter your social name",
            },
            social_link: {
                required: "Please enter your social link",
            },
            language_name: {
                required: "Please enter your language name",
                minlength: "Your language name must be at least 3 characters long",
            },
            language_level: {
                required: "Please enter your language level",
            },
            interest_name: {
                required: "Please enter your interest name",
                minlength: "Your interest name must be at least 3 characters long",
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass, error) {
            $(element).removeClass('is-invalid');
        }
    });
});

</script>
@endsection