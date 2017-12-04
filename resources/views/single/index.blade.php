@extends('speedshop.app')

@section('content')
<!--start-content-->
<!-- products -->
 <div class="products">
   <div class="container">
     <div class="products-grids">
       <div class="col-md-8 products-single-right">
       <div class="col-md-5 grid-single">
           <div class="flexslider">
             <ul class="slides">
             <li data-thumb="front/images/sampel.jpg">
               <div class="thumb-image"> <img src="front/images/sampel.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
             </li>
             <li data-thumb="front/images/sampel.jpg">
                <div class="thumb-image"> <img src="front/images/sampel.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
             </li>
             <li data-thumb="front/images/sampel.jpg">
                <div class="thumb-image"> <img src="front/images/sampel.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
             </li>
             </ul>
           </div>
           <!-- FlexSlider -->
           <script src="front/js/imagezoom.js"></script>
           <script defer src="front/js/jquery.flexslider.js"></script>
           <script>
           // Can also be used with $(document).ready()
           $(window).load(function() {
             $('.flexslider').flexslider({
             animation: "slide",
             controlNav: "thumbnails"
             });
             $('.flexslider2').flexslider({
             animation: "slide",
             controlNav: "thumbnails"
             });
           });
           </script>

         </div>
       <div class="col-md-7 single-text">
         <div class="details-left-info simpleCart_shelfItem">
           {!! Form::open(['route'=>'single.store', 'role'=>'form', 'class'=>'', 'id'=>'form-create-family']) !!}
           <h3>{{ $p }}</h3>
           <p class="availability">Availability: <span class="color">In stock</span></p>
           <div class="price_single">
             <span class="actual item_price">Rp {{ number_format($products[0]->amount) }}</span>
           </div>
           <h2 class="quick">Quick Overview</h2>
           <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
             <h3>available Colors</h3>
           <ul class="product-colors">
             <li><a class="color1" href="#"><span> </span></a></li>
             <li><a class="color2" href="#"><span> </span></a></li>
             <li><a class="color3" href="#"><span> </span></a></li>
             <li><a class="color4" href="#"><span> </span></a></li>
             <li><a class="color5" href="#"><span> </span></a></li>
             <li><a class="color6" href="#"><span> </span></a></li>
             <li><a class="color7" href="#"><span> </span></a></li>
             <li><a class="color8" href="#"><span> </span></a></li>
           </ul>
           <div class="quantity_box">
               <span>Quantity:</span>
             <div class="product-qty">
               <!-- <select>
               @for($a = 0; $a < $products[0]->stock; $a ++)
                 <option>{{ $a+1 }}</option>
               @endfor
               </select> -->
               <input type="number" name="quantity" min="1" max="100" style="width:30%" value="1">
             </div>
           </div>
         <div class="clearfix"> </div>
       <div class="single-but item_add">
         <input type="hidden" name="product_id" value="{{ $products[0]->id }}">
         <input type="submit" value="add to cart"/>
       </div>
       {!! Form::close() !!}
     </div>
   </div>
   <div class="clearfix"></div>
 </div>
 <!-- <div class="col-md-4 products-grid-right">
         <div class="w_sidebar">
           <div class="w_nav1">
             <h4>All</h4>
             <ul>
               <li><a href="product.html">women</a></li>
               <li><a href="#">new fashions</a></li>
               <li><a href="#">trends</a></li>
               <li><a href="#">boys</a></li>
               <li><a href="#">girls</a></li>
               <li><a href="#">sale</a></li>
             </ul>
           </div>
           <section  class="sky-form">
             <h4>CATEGORIES</h4>
             <div class="row1 scroll-pane">
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Men's Jackets</label>
               </div>
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Glases</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Watches</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hand Bags</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Bags</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shirts</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>soluta nobis</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>molestiae</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>repudiandae sint</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>nobis est</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>assumenda est</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
               </div>
             </div>
           </section>
           <section  class="sky-form">
             <h4>brand</h4>
             <div class="row1 scroll-pane">
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lee</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
               </div>
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
               </div>
             </div>
           </section>
         </div>
 </div> -->
       <div class="clearfix"></div>
       <!-- collapse -->
   <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingOne">
     <h4 class="panel-title">
       <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Description
       </a>
     </h4>
   </div>
   <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
     <div class="panel-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
 <div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingTwo">
     <h4 class="panel-title">
       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          additional information
       </a>
     </h4>
   </div>
   <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
     <div class="panel-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
 <div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingThree">
     <h4 class="panel-title">
       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         reviews(5)
       </a>
     </h4>
   </div>
   <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
     <div class="panel-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
 <div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingFour">
     <h4 class="panel-title">
       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         help
       </a>
     </h4>
   </div>
   <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
     <div class="panel-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
