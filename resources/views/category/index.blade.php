@extends('layouts.app')

@section('page_title')
  Category
@endsection

@section('page_header')
  <h1>
    Category
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#"><i class="fa fa-dashboard"></i> Category</a></li>
    <li class="active"><i></i>Index</li>
  </ol>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Category List</h5>
        <div class="ibox-tools">
          <a href="{{ URL::to('category/create') }}" class="btn btn-primary" title="Add new category">
            <i class="fa fa-plus"></i>&nbsp;Add New
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" id="table-category">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Creator</th>
                <th>Created At</th>
                <th>Updated At</th>
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
@endsection

@section('additional_scripts')
  <script type="text/javascript">
    var tableCategory = $("#table-category").DataTable({
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
      ajax: '{!! route('datatables.getCategories') !!}',
      columns: [
        { data: 'rownum', name: 'rownum', orderable: false, searchable: false},
        { data: 'name', name: 'name'},
        { data: 'creator', name: 'user.name'},
        { data: 'created_at', name: 'created_at'},
        { data: 'updated_at', name: 'updated_at'},
        { data: 'actions', name: 'actions', orderable: false, searchable: false, className: 'text-center'}
      ],
    });
  </script>
@endsection
