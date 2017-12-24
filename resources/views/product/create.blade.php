@extends('layouts.app')

@section('page_title')
  Product
@endsection

@section('page_header')
  <h1>
    Product
    <small>Add New Product</small>
  </h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('product') }}"><i class="fa fa-dashboard"></i> Product</a></li>
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
          {!! Form::open(['route'=>'product.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-category', 'files'=>true]) !!}
            <div class="form-group">
              <div class="err{{ $errors->has('name') ? ' has-error' : ''}}">
                {!! Form::label('name', 'Name', ['class'=>'col-sm-1 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'', 'id'=>'name']) !!}
                  @if ($errors->has('name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="err{{ $errors->has('stock') ? ' has-error' : ''}}">
                {!! Form::label('stock', 'Stock', ['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::text('stock',null,['class'=>'form-control', 'placeholder'=>'', 'id'=>'stock']) !!}
                  @if ($errors->has('stock'))
                    <span class="help-block">
                      <strong>{{ $errors->first('stock') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="err{{ $errors->has('image') ? ' has-error' : ''}}">
                {!! Form::label('image', 'Image', ['class'=>'col-sm-1 control-label']) !!}
                <div class="col-sm-4">
                  {{ Form::file('image', ['class'=>'form-control']) }}
                  <span style="color:red">*Max size 10 mb</span>
                  @if ($errors->has('image'))
                    <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="err{{ $errors->has('minimum_stock') ? ' has-error' : ''}}">
                {!! Form::label('minimum_stock', 'Minimum Stock', ['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::text('minimum_stock',null,['class'=>'form-control', 'placeholder'=>'', 'id'=>'minimum_stock']) !!}
                  @if ($errors->has('minimum_stock'))
                    <span class="help-block">
                      <strong>{{ $errors->first('minimum_stock') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="err{{ $errors->has('family_id') ? ' has-error' : ''}}">
                {!! Form::label('family_id', 'Family', ['class'=>'col-sm-1 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::select('family_id',$families,null,['class'=>'form-control', 'placeholder'=>'Choose Family', 'id'=>'family_id']) !!}
                  @if ($errors->has('family_id'))
                    <span class="help-block">
                      <strong>{{ $errors->first('family_id') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="err{{ $errors->has('price') ? ' has-error' : ''}}">
                {!! Form::label('price', 'Price', ['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::text('price',null,['class'=>'form-control', 'placeholder'=>'', 'id'=>'price']) !!}
                  @if ($errors->has('price'))
                    <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="err{{ $errors->has('category_id') ? ' has-error' : ''}}">
                {!! Form::label('category_id', 'Category', ['class'=>'col-sm-1 control-label']) !!}
                <div class="col-sm-4">
                  <select name="category_id" class="form-control" id="category_id">
                    <option value="">Select Category</option>
                  </select>
                  @if ($errors->has('category_id'))
                    <span class="help-block">
                      <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="err{{ $errors->has('unit_id') ? ' has-error' : ''}}">
                {!! Form::label('unit_id', 'Unit', ['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                  {!! Form::select('unit_id',$units,null,['class'=>'form-control', 'placeholder'=>'Choose Unit', 'id'=>'unit_id']) !!}
                  @if ($errors->has('unit_id'))
                    <span class="help-block">
                      <strong>{{ $errors->first('unit_id') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="err{{ $errors->has('description') ? ' has-error' : ''}}">
                {!! Form::label('description', 'Description', ['class'=>'col-sm-1 control-label']) !!}
                <div class="col-sm-10">
                  {!! Form::textarea('description',null, ['class'=>'form-control', 'rows'=>'5']) !!}
                  @if ($errors->first('description'))
                    <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                <a href="{{ url('product') }}" class="btn btn-white">
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
  <!-- TES COMMIT -->
@endsection

@section('additional_scripts')
{!! Html::script('back/js/select2.min.js') !!}
<script type="text/javascript">
    $('#family_id').select2();
    $('#category_id').select2();
    $('#family_id').change(function(){
      var family = $('#family_id').val();
      var token = $("input[name='_token']").val();
      $.ajax({
        url:"{!! URL::to('callCategory') !!}",
        type:'POST',
        data:"family="+family+'&_token='+token,
        beforeSend: function(){

        },
        success: function(data){
          console.log(data);
          $('#category_id').html(data);
        }
      });
    });
</script>
@endsection
