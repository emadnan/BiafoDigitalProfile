<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cardify</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="{{asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
</head>
<style>
html {
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
    /* border-radius: 50px; */
}

.card-img-top {
    /* give buttom waved curve */
    border-bottom: 10px solid #0056D2;
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
    width: 50px;
    height: 50px;
    background-color: #0056D2;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    color: white;
    font-size: 20px;
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
</style>

<body style="background-color:#f1f1f1;">
    <!-- <a href="/edit_profile/{{$profile->card_id}}" class="float" role="button">
        <i class="fa-solid fa-pen-to-square my-float"></i>
    </a> -->
    <div class="container">
        <div class="row" id="content">
            <div class="col-sm-4"></div>
            <div class="col-lg-4">
                <!-- Profile Here -->
                <div class="card">
                    <img src="{{asset('card_images')}}/{{$card->image_path}}" class="card-img-top" alt="...">
                    <!-- <div class="line"></div> -->

                    <div class="card-body">
                        <p style="text-align: left; font-size: 30px; font-weight: bold;">
                            {{$card->name}}</p>
                        <p style="text-align: left; font-size: 25px; font-weight: bold; color:#0056D2">
                            {{$card->designation}}</p>
                        <p style="text-align: left; font-size: 20px; font-weight: bold; color:#0056D2">
                            {{$card->company}}</p>
                        <p style="text-align: left; font-size: 17px; font-weight: bold; color:grey">
                            {{$profile->description}}</p>
                    </div>
                </div>
                <!-- personal details -->
                <div class="details">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-md-10 mt-2">
                            <p class="card-text" style="font-family:Palatino;font-size:18px;">{{$card->email}}
                            </p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <!-- <a href="tel:{{$card->phone}}" class="btn btn-primary btn-sm"
                                style="border-radius: 50px;"><i class="fa-solid fa-phone"></i>
                            </a> -->
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div class="col-md-10 mt-2">
                            <p class="card-text" style="font-family:Palatino;font-size:18px;">
                                {{$profile->phone}}</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <div class="icon">
                                    <i class="fa-solid fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-10 mt-2">
                                <p class="card-text" style="font-family:Palatino;font-size:18px;">
                                    {{$profile->address}}, {{$profile->city->name}}, {{$profile->country->name}}
                                </p>
                            </div>
                        </div>
                        @foreach($profile->social_links as $link)
                        <a href="{{$link->social_link}}" style= "text-decoration: none;">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <div class="icon">
                                    @if($link->social_name == 'facebook')
                                    <i class="fa-brands fa-facebook-f"></i>
                                    @elseif($link->social_name == 'github')
                                    <i class="fa-brands fa-github"></i>
                                    @elseif($link->social_name == 'website')
                                    <i class="fa-solid fa-globe"></i>
                                    @elseif($link->social_name == 'linkedin')
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-10 mt-2">
                                <p class="card-text" style="font-family:Palatino;font-size:18px;">
                                    {{$link->social_link}}</p>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <!-- skills -->
                @if($skills[0] != null)
                <div class="skills">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 18px; color:#0056D2">Skills</h5>
                            <div class="row">
                                @foreach($skills as $skill)
                                <div class="pills mt-1">
                                    <p>{{$skill}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- experience -->
                @if(!$profile->experiences->isEmpty())
                <div class="experience">
                    <div class="card" style="border-radius:15px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 18px; color:#0056D2">Experience</h5>
                            @foreach($profile->experiences as $experience)
                            <p class="card-text" style=";font-size:18px; font-weight:bold;">
                                {{$experience->position}}
                            </p>
                            <p class="card-text" style="font-size:15px; color:grey;">
                                {{$experience->company}}
                            </p>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-2">
                                    <div class="icon2">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                </div>
                                <div class="col-md-10 mt-1">
                                    <p class="card-text" style="font-family:Palatino;font-size:18px;">
                                        {{$experience->start_date}} -
                                        @if($experience->end_date == null)
                                        Present
                                        @else
                                        {{$experience->end_date}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <!-- education -->
                @if(!$profile->educations->isEmpty())
                <div class="education">
                    <div class="card" style="border-radius:15px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 18px; color:#0056D2">Education</h5>
                            @foreach($profile->educations as $education)
                            <p class="card-text" style=";font-size:18px; font-weight:bold;">
                                {{$education->degree}}
                            </p>
                            <p class="card-text" style="font-size:15px; color:grey;">
                                {{$education->school}}
                            </p>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-2">
                                    <div class="icon2">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                </div>
                                <div class="col-md-10 mt-1">
                                    <p class="card-text" style="font-family:Palatino;font-size:18px;">
                                        {{$education->start_date}} -
                                        @if($education->end_date == null)
                                        Present
                                        @else
                                        {{$education->end_date}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <!-- languages -->
                @if($languages[0] != null)
                <div class="languages">
                    <h5 class="card-title" style="font-size: 18px; color:#0056D2">Languages</h5>
                    <div class="row">
                        @foreach($languages as $language)
                        <div class="col-md-2 mt-1">
                            <p>{{$language}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <!-- interests -->
                @if($interests[0] != null)
                <div class="interests">
                    <h5 class="card-title" style="font-size: 18px; color:#0056D2">Interests</h5>
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            <p>{{$profile->interests}}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row mt-5 mb-4 bottomSheetRow">
            <div class="col-md-5"></div>
            <div class="col-md-2 d-flex justify-content-center">
                <button id="openBtn"><i class="fa-solid fa-floppy-disk"></i> Save Contact</button>
                <div id="bottomSheet">
                    <div id="bottomSheetContent">
                        <h2>Save Contact</h2>
                        <p>Want to save contact?</p>
                        <button id="saveBtn" data-profile-id="{{$profile->id}}"><i class="fa-solid fa-floppy-disk"></i>
                            Save</button>
                        <button id="closeBtn"><i class="fa-solid fa-square-xmark"></i> Close</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</script>
<!-- Core theme JS-->
<script src="{{asset('frontend/js/scripts.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('frontend\css\bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend\css\fontawesome\css\all.css') }}" rel="stylesheet">
<link href="{{ asset('frontend\css\jquery.multiselect.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome-free/css/all.min.css') }}">
</body>
<script>
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const bottomSheet = document.getElementById('bottomSheet');
const saveBtn = document.getElementById('saveBtn');
openBtn.addEventListener('click', () => {
    //animationcome from buttom
    bottomSheet.classList.add('bottom-sheet--open');
    bottomSheet.style.display = 'block';
    //blur all the body content exept the bottom sheet
});

closeBtn.addEventListener('click', () => {
    bottomSheet.style.display = 'none';
});
saveBtn.addEventListener('click', () => {
    //download a contact file
    var contact = {
        name: "{{$profile->name}}",
        email: "{{$profile->email}}",
        phone: "{{$profile->phone}}",
        address: "{{$profile->address}}"
    };

    // Convert the contact information to a vCard format
    var vcard = "BEGIN:VCARD\n" +
        "VERSION:3.0\n" +
        "N:" + contact.name + "\n" +
        "EMAIL:" + contact.email + "\n" +
        "TEL:" + contact.phone + "\n" +
        "ADR:" + contact.address + "\n" +
        "END:VCARD";

    // Create a blob with the vCard data
    var blob = new Blob([vcard], {
        type: "text/vcard"
    });

    // Create a download link for the contact file
    var downloadLink = document.createElement("a");
    downloadLink.href = URL.createObjectURL(blob);
    downloadLink.download = contact.name + ".vcf";

    // Add the download link to the page and click it
    document.body.appendChild(downloadLink);
    downloadLink.click();
});
</script>

</html>