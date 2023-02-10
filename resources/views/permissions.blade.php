@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class='container'>
      <div class='row'>
        <div class='col-md-8'>
          <h2>Permissions</h2>
        </div>
        <div class='col-md-4'>
          <button type="button" class="btn btn-primary float-right" id="permissionbtn">
            Add permission
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
                    <th scope="col">Permission</th>
                    <th scope="col" width="20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($permission as $permission)
                  <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $permission->permission}}</td>
                    <td>
                      <button type="button" class="btn btn-danger delete-permission" data-permission-id="{{ $permission->id }}" data-bs-toggle="modal" data-bs-target="#deletefilemodal"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                      <button type="button" class="btn btn-danger update-permission" data-permission-id="{{ $permission->id }}" data-permission-name="{{$permission->permission}}" data-bs-toggle="modal" data-bs-target="#update-permission"><i class="fa fa-pencil" aria-hidden="true"></i> Update</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Model -->
      <div class="modal fade" id="addpermission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Permission</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/add_Permission" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="permission" class="form-label">Permission:</label>
                  <input type="text" class="form-control" id="permission" name="permission" placeholder="Enter Permission">
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Delete model  -->
      <div class="modal fade" id="deletefilemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <p>Do you want to delete this Permission?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="" role="button" id="modalDeletePermission">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Update Role Modal -->
      <div class="modal fade" id="update-permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-body">
                <form action="" method="POST" id="updateForm">
                  @csrf
                  <div class="mb-3">
                    <label for="role" class="form-label">Update:</label>
                    <input type="text" class="form-control" id="update-permission" name="permission" placeholder="Enter Permission">
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
</div>
@endsection
@section('scripts')
<script>
  $(document).ready(function() {
    $('#permissionbtn').click(function() {
      $('#addpermission').modal('show');
    });
    $('.delete-permission').click(function() {
      var delete_permission_id = $(this).data('permission-id');
      $('#modalDeletePermission').attr('href', '/delete_Permission/' + delete_permission_id);
    });
    $('.update-permission').click(function() {
      var update_permission_id = $(this).data('permission-id');
      var update_permission_name = $(this).data('permission-name');
      // console.log(update_permission_name);
      $('#update-permission').value = update_permission_name;
      $('#updateForm').attr('action', '/update_Permission/' + update_permission_id);

    });
  });
</script>
@endsection