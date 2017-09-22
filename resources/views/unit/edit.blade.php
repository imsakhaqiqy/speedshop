@extends('layouts.app')

@section('page_title')
  Units
@endsection

@section('page_header')
  <h1>
    Units
    <small>Edit Units</small>
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('unit') }}"><i class="fa fa-dashboard"></i> User</a></li>
    <li><a href="{{ URL::to('unit/'.$unit->id) }}"><i class="fa fa-dashboard"></i> {{ $unit->name }}</a></li>
    <li class="active"><i></i>Edit</li>
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
          {!! Form::model($unit,['route'=>['unit.update',$unit], 'class'=>'form-horizontal', 'id'=>'form-edit-user', 'method'=>'put']) !!}
            <div class="form-group">
              {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::text('name', null, ['class'=>'form-control', 'id'=> 'name']) !!}
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                <a href="{{ url('unit') }}" class="btn btn-white">
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