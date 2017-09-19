@extends('layouts.app')

@section('page_title')
  Menu
@endsection

@section('page_header')
  <h1>
    Menu
    <small>Add New Menu</small>
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('menu') }}"><i class="fa fa-dashboard"></i> Menu</a></li>
    <li class="active"><i></i></li>
  </ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Basic Information</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="#">Config option 1</a></li>
              <li><a href="#">Config option 2</a></li>
            </ul>
            <a class="close-link">
              <i class="fa fa-times"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">
          {!! Form::open(['route'=>'menu.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-menu']) !!}
            <div class="form-group">
              {!! Form::label('menu', 'Menu', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::text('menu', null,['class'=>'form-control', 'placeholder'=>'Menu...', 'id'=>'menu']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('description', 'Description', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Description...', 'id'=>'description', 'rows'=>'3']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('link_menu', 'Link Menu', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::text('link_menu', null, ['class'=>'form-control', 'placeholder'=>'Link Menu...', 'id'=>'link_menu']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('level', 'Level', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::select('level', array('P'=>'PARENT','C'=>'CHILD'), '',['class'=>'form-control', 'placeholder'=>'---CHOOSE LEVEL---', 'id'=>'level']) !!}
              </div>
              <div id="form-menu-parent" style="display:none">
                {!! Form::label('menu_id', 'Menu Parent', ['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::select('menu_id', $menu_options, null,['class'=>'form-control', 'placeholder'=>'---CHOOSE MENU---', 'id'=>'menu_id']) !!}
                </div>
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                <a href="{{ url('menu') }}" class="btn btn-white">
                  <i class="fa fa-repeat"></i>&nbsp;Cancel
                </a>
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-save"></i>&nbsp;Submit
                </button>
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection

@section('additional_scripts')
  <script type="text/javascript">
    $("#level").on("change",function(){
      var level = $("#level").val();
      if(level == 'C'){
        $("#form-menu-parent").show();
      }else if(level == 'P'){
        $("#form-menu-parent").hide()
      }
    });
  </script>
@endsection
