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
                <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[0]->name }}">
                {!! Html::image('front/images/tamengknalpotmio.jpg', '', ['class'=>'img-responsive']) !!}
                </a>
                 <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[0]->name }}">
                 <h3 class="b-tittle">{{ $hotlist[0]->name }}</h3>
                 <i class="collection">IDR {{ number_format($hotlist[0]->amount) }}</i>
                 <i class="glyphicon glyphicon-arrow-right"></i></a>
              </div>

              <div class="col-md-3">
                <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[1]->name }}">
                  {!! Html::image('front/images/tamengknalpotbeat.jpg', '', ['class'=>'img-responsive']) !!}
                  </a>
                  <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[1]->name }}">
                  <h3 class="b-tittle">{{ $hotlist[1]->name }}</h3>
                  <i class="collection">IDR {{ number_format($hotlist[1]->amount) }}</i>
                  <i class="glyphicon glyphicon-arrow-right"></i></a>
              </div>

                <div class="col-md-3">
                  <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[2]->name }}">
                  {!! Html::image('front/images/corongknalpot.jpg', '', ['class'=>'img-responsive']) !!}
                  </a>
                  <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[2]->name }}">
                  <h3 class="b-tittle">{{ $hotlist[2]->name }}</h3>
                  <i class="collection">IDR {{ number_format($hotlist[2]->amount) }}</i>
                  <i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
                <div class="col-md-3">
                  <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[3]->name }}">
                  {!! Html::image('front/images/selangrem.jpg', '', ['class'=>'img-responsive']) !!}
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
            <div class="container hotlist">
              <h2>Hot List</h2>
              <br>
                 <div class="col-md-3">
                   <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[0]->name }}">
                   {!! Html::image('front/images/tamengknalpotmio.jpg', '', ['class'=>'img-responsive']) !!}
                   </a>
                    <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[0]->name }}">
                    <h3 class="b-tittle">{{ $hotlist[0]->name }}</h3>
                    <i class="collection">IDR {{ number_format($hotlist[0]->amount) }}</i>
                    <i class="glyphicon glyphicon-arrow-right"></i></a>
                 </div>

                 <div class="col-md-3">
                   <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[1]->name }}">
                     {!! Html::image('front/images/tamengknalpotbeat.jpg', '', ['class'=>'img-responsive']) !!}
                     </a>
                     <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[1]->name }}">
                     <h3 class="b-tittle">{{ $hotlist[1]->name }}</h3>
                     <i class="collection">IDR {{ number_format($hotlist[1]->amount) }}</i>
                     <i class="glyphicon glyphicon-arrow-right"></i></a>
                 </div>

                   <div class="col-md-3">
                     <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[2]->name }}">
                     {!! Html::image('front/images/corongknalpot.jpg', '', ['class'=>'img-responsive']) !!}
                     </a>
                     <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[2]->name }}">
                     <h3 class="b-tittle">{{ $hotlist[2]->name }}</h3>
                     <i class="collection">IDR {{ number_format($hotlist[2]->amount) }}</i>
                     <i class="glyphicon glyphicon-arrow-right"></i></a>
                   </div>
                   <div class="col-md-3">
                     <a class="collection" href="{{ url('single?p=') }}{{ $hotlist[3]->name }}">
                     {!! Html::image('front/images/selangrem.jpg', '', ['class'=>'img-responsive']) !!}
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

     <div class="collection-section">
     <div class="container">
         <h3 class="tittle fea">CATEGORY</h3>

       <div class="fashion-info">
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba" style="">
            {!! Html::image('front/images/handleremtwotone.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>{{ $feature_collection[0]->name }}</h4>
              <p class="cart"><a href="{{ url('single?p=') }}{{ $feature_collection[0]->name }}">BUY NOW</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba" style="">
            {!! Html::image('front/images/handleremcrg.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>{{ $feature_collection[1]->name }}</h4>
                <p class="cart"><a href="{{ url('single?p=') }}{{ $feature_collection[1]->name }}">BUY NOW</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba" style="">
            {!! Html::image('front/images/murasrodabelakangyamaha.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>{{ $feature_collection[2]->name }}</h4>
              <p class="cart"><a href="{{ url('single?p=') }}{{ $feature_collection[2]->name }}">BUY NOW</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </div>



                  <!--<div class="scroll-slider">
                    <div class="container">
              <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
              <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div>
              <div class="clearfix"> </div>

                <script type="text/javascript" src="js/jquery.flexisel.js"></script>

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
      </div>-->
 <!--//end-bottom-->

@endsection
