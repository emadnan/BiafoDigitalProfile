@extends('layouts.admin')
@section('content')
<style>
    .bg-light {
        background-color: #E5F2FF
    }
    </style>
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
            <div class="card">
                <div class="card-body">
                    <div class="justify-content-center text-center">
                        <h3 style="font-family:Palatino;font-weight:bold;">Update Profile</h3>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <img src="{{asset('card_images')}}/{{$card->image_path}}" alt="image preview" id="image_preview"
                            style="width: 200px; height: 200px; border-radius:25%;border: 2px solid;">
                    </div>
                    <form id="add_profile" action="/update_profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="card_id" value="{{$card->id}}">
                        <input type="hidden" name="profile_id" value="{{$profile->id}}">
                        <div class="row">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-2">
                                <div class="form-group mt-2">
                                    <!-- <input type="file" class="form-control" id="image" name="image"> -->
                                </div>
                            </div>
                            <div class="col-md-5 mt-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    @if(Auth::user()->user_type == 'company_user')
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Your Full Name" value="{{$profile->name}}" readonly>
                                    @else
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Your Full Name" value="{{$profile->name}}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    @if(Auth::user()->user_type == 'company_user')
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Your Email" value="{{$profile->email}}" readonly>
                                    @else
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Your Email" value="{{$profile->email}}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="personal_email">Personal Email:</label>
                                    <input type="email" class="form-control" id="personal_email" name="personal_email"
                                        placeholder="Enter Your Personal Email" value="{{$profile->personal_email}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="phone">Phone No:</label>
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Your Phone No" value="{{$profile->phone}}">
                                        <help class="">e.g+92-331********</help>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    @if(Auth::user()->user_type == 'company_user')
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter Your Address" value="{{$profile->address}}" readonly>
                                    @else
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter Your Address" value="{{$profile->address}}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    @if(Auth::user()->user_type == 'company_user')
                                    <select name="city" id="city" class="form-control" readonly>
                                        <option value="">Select City</option>
                                        @foreach($cities as $city)
                                        @if($profile->city_id == $city->id)
                                        <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                        @else
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @else
                                    <select name="city" id="city" class="form-control">
                                        <option value="">Select City</option>
                                        @foreach($cities as $city)
                                        @if($profile->city_id == $city->id)
                                        <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                        @else
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    @if(Auth::user()->user_type == 'company_user')
                                    <select name="country" id="country" class="form-control" readonly>
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                        @if($profile->country_id == $country->id)
                                        <option value="{{$country->id}}" selected>{{$country->name}}</option>
                                        @else
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @else
                                    <select name="country" id="country" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                        @if($profile->country_id == $country->id)
                                        <option value="{{$country->id}}" selected>{{$country->name}}</option>
                                        @else
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        placeholder="Enter Your Date of Birth" value="{{$profile->dob}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Enter Your Description">{{$profile->description}}</textarea>
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
                            @if($profile->social_links)
                            @foreach($profile->social_links as $social)
                            <div class="col-md-6" id="exist_social_name_{{$social->id}}">
                                <div class="form-group"><label for="social">Social Name:</label><select
                                        class="form-select" id="social_name" name="social_name[]"
                                        aria-label="Default select example">
                                        @if($social->social_name == 'website')
                                        <option value="website" selected>Website</option>
                                        @else
                                        <option value="website">Website</option>
                                        @endif
                                        @if($social->social_name == 'github')
                                        <option value="github" selected>Github</option>
                                        @else
                                        <option value="github">Github</option>
                                        @endif
                                        @if($social->social_name == 'linkedin')
                                        <option value="linkedin" selected>Linkedin</option>
                                        @else
                                        <option value="linkedin">Linkedin</option>
                                        @endif
                                        @if($social->social_name == 'facebook')
                                        <option value="facebook" selected>Facebook</option>
                                        @else
                                        <option value="facebook">Facebook</option>
                                        @endif
                                    </select></div>
                            </div>
                            <div class="col-md-6" id="exist_social_link_{{$social->id}}">
                                <div class="form-group"><label for="social_link">Social Link:</label><input type="text"
                                        class="form-control" id="social_link" name="social_link[]"
                                        placeholder="Enter Your Social Link" value="{{$social->social_link}}"><a
                                        class="btn btn-danger btn-sm float-right mt-3" id="{{$social->id}}"
                                        style="float:right;" onclick="removeSocialexist(this.id)"><i
                                            class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="border-top my-3"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="font-family:Palatino;font-weight:bold;">Skills</h3>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="row" id="skills">
                            <div class="form-group">
                                <label for="skill">Enter your Skills:</label>
                                <input type="text" class="form-control" name="skills" id="skills"
                                    value="{{$profile->skills}}">
                            </div>
                        </div>
                        <div class="border-top my-3"></div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h3 style="font-family:Palatino;font-weight:bold;">Experiences</h3>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary float-right" id="add_experience" style="float:right;"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="row" id="experiences">
                            @if($profile->experiences)
                            @foreach($profile->experiences as $experience)
                            <div class="col-md-6" id="exist_experice_company_{{$experience->id}}">
                                <div class="form-group"><label for="company">Company:</label><input type="text"
                                        class="form-control" id="company" name="company[]"
                                        placeholder="Enter Your Company" value="{{$experience->company}}">
                                </div>
                            </div>
                            <div class="col-md-6" id="exist_experice_position_{{$experience->id}}">
                                <div class="form-group"><label for="position">Position:</label><input type="text"
                                        class="form-control" id="position" name="position[]"
                                        placeholder="Enter Your Position" value="{{$experience->position}}">
                                </div>
                            </div>
                            <div class="col-md-6" id="exist_experice_start_date_{{$experience->id}}">
                                <div class="form-group"><label for="start_date">Start Date:</label><input type="date"
                                        class="form-control" id="start_date_exp" name="start_date_exp[]"
                                        placeholder="Enter Your Start Date" value="{{$experience->start_date}}"></div>
                            </div>
                            <div class="col-md-6" id="exist_experice_end_date_{{$experience->id}}">
                                <div class="form-group"><label for="end_date">End Date:</label><input type="date"
                                        class="form-control" id="end_date_exp" name="end_date_exp[]"
                                        placeholder="Enter Your End Date" value="{{$experience->end_date}}"><a
                                        class="btn btn-danger btn-sm float-right mt-3" id="{{$experience->id}}"
                                        style="float:right;" onclick="removeExperience_exist(this.id)"><i
                                            class="fa-solid fa-trash"></i></a></div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="border-top my-3"></div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h3 style="font-family:Palatino;font-weight:bold;">Educations</h3>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary float-right" id="add_education" style="float:right;"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="row" id="educations">
                            @if($profile->educations)
                            @foreach($profile->educations as $education)
                            <div class="col-md-6" id="exist_school_{{$education->id}}">
                                <div class="form-group"><label for="school">School:</label><input type="text"
                                        class="form-control" id="school" name="school[]" placeholder="Enter Your School"
                                        value="{{$education->school}}">
                                </div>
                            </div>
                            <div class="col-md-6" id="exist_degree_{{$education->id}}">
                                <div class="form-group"><label for="degree">Degree:</label><input type="text"
                                        class="form-control" id="degree" name="degree[]" placeholder="Enter Your Degree"
                                        value="{{$education->degree}}">
                                </div>
                            </div>
                            <div class="col-md-6" id="exist_start_{{$education->id}}">
                                <div class="form-group"><label for="start_date">Start Date:</label><input type="date"
                                        class="form-control" id="start_date" name="start_date[]"
                                        placeholder="Enter Your Start Date" value="{{$education->start_date}}">
                                </div>
                            </div>
                            <div class="col-md-6" id="exist_end_{{$education->id}}">
                                <div class="form-group"><label for="end_date">End Date:</label><input type="date"
                                        class="form-control" id="end_date" name="end_date[]"
                                        placeholder="Enter Your End Date" value="{{$education->end_date}}"><a
                                        class="btn btn-danger btn-sm float-right mt-3" id="{{$education->id}}"
                                        style="float:right;" onclick="removeEductionexist(this.id)"><i
                                            class="fa-solid fa-trash"></i></a></div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="border-top my-3"></div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h3 style="font-family:Palatino;font-weight:bold;">Languages</h3>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="row" id="languages">
                            <div class="form-group">
                                <label for="language">Enter your Languages:</label>
                                <input type="text" class="form-control" name="languages" id="languages"
                                    value="{{$profile->languages}}">
                            </div>
                        </div>
                        <div class="border-top my-3"></div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h3 style="font-family:Palatino;font-weight:bold;">Interests</h3>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="row" id="interests">
                            <div class="form-group">
                                <label for="interest">Enter your Interests:</label>
                                <input type="text" class="form-control" name="interests" id="interests"
                                    value="{{$profile->interests}}">
                            </div>
                        </div>
                        <div class="border-top mt-3"></div>
                        <div class="float-right mt-3">
                            <button type="submit"
                                class="btn btn-primary float-right mt-3 rounded-pill py-2 px-3">Submit</button>
                        </div>
                    </form>
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
});
//add skill with delete whole row button
$(document).ready(function() {
    // var i = 1;
    // $('#add_skill').click(function() {
    //     i++;
    //     $('#skills').append('<div class="col-md-6" id="skill_row_name' + i +
    //         '"><div class="form-group"><label for="skill">Skill:</label><input type="text" class="form-control" id="skill" name="skill[]" placeholder="Enter Your Skill"></div></div><div class="col-md-6" id="skill_row_level' +
    //         i +
    //         '"><div class="form-group"><label for="skill">Skill Level:</label><select class="form-select" id="skill_level" name="skill_level[]" aria-label="Default select example"><option value="beginner" selected>Beginner</option><option value="intermediate">Intermediate</option><option value="advance">Advance</option></select><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
    //         i +
    //         '" style="float:right;" onclick="removeSkill(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
    //     );
    // });
    // removeSkill = (id) => {
    //     $('#skill_row_name' + id).remove();
    //     $('#skill_row_level' + id).remove();
    // }
    $('input[name="skills"]').amsifySuggestags({
        type: 'amsify',
        suggestions: [
            @foreach($skills as $skill)
            '{{$skill->skill_name}}',
            @endforeach
        ],
        defaultTagClass: 'bg-light',
        // whiteList: true
    });
});
// removeSkillexist = (id) => {
//     $('#exist_skill_name_' + id).remove();
//     $('#exist_skill_level_' + id).remove();
// }
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
removeExperience_exist = (id) => {
    $('#exist_experice_company_' + id).remove();
    $('#exist_experice_position_' + id).remove();
    $('#exist_experice_start_date_' + id).remove();
    $('#exist_experice_end_date_' + id).remove();
}
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
removeEductionexist = (id) => {
    $('#exist_school_' + id).remove();
    $('#exist_degree_' + id).remove();
    $('#exist_start_' + id).remove();
    $('#exist_end_' + id).remove();
}
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
removeSocialexist = (id) => {
    $('#exist_social_name_' + id).remove();
    $('#exist_social_link_' + id).remove();
}
//add language
$(document).ready(function() {
    // var i = 1;
    // $('#add_language').click(function() {
    //     i++;
    //     $('#languages').append('<div class="col-md-6" id="language_row_name' + i +
    //         '"><div class="form-group"><label for="language">Language Name:</label><input type="text" class="form-control" id="language_name" name="language_name[]" placeholder="Enter Your Language Name"></div></div><div class="col-md-6" id="language_row_level' +
    //         i +
    //         '"><div class="form-group"><label for="language_level">Language Level:</label><select class="form-select" id="language_level" name="language_level[]" aria-label="Default select example"><option value="beginner" selected>Beginner</option><option value="intermediate">Intermediate</option><option value="advanced">Advanced</option></select><a  class="btn btn-danger btn-sm float-right mt-3" id="' +
    //         i +
    //         '" style="float:right;" onclick="removeLanguage(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
    //     );
    // });
    // removeLanguage = (id) => {
    //     $('#language_row_name' + id).remove();
    //     $('#language_row_level' + id).remove();
    // }
    $('input[name="languages"]').amsifySuggestags({
        type: 'amsify',
        suggestions: [
            @foreach($languages as $language)
            '{{$language->language_name}}',
            @endforeach
        ],
        defaultTagClass: 'bg-light',
        // whiteList: true
    });
});
// removeLanguage_exist = (id) => {
//     $('#exist_language_name_' + id).remove();
//     $('#exist_language_level_' + id).remove();
// }
//add interest
$(document).ready(function() {
    // var i = 1;
    // $('#add_interest').click(function() {
    //     i++;
    //     $('#interests').append('<div class="col-md-6" id="interest_row_name' + i +
    //         '"><div class="form-group"><label for="interest">Interest Name:</label><input type="text" class="form-control" id="interest_name" name="interest_name[]" placeholder="Enter Your Interest Name"></div></div><div class="col-md-6" id="interest_row_level' +
    //         i + '"><a  class="btn btn-danger btn-sm float-right mt-5" id="' + i +
    //         '" style="float:right;" onclick="removeInterest(this.id)"><i class="fa-solid fa-trash"></i></a></div></div>'
    //     );
    // });
    // removeInterest = (id) => {
    //     $('#interest_row_name' + id).remove();
    //     $('#interest_row_level' + id).remove();
    // }
    $('input[name="interests"]').amsifySuggestags({
        type: 'amsify',
        suggestions: [
            @foreach($interests as $interest)
            '{{$interest->interest_name}}',
            @endforeach
        ],
        defaultTagClass: 'bg-light',
        // whiteList: true
    });
});
// removeInterest_exist = (id) => {
//     $('#exist_interest_name_' + id).remove();
//     $('#exist_interest_btn_' + id).remove();
// }
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
            personal_email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 16
            },
            address: {
                required: true,
                minlength: 3,
                maxlength: 300
            },
            city: {
                required: true,
            },
            country: {
                required: true,
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
            position: {
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
            personal_email: {
                required: "Please enter your personal email",
                email: "Please enter a valid email address",
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Your phone number must be at least 10 characters long",
                maxlength: "Your phone number must be at most 16 characters long"
            },
            address: {
                required: "Please enter your address",
                minlength: "Your address must be at least 3 characters long",
            },
            city: {
                required: "Please enter your city",
            },
            country: {
                required: "Please enter your country",
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