@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class='container'>
            <div class='row'>
                <div class='col-md-9'>
                    <h1>Permissions for {{$role->role}} </h1>
                </div>

            </div>

            @php
            $hasPermission =0;
            @endphp
    </section>

    <div class="container-fluid">



        <div class="card">
            <div class="card-body">
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-10'>
                        </div>
                        <div class='col-md-2'>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="select_all" id="select_all">
                                    <strong> Select All</strong>
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class='container'>
                        <div class='row'>

                            <div class='col-md-12'>
                                <form action="{{url('/')}}/add_permission_role" method="POST">
                                    @csrf
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Permissions</th>
                                                <th style="text-align:center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!$permissions->isEmpty())
                                            @php
                                            $count=1;
                                            @endphp
                                            @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $count }}.</td>

                                                <td>{{ $permission->permission}}</td>

                                                @foreach($permission_roles as $permission_role)
                                                @if($permission_role->permission_id == $permission->id)
                                                @php
                                                $hasPermission =1;
                                                @endphp
                                                @endif
                                                @endforeach
                                                <td style="text-align:center">
                                                    <input type="hidden" name="role" value="{{$role->id}}">
                                                    @if($hasPermission == 1)
                                                    <input class="form-check-input" name="permissions[]"
                                                        id="permissions" type="checkbox" value="{{ $permission->id }}"
                                                        aria-label="Text for screen reader" checked>
                                                    @else
                                                    <input class="form-check-input" name="permissions[]"
                                                        id="permissions" type="checkbox" value="{{ $permission->id }}"
                                                        aria-label="Text for screen reader">
                                                    @endif


                                                </td>
                                            </tr>
                                            @php
                                            $count++;
                                            $hasPermission =0;
                                            @endphp
                                            @endforeach
                                            @else
                                            <tr>
                                                <td colspan="4" style="text-align:center;"><strong>No Record Found
                                                        </stong>
                                                </td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                                            Save</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$('.delete-permission-role').click(function(e) {
    $('#modaldeletepermissionrole').attr('href', '/deletepermissionrole/' + $(this).attr(
        'data-delete-permission-role-id'));
});
$('.edit-permission-role').click(function(e) {
    $('#updatepermissionroleform').attr('action', '<?php echo url('/') ?>/updatepermissionrole/' + $(this)
        .attr(
            'data-permission-role-id'))
    $('#update-role').val($(this).attr('data-role'));
    $('#update-permissions').val($(this).attr('data-permission'));
});
$(function() {
    $('select[multiple].active.3col').multiselect({
        columns: 1,
        placeholder: 'Select Permissions',
        search: true,
        searchOptions: {
            'default': 'Search Permissions'
        },
        selectAll: true
    });
});
$('#addpermissionroleform').validate({
    rules: {
        'role': {
            required: true
        },
        '3col active': {
            required: true
        },
    },
    messages: {
        'role': {
            required: 'Please Select Role',
            remote: 'Please Select at least one permission'
        },
        '3col active': {
            required: 'Please Select at least one permission'
        },
    },
});
$('#updatepermissionroleform').validate({
    rules: {
        'role': {
            required: true
        },
        'permissions[]': {
            required: true
        },
    },
    messages: {
        'role': {
            required: 'Please Select Role'
        },
        'permissions[]': {
            required: 'Please Select permissions'
        },
    },
});
$('#select_all').click(function(event) {
    if (this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;
        });
    }
});
</script>
@endsection