</div>
<!-- collapse -->
<!--/start-latest-->
   <div class="collection-section">
        <h3 class="tittle">Related Products</h3>

      <div class="fashion-info">
       <div class="col-md-4 fashion-grids">
         <figure class="effect-bubba">
           <img src="images/f4.jpg" alt=""/>
           <figcaption>
             <h4>Nuevo Shop</h4>
             <p class="cart"><a href="#">Shop</a></p>
           </figcaption>
         </figure>
       </div>
       <div class="col-md-4 fashion-grids">
         <figure class="effect-bubba">
           <img src="images/f5.jpg" alt=""/>
           <figcaption>
             <h4>Nuevo Shop</h4>
               <p class="cart"><a href="#">Shop</a></p>
           </figcaption>
         </figure>
       </div>
       <div class="col-md-4 fashion-grids">
         <figure class="effect-bubba">
           <img src="images/f6.jpg" alt=""/>
           <figcaption>
             <h4>Nuevo Shop</h4>
             <p class="cart"><a href="#">Shop</a></p>
           </figcaption>
         </figure>
       </div>
       <div class="clearfix"></div>
     </div>
   </div>
 </div>
      <!--//latest-->
     </div>
 </div>
<!-- //products -->
  <!--start-bottom-->
      <!--start-image-cursuals-->
                 <div class="scroll-slider">
                   <div class="container">
             <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
             <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div>
             <div class="clearfix"> </div>
             <!--start-image-->
              <script type="text/javascript" src="front/js/jquery.flexisel.js"></script>
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

<!-- Modal cart message-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keranjang Belanja</h5>
        <div class="close1"></div>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                <p style="font-size:10px">{{ $p }} telah ditambahkan ke Keranjang Belanja</p>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-2">
                <img src="front/images/sampel.jpg" alt=""/ width="100%" height="100%">
              </div>
              <div class="col-md-6">
                <span style="font-size:12px">{{ $p }}</span>
                <br>
                  <span class="actual item_price" style="font-size:12px">Rp {{ number_format($products[0]->amount) }}</span>
              </div>
              <div class="col-md-4">
                @if(Session::has('chart_id'))
                 <input type="number" id="quantity_cart" name="quantity" min="1" max="100" style="width:100%" value="{{ Session::get('chart_id') }}">
                @endif
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="delivery">
                <input type="hidden" id="harga_barang" value="{{ $products[0]->amount }}">
                <p>Harga barang : {{ number_format($products[0]->amount) }}</p>
                <br>
                <p>Biaya kirim : <i>Belum termasuk</i></p>
                <br>
                <p>Total harga : @if(Session::has('chart_id'))
                 &nbsp;<span id="total_harga">{{ $products[0]->amount }}</span>
                @endif
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="{{ url('chart') }}" class="btn btn-danger">Lihat Keranjang</a>
        <button type="button" class="btn btn-primary">Lanjut ke Pembayaran</button>
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
    @if(Session::has('cartMessage'))
     @if(Session::get('cartMessage') == 1)
     $('#exampleModal').modal('show');
     @endif
    @endif
    var harga = $('#harga_barang').val();
    var quantity = $('#quantity_cart').val();
    $('#total_harga').text(harga*quantity).autoNumeric('init',{
      aSep:',',
      aDec:'.'
    });
    $('.close1').on('click',function(c){
      $('#exampleModal').modal('hide');
    });
    $('#quantity_cart').on('change',function(c){
      var harga = $('#harga_barang').val();
      var quantity = $('#quantity_cart').val();
      $('#total_harga').text(harga*quantity).autoNumeric('update',{
        aSep:',',
        aDec:'.'
      });
    })
  });
  </script>
@endsection
