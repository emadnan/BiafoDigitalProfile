@extends('layouts.admin')
@section('content')
@php
$permissions= session()->get('permissions');
@endphp
<style>
.modal-dialog {
    margin-top: 6%;
}

.contact_img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.contact-header {
    font-weight: bold;
    text-align: center;
}

/* .form-control{
        border-radius: 10px;
    } */
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
    <div class="container-fluid">
        <div class="row contact-header" id="headings">
            <div class="col-md-2">
            </div>
            <div class="col-md-2 mt-4">
                <p>Name</p>
            </div>
            <div class="col-md-2 mt-4">
                <p>Email</p>
            </div>
            <div class="col-md-2 mt-4">
                <p>Phone no.</p>
            </div>
            <div class="col-md-2 mt-4">
                <p>Company Name</p>
            </div>
            <div class="col-md-2 mt-4">
                <p>Designation</p>
            </div>
        </div>
        @if($contact_book->count() != 0)
        @foreach($contact_book as $contact)
        <a style="text-decoration: none;" class="anchor" 
        @if($contact->profile->card->id)
        href="/view_profile/{{$contact->profile->card->id}}"
        @endif
        >
            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-2">
                            <img src="{{asset('card_images')}}/{{$contact->profile->card->image_path}}"
                                class="contact_img" alt="Responsive image">
                        </div>
                        <div class="col-md-2 mt-4">
                            <h4>{{$contact->profile->name}}</h4>
                        </div>
                        <div class="col-md-2 mt-4">
                            <p>{{$contact->profile->email}}</p>
                        </div>
                        <div class="col-md-2 mt-4">
                            <p>{{$contact->profile->phone}}</p>
                        </div>
                        <div class="col-md-2 mt-4">
                            <p>{{$contact->profile->card->company}}</p>
                        </div>
                        <div class="col-md-2 mt-4">
                            <p>{{$contact->profile->card->designation}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </a>
        @endforeach
        @else
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">No contacts found</h3>
            </div>
            <div class="col-md-12">
                <h3 class="text-center">Add contacts to your contact book</h3>
            </div>
        </div>
        @endif
    </div>

</div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    if ($(window).width() < 797) {
        $('#headings').remove();
    }
});
</script>
@endsection