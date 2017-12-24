@extends('layouts.app')

@section('page_title')
  User
@endsection

@section('page_header')
  <h1>
    User
    <small>Add New User</small>
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('user') }}"><i class="fa fa-dashboard"></i> User</a></li>
    <li class="active"><i></i>Create</li>
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
          {!! Form::open(['route'=>'user.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-user']) !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
              {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Name...', 'id'=>'name']) !!}
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
              {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Email...', 'id'=>'email']) !!}
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
              {!! Form::label('password', 'Password', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Password...', 'id'=>'password']) !!}
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('role_id') ? ' has-error' : ''}}">
              {!! Form::label('role', 'Role', ['class'=>'col-sm-2 control-label']) !!}
              <div class="col-sm-4">
                {!! Form::select('role_id', $role_options, null, ['class'=>'form-control', 'placeholder'=>'Select role', 'id'=>'role_id']) !!}
                @if ($errors->has('role_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('role_id') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                <a href="{{ url('user') }}" class="btn btn-white">
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
