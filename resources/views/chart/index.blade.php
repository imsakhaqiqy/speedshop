@extends('speedshop.app')

@section('content')
<!--start-content-->
<!-- checkout -->
<div class="cart-items">
 <div class="container">
      <h3 class="tittle">My shopping(3)</h3>
      @for($a = 0; $a < count($charts); $a ++)
        @if($a == 0 )
        <script>$(document).ready(function(c) {
          $('.close{{$a+1}}').on('click', function(c){
            $('.cart-header').fadeOut('slow', function(c){
              $('.cart-header').remove();
            });
            });
          });
         </script>
         <div class="cart-header">
           <div class="close{{$a+1}}"> </div>
           <div class="cart-sec simpleCart_shelfItem">
              <div class="cart-item cyc">
                 {!! Html::image('front/images/sampel.jpg','',['class' => 'img-responsive']) !!}
              </div>
               <div class="cart-item-info">
              <h3><a href="#"> {{ \DB::table('products')->where('id',$charts[$a]->product_id)->value('name') }} </a><span>Pickup time:</span></h3>
              <ul class="qty">
                <li><p>Min. order value:</p></li>
                <li><p>FREE delivery</p></li>
                <li><p>Quantity : <input type="number" min="1" max="100" value="{{ $charts[$a]->quantity }}"></p></li>
              </ul>
                 <div class="delivery">
                 <p>Amount : Rp. {{ number_format(\DB::table('products')->where('id',$charts[$a]->product_id)->value('amount')) }}</p>
                 <span>Delivered in 1-1:30 hours</span>
                 <div class="clearfix"></div>
                  </div>
               </div>
               <div class="clearfix"></div>

            </div>
         </div>
        @else
        <script>$(document).ready(function(c) {
          $('.close{{$a+1}}').on('click', function(c){
            $('.cart-header{{$a+1}}').fadeOut('slow', function(c){
              $('.cart-header{{$a+1}}').remove();
            });
            });
          });
         </script>
         <div class="cart-header{{$a+1}}">
           <div class="close{{$a+1}}"> </div>
           <div class="cart-sec simpleCart_shelfItem">
              <div class="cart-item cyc">
                 {!! Html::image('front/images/sampel.jpg','',['class' => 'img-responsive']) !!}
              </div>
               <div class="cart-item-info">
              <h3><a href="#"> {{ \DB::table('products')->where('id',$charts[$a]->product_id)->value('name') }} </a><span>Pickup time:</span></h3>
              <ul class="qty">
                <li><p>Min. order value:</p></li>
                <li><p>FREE delivery</p></li>
                <li><p>Quantity : <input type="number" min="1" max="100" value="{{ $charts[$a]->quantity }}"></p></li>
              </ul>
                 <div class="delivery">
                 <p>Amount : Rp. {{ number_format(\DB::table('products')->where('id',$charts[$a]->product_id)->value('amount')) }}</p>
                 <span>Delivered in 1-1:30 hours</span>
                 <div class="clearfix"></div>
                  </div>
               </div>
               <div class="clearfix"></div>

            </div>
         </div>
        @endif


      @endfor
    </div>
    </div>
     <!--//checkout-->
@endsection
