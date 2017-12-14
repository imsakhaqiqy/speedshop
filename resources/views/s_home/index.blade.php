@extends('speedshop.app')

<style type="text/css">


.home{
  background-color: #F5F5F5;
  padding:5px;
}
h2{
  padding: 2px;
}
.newarrival{
  background-color: #fff;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
}
.hotlist{
  background-color: #fff;
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
}

</style>

@section('content')
<!--start-content-->
    <!--start-banner-->
<div class="home">
  <div class="banner">
    <div class="container newarrival">
      <h2>New Arrival</h2>
      <br>
      <div class="col-md-3">
        <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[0]->name }}">
        {!! Html::image('front/images/'.$new_arrival[0]->image, '', ['class'=>'img-responsive']) !!}
        </a>
         <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[0]->name }}">
         <h3 class="b-tittle">{{ $new_arrival[0]->name }}</h3>
         <i class="collection">IDR {{ number_format($new_arrival[0]->amount) }}</i>
         <i class="glyphicon glyphicon-arrow-right"></i></a>
      </div>
      <div class="col-md-3">
        <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[1]->name }}">
          {!! Html::image('front/images/'.$new_arrival[1]->image, '', ['class'=>'img-responsive']) !!}
        </a>
          <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[1]->name }}">
          <h3 class="b-tittle">{{ $new_arrival[1]->name }}</h3>
          <i class="collection">IDR {{ number_format($new_arrival[1]->amount) }}</i>
          <i class="glyphicon glyphicon-arrow-right"></i></a>
      </div>
      <div class="col-md-3">
          <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[2]->name }}">
          {!! Html::image('front/images/'.$new_arrival[2]->image, '', ['class'=>'img-responsive']) !!}
          </a>
          <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[2]->name }}">
          <h3 class="b-tittle">{{ $new_arrival[2]->name }}</h3>
          <i class="collection">IDR {{ number_format($new_arrival[2]->amount) }}</i>
          <i class="glyphicon glyphicon-arrow-right"></i></a>
        </div>
      <div class="col-md-3">
          <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[3]->name }}">
          {!! Html::image('front/images/'.$new_arrival[3]->image, '', ['class'=>'img-responsive']) !!}
          </a>
            <a class="collection" href="{{ url('single?p=') }}{{ $new_arrival[3]->name }}">
            <h3 class="b-tittle">{{ $new_arrival[3]->name }}</h3>
            <i class="collection">IDR {{ number_format($new_arrival[3]->amount) }}</i>
            <i class="glyphicon glyphicon-arrow-right"></i>
          </a>
        </div>
    </div>
  </div>
</div>

<div class="home">
  <div class="banner">
    <div class="container hotlist">
      <h2>Hot List</h2>
      <br>
        <div class="col-md-3">
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[0]->name }}">
            {!! Html::image('front/images/'.$hotlist[0]->image, '', ['class'=>'img-responsive']) !!}
          </a>
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[0]->name }}">
            <h3 class="b-tittle">{{ $hotlist[0]->name }}</h3>
              <i class="collection">IDR {{ number_format($hotlist[0]->amount) }}</i>
              <i class="glyphicon glyphicon-arrow-right"></i>
          </a>
        </div>
        <div class="col-md-3">
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[1]->name }}">
            {!! Html::image('front/images/'.$hotlist[1]->image, '', ['class'=>'img-responsive']) !!}
          </a>
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[1]->name }}">
            <h3 class="b-tittle">{{ $hotlist[1]->name }}</h3>
              <i class="collection">IDR {{ number_format($hotlist[1]->amount) }}</i>
              <i class="glyphicon glyphicon-arrow-right"></i>
          </a>
        </div>
        <div class="col-md-3">
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[2]->name }}">
            {!! Html::image('front/images/'.$hotlist[2]->image, '', ['class'=>'img-responsive']) !!}
          </a>
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[2]->name }}">
            <h3 class="b-tittle">{{ $hotlist[2]->name }}</h3>
              <i class="collection">IDR {{ number_format($hotlist[2]->amount) }}</i>
              <i class="glyphicon glyphicon-arrow-right"></i>
          </a>
        </div>
        <div class="col-md-3">
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[3]->name }}">
            {!! Html::image('front/images/'.$hotlist[3]->image, '', ['class'=>'img-responsive']) !!}
          </a>
          <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[3]->name }}">
            <h3 class="b-tittle">{{ $hotlist[3]->name }}</h3>
              <i class="collection">IDR {{ number_format($hotlist[3]->amount) }}</i>
              <i class="glyphicon glyphicon-arrow-right"></i>
          </a>
        </div>
    </div>
  </div>
</div>

<div class="home">
  <div class="banner">
    <div class="scroll-slider">
      <div class="container">
        <div class="nbs-flexisel-container">
          <div class="nbs-flexisel-inner">
            <ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
                <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;">
                  {!! Html::image('front/images/honda.png', '') !!}
                </li>
                <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;">
                  {!! Html::image('front/images/yamaha.png', '') !!}
                </li>
                <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;">
                  {!! Html::image('front/images/suzuki.png', '') !!}
                </li>
                <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;">
                  {!! Html::image('front/images/kawasaki.jpg', '') !!}
                </li>
                <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;">
                  {!! Html::image('front/images/bajaj.png', '') !!}
                </li>
            </ul>
            <div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div>
            <div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div>
          </div>
        </div>
    <div class="clearfix"> </div>
  </div>
</div>
<script type="text/javascript" src="front/js/jquery.flexisel.js"></script>

<script type="text/javascript">
$(window).load(function() {
  $(".flexiselDemo3").flexisel({
      visibleItems: 5,
      animationSpeed: 1000,
      autoPlay: true,
      autoPlaySpeed: 3000,
      pauseOnHover: true,
      enableResponsiveBreakpoints: true,
      responsiveBreakpoints: {
          portrait: {
              changePoint:480,
              visibleItems: 2
          },
          landscape: {
              changePoint:640,
              visibleItems: 3
          },
          tablet: {
              changePoint:768,
              visibleItems: 3
          }
      }
  });
});
</script>

</div>
</div>
 <!-- Modal cart message-->
 <!-- Modal -->
 <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Your order successfully, please check email to view your order !</h5>
         <div class="close1"></div>
       </div>
       <div class="modal-body">

       </div>
       <div class="modal-footer">

       </div>
     </div>
   </div>
 </div>
 <!-- End modal cart message -->
@endsection

@section('additional_scripts')
{!! Html::script('front/js/autoNumeric.js') !!}
<script type="text/javascript">
  $(document).ready(function() {
    @if(Session::has('successOrder'))
     @if(Session::get('successOrder') == 1)
     $('#modalOrder').modal('show');
     @endif
    @endif
  });
</script>
@endsection
