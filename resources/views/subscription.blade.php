@extends('layouts.admin')
@section('content')
@php
$permissions= session()->get('permissions');
$is_new = session()->get('is_new');
@endphp
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <button type="button" id="addSubcriptionBtn" class="btn btn-primary float-right">
                        Add Subscription Plan </button>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Subscription Name</th>
                                    <th scope="col">Subscription Type</th>
                                    <th scope="col">No. of Cards</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Can Use Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $subscription)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $subscription->name}}</td>
                                    <td>{{ $subscription->type }}</td>
                                    <td>{{ $subscription->no_of_cards }}</td>
                                    <td>{{ $subscription->amount }}</td>
                                    @if($subscription->use_username == 1)
                                    <td>Yes</td>
                                    @else
                                    <td>No</td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm delete-subscription"
                                            data-delete-subscription-id="{{ $subscription->id }}" data-bs-toggle="modal"
                                            data-bs-target="#deletemodal"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm edit-subscription"
                                            data-subscription-id="{{ $subscription->id }}" 
                                            data-subscription-name="{{ $subscription->name }}"
                                            data-subscription-type="{{ $subscription->type }}"
                                            data-subscription-no_of_cards="{{ $subscription->no_of_cards }}"
                                            data-subscription-amount="{{ $subscription->amount }}"
                                            data-subscription-use_username="{{ $subscription->use_username }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editmodal"><i class="fa-solid fa-pen-to-square"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal addSubcriptionModal -->
    <div class="modal fade" id="addSubcriptionModal" tabindex="-1" role="dialog" aria-labelledby="addSubcriptionModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Subscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/add_subscription" id="addSubscriptionForm" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="name">Subscription Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Subscription Name">
                            </div>
                            <div class="form-group">
                                <label for="type">Subscription Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="">Select Subscription Type</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Yearly">Yearly</option>
                                    <option value="Life-Time">Life-Time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_of_cards">No. of Cards</label>
                                <input type="number" class="form-control" id="no_of_cards" name="no_of_cards"
                                    placeholder="Enter Number of Cards">
                            </div>
                            <div class="form-group">
                                <label for="amount">Subscription Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount"
                                    placeholder="Enter Subscription Price">
                                <small id="priceHelp" class="form-text text-muted">Enter price in USD</small>
                            </div>
                            <div class="form-group">
                                <label for="can_username">Can use Username</label>
                                <select class="form-control" id="can_username" name="can_username">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!-- Modal delete -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Subcription</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <p>Are you Sure to delete this Subcription?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a class="btn btn-danger" href="" role="button" id="modaldelete">Delete</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Subscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="updateSubscriptionForm" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="name">Subscription Name</label>
                                <input type="text" class="form-control" id="update_name" name="name"
                                    placeholder="Enter Subscription Name">
                            </div>
                            <div class="form-group">
                                <label for="type">Subscription Type</label>
                                <select class="form-control" id="update_type" name="type">
                                    <option value="">Select Subscription Type</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Yearly">Yearly</option>
                                    <option value="Life-Time">Life-Time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_of_cards">No. of Cards</label>
                                <input type="number" class="form-control" id="update_no_of_cards" name="no_of_cards"
                                    placeholder="Enter Number of Cards">
                            </div>
                            <div class="form-group">
                                <label for="amount">Subscription Amount</label>
                                <input type="text" class="form-control" id="update_amount" name="amount"
                                    placeholder="Enter Subscription Price">
                                <small id="priceHelp" class="form-text text-muted">Enter price in USD</small>
                            </div>
                            <div class="form-group">
                                <label for="can_username">Can use Username</label>
                                <select class="form-control" id="update_can_username" name="can_username">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
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
    $('#addSubcriptionBtn').click(function() {
        $('#addSubcriptionModal').modal('show');
    });
    $('.delete-subscription').click(function() {
        var id = $(this).data('delete-subscription-id');
        var url = "/delete_subscription/" + id;
        $("#modaldelete").attr("href", url);
    });
    $('.edit-subscription').click(function() {
        var id = $(this).data('subscription-id');
        var url = "/update_subscription/" + id;
        var name = $(this).data('subscription-name');
        var type = $(this).data('subscription-type');
        var no_of_cards = $(this).data('subscription-no_of_cards');
        var amount = $(this).data('subscription-amount');
        var can_username = $(this).data('subscription-use_username');
        $("#updateSubscriptionForm").attr("action", url);
        $("#update_name").val(name);
        $("#update_type").val(type);
        $("#update_no_of_cards").val(no_of_cards);
        $("#update_amount").val(amount);
        $("#update_can_username").val(can_username);
    });
    //addSubscriptionForm validation
    $('#addSubscriptionForm').validate({
        rules: {
            name: {
                required: true,
            },
            type: {
                required: true,
            },
            no_of_cards: {
                required: true,
            },
            amount: {
                required: true,
            },
            can_username: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Please enter subscription name",
            },
            type: {
                required: "Please select subscription type",
            },
            no_of_cards: {
                required: "Please enter number of cards",
            },
            amount: {
                required: "Please enter subscription price",
            },
            can_username: {
                required: "Please select can use username",
            },
        }
    });
    $('#updateSubscriptionForm').validate({
        rules: {
            name: {
                required: true,
            },
            type: {
                required: true,
            },
            no_of_cards: {
                required: true,
            },
            amount: {
                required: true,
            },
            can_username: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Please enter subscription name",
            },
            type: {
                required: "Please select subscription type",
            },
            no_of_cards: {
                required: "Please enter number of cards",
            },
            amount: {
                required: "Please enter subscription price",
            },
            can_username: {
                required: "Please select can use username",
            },
        }
    });
});
</script>
@endsection