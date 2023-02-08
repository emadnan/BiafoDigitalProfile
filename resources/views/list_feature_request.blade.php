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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Request</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_feature_requests as $feature_request)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $feature_request->name}}</td>
                                    <td>{{ $feature_request->email }}</td>
                                    <td>{{ $feature_request->phone }}</td>
                                    <td>{{ $feature_request->request }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection