@extends('layouts.app')

@section('page_title')
  Menu
@endsection

@section('page_header')
  <h1>
    Menu
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
    <li class="active"><i></i>Index</li>
  </ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Menu</h5>
          <div class="ibox-tools">
            <a href="{{ URL::to('menu/create') }}" class="btn btn-primary" title="Add new menu">
              <i class="fa fa-plus"></i>&nbsp;Add New</i>
            </a>
          </div>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" id="table-menu">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Modules</th>
                  <th>Link Modules</th>
                  <th>Urutan</th>
                  <th>Parent</th>
                  <th>Icon</th>
                  <th>Description</th>
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
    var tableMenu = $("#table-menu").DataTable({
      dom: '<"html5buttons"B>lTfgitp',
      buttons:[
        { extend: 'copy' },
        { extend: 'csv' },
        { extend: 'excel', title: 'ExampleFile' },
        { extend: 'pdf', title: 'ExampleFile' },
        { extend: 'print', customize: function(win){
          $(win.document.body).addClass('white-bg');
          $(win.document.body).css('font-size','10px');
          $(win.document.body).find('table').addClass('compact').css('font-size','inherit');
        }}
      ],
      processing: true,
      serverSide: true,
      ajax: '{!! route('datatables.getMenus') !!}',
      columns: [
        { data: 'rownum', name: 'rownum', orderable: false, searchable: false },
        { data: 'modules', name: 'modules' },
        { data: 'link_modules', name: 'link_modules' },
        { data: 'urutan', name: 'urutan' },
        { data: 'parent', name: 'parent' },
        { data: 'icon', name: 'icon' },
        { data: 'description', name: 'description'},
        { data: 'actions', name: 'actions', orderable: false, searchable: false, className : 'text-center'}
      ]
    });
  </script>
@endsection
