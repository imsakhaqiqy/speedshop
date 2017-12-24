@extends('layouts.app')

@section('page_title')
  User
@endsection

@section('page_header')
  <h1>
    User
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
    <li class="active"><i></i>Index</li>
  </ol>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>User List</h5>
        <div class="ibox-tools">
          <a href="{{ URL::to('user/create') }}" class="btn btn-primary" title="Add new user">
            <i class="fa fa-plus"></i>&nbsp;Add New
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" id="table-user">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete User -->
<div class="modal fade" id="modal-delete-user" tabindex="-1" role="dialog" aria-labelledby="modal-delete-userLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {!! Form::open(['url'=>'deleteUser', 'method'=>'post']) !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modal-delete-userLabel">Delete user confirmation</h4>
        </div>
        <div class="modal-body">
          You are going to remove user&nbsp;<b id="user-name-to-delete"></b>
          </br>
          <p class="text text-danger">
            <i class="fa fa-info-circle"></i>&nbsp;This process can not be reverted
          </p/>
          <input type="hidden" id="user_id" name="user_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
  <!-- END Modal User -->
@endsection

@section('additional_scripts')
  <script type="text/javascript">
    var tableUser = $("#table-user").DataTable({
      dom: '<"html5buttons"B>lTfgitp',
      buttons: [
        { extend: 'copy' },
        { extend: 'csv' },
        { extend: 'excel', title: 'ExampleFile' },
        { extend: 'pdf', title: 'ExampleFile' },
        { extend: 'print', customize: function(win){
          $(win.document.body).addClass('white-bg');
          $(win.document.body).css('font-size', '10px');
          $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
        }}
      ],
      processing: true,
      serverSide: true,
      ajax: '{!! route('datatables.getUsers') !!}',
      columns: [
        { data: 'rownum', name: 'rownum', orderable: false, searchable: false},
        { data: 'name', name: 'name'},
        { data: 'email', name: 'email'},
        { data: 'role', name: 'roles.name'},
        { data: 'actions', name: 'actions', orderable: false, searchable: false, className: 'text-center'}
      ],
    });

    tableUser.on('click', '.btn-delete-user', function(e){
      var id = $(this).attr('data-id');
      var name = $(this).attr('data-text');
      $('#user_id').val(id);
      $('#user-name-to-delete').text(name);
      $('#modal-delete-user').modal('show');
    });
  </script>
@endsection
