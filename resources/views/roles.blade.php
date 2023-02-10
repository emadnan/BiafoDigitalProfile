@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class='container'>
            <div class='row'>
                <div class='col-md-8'>
                    <h2>Roles</h2>
                </div>
                <div class='col-md-4'>
                    <button type="button" class="btn btn-primary float-right" id="addRole">
                        Add Role
                    </button>
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
                            <table class="table" style="text-align:center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Role</th>
                                        <th scope="col" width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration}}</th>
                                        <td>{{ $role->role}}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger update-role"
                                                data-role-id="{{ $role->id }}" data-role-name="{{$role->role}}"
                                                data-bs-toggle="modal" data-bs-target="#updateRoleModal"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i> Update </button>
                                            <button type="button" class="btn btn-danger delete-role"
                                                data-delete-role-id="{{ $role->id }}" data-bs-toggle="modal"
                                                data-bs-target="#deletefilemodal"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Delete </button>
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
        <!-- Add Role Modal -->
        <div class="modal fade" id="AddRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/add_role" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="role" class="form-label">Role:</label>
                                <input type="text" class="form-control" id="role" name="role"
                                    placeholder="Enter Role Name Here">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Role Modal -->
        <div class="modal fade" id="deletefilemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete File</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <p>Are you Sure to delete this Role?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a class="btn btn-danger" href="" role="button" id="modaldeleterole">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update Role Modal -->
        <div class="modal fade" id="updateRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Role</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role:</label>
                                    <input type="text" class="form-control" id="update-role" name="role"
                                        placeholder="Enter Role Name Here">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
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
$(document).ready(function() {
    $('#addRole').click(function() {
        $('#AddRoleModal').modal('show');
    });
    $('.delete-role').click(function() {
        var delete_role_id = $(this).data('delete-role-id');
        $('#modaldeleterole').attr('href', '/delete_role/' + delete_role_id);
    });
    $('.update-role').click(function() {
        var update_role_id = $(this).data('role-id');
        var update_role_name = $(this).data('role-name');
        $('#update-role').val(update_role_name);
        $('#updateRoleModal form').attr('action', '/update_role/' + update_role_id);
    });
});
</script>
@endsection