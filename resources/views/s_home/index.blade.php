@extends('speedshop.app')

@section('content')
<!--start-content-->
    <!--start-banner-->
       <div class="banner">
         <div class="container">
          <div class="banner-grids">
              <div class="col-md-6 jocket">
              <div class="jock-img">
                {!! Html::image('front/images/4.jpg') !!}
              </div>
               <div class="jock-text">
                 <h3 class="b-tittle">Knalpot</h3>
              <a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 shoe">
                <div class="shoe-img">
                  {!! Html::image('front/images/1.jpg', '', ['class'=>'img-responsive']) !!}
                </div>
               <div class="shoe-text">
                  <h3 class="b-tittle">Shock</h3>
                <a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
                <div class="clearfix"> </div>
           <div class="bottom-bags">
                <div class="col-md-6 pack">
                 <div class="bag-text">
                    <h3 class="b-tittle">xaxa</h3>
                  <a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
                  </div>
                  <div class="bag-img">
                    {!! Html::image('front/images/2.jpg', '', ['class'=>'img-responsive']) !!}
                  </div>
                  <div class="clearfix"> </div>

                </div>
                <div class="col-md-6 glass">
                 <div class="glass-text">
                    <h3 class="b-tittle">xaxa</h3>
                <a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
                  </div>
                  <div class="glass-img">
                    {!! Html::image('front/images/3.jpg', '', ['class'=>'img-responsive']) !!}
                  </div>
                  <div class="clearfix"> </div>

                </div>
               <div class="clearfix"> </div>
             </div>
             </div>
              <div class="clearfix"> </div>
          </div>
       </div>
     </div>
         <!--/start-fashion-->
    <div class="fashion-section">
     <div class="container">
         <h3 class="tittle">Fashions</h3>

       <div class="fashion-info">
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba">
            {!! Html::image('front/images/5.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>Nuevo Shop</h4>
              <p class="cart"><a href="single.html">Shop</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba">
            {!! Html::image('front/images/f2.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>Nuevo Shop</h4>
                <p class="cart"><a href="single.html">Shop</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba">
            {!! Html::image('front/images/f3.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>Nuevo Shop</h4>
              <p class="cart"><a href="single.html">Shop</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
       <!--//fashion-->
      <!--/start-latest-->
    <div class="collection-section">
     <div class="container">
         <h3 class="tittle fea">FEATURED COLLECTIONS</h3>

       <div class="fashion-info">
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba">
            {!! Html::image('front/images/f4.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>Nuevo Shop</h4>
              <p class="cart"><a href="single.html">Shop</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba">
            {!! Html::image('front/images/f5.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>Nuevo Shop</h4>
                <p class="cart"><a href="single.html">Shop</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 fashion-grids">
          <figure class="effect-bubba">
            {!! Html::image('front/images/f6.jpg', '', ['class'=>'']) !!}
            <figcaption>
              <h4>Nuevo Shop</h4>
              <p class="cart"><a href="single.html">Shop</a></p>
            </figcaption>
          </figure>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
       <!--//latest-->
     <div class="container">
        <div class="recommand-section">
          <div class="recommand-section-head text-center">
            <h3 class="tittle fea">Recommended Products</h3>
          </div>
          <div class="recommand-section-grids">

            <div class="standards">
             <h5>Tags<i class="glyphicon glyphicon-tag"></i></h5>
            <ul class="selectors_wrapper">
                <li class="selector active" data-selector="1">Popular</li>
                <li class="selector" data-selector="2">Sales</li>
                <li class="selector" data-selector="3">Seller</li>
                <li class="selector" data-selector="4">Rate</li>
            </ul>

            <div class="standard_content">
              <div class="standard active" data-selector="1">
              <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html">
                    {!! Html::image('front/images/s2.jpg', '', ['class'=>'img-responsive']) !!}
                  </a>
                  <div class="r-title">
                    <h3>Sunny Dress</h3>
                    <h4>$30</h4>
                  </div>
                </div>
                <div class="atc"><a href="single.html">Shop</a></div>
                 </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html">
                    {!! Html::image('front/images/s1.jpg', '', ['class'=>'img-responsive']) !!}
                  </a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>White Shirt</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html">
                    {!! Html::image('front/images/s3.jpg', '', ['class'=>'img-responsive']) !!}
                  </a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Puma Shoe</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
              </div>
              <div class="standard" data-selector="2">
                <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Sunny Dress</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>White Shirt</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Puma Shoe</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              </div>
              <div class="standard" data-selector="3">
                    <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Sunny Dress</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>White Shirt</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Puma Shoe</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
                      </div>
             <div class="standard" data-selector="4">
                <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Sunny Dress</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>White Shirt</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
            <div class="tag-grid">
                <div class="tag-wrapper">
                  <a href="single.html"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>
                  <div class="atc"><a href="single.html">Shop</a></div>
                  <div class="r-title">
                    <h3>Puma Shoe</h3>
                    <h4>$30</h4>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          </div>
        </div>
      </div>

      <div class="mid-content">
            <div class="container">
        <div class="middle">
          <div class="mid-top">
            <h3>Discover a huge assortment of</h3>
          <p>women`s handbags at the lowest prices</p>
          </div>
       </div>
         </div>
     </div>
      <!--start-bottom-->
       <!--start-image-cursuals-->
                  <div class="scroll-slider">
                    <div class="container">
              <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
              <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div>
              <div class="clearfix"> </div>
              <!--start-image-->
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                <!--//end-->
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
            <!---->
          </div>
      </div>
 <!--//end-bottom-->

@endsection
