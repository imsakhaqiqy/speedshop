@extends('speedshop.app')

@section('content')

<!--start-content-->
<!-- checkout -->
<div class="cart">
<div class="cart-items">
 <div class="container">
   @if(Auth::guest())

   @else

   {!! Form::open(['route'=>'chart.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-to-pembayaran']) !!}
    <div class="col-md-8">
      <h3 class="tittle">My shopping({{count($charts)}})</h3>
      <?php
      $total_belanja = 0;
      ?>
      @for($a = 0; $a < count($charts); $a ++)
        <script>$(document).ready(function(c) {
          $('.cl{{$a}}').on('click', function(c){
            $('.ch{{$a}}').fadeOut('slow', function(c){
              $('.ch{{$a}}').remove();
            });
            });
          });
         </script>
         <div class="cart-header ch{{$a}}">
           <input type="hidden" name="product[]" value="{{ \DB::table('products')->where('id',$charts[$a]->product_id)->value('id') }}">
           <div class="close1 cl{{$a}}"> </div>
           <div class="cart-sec simpleCart_shelfItem">
              <div class="cart-item cyc">
                  <?php
                      $image = \DB::table('products')->where('id',$charts[$a]->product_id)->value('image');

                  ?>
                 {!! Html::image("front/images/$image",'',['class' => 'img-responsive']) !!}
              </div>
               <div class="cart-item-info">
              <h3><a href="#"> {{ \DB::table('products')->where('id',$charts[$a]->product_id)->value('name') }} </a></h3>

              <ul class="qty">
                <li><p>Postal fee</p></li>
                <li></li>
                <li><p>Quantity : <input type="number" min="1" max="100" value="{{ $charts[$a]->quantity }}" name="quantity[]"></p></li>
              </ul>
                 <div class="delivery">
                  <?php

                    $total_belanja += \DB::table('products')->where('id',$charts[$a]->product_id)->value('amount')*$charts[$a]->quantity;
                  ?>
                 <p>IDR {{ number_format(\DB::table('products')->where('id',$charts[$a]->product_id)->value('amount')*$charts[$a]->quantity) }}</p>
                 <span>Delivered in 1-1:30 hours</span>
                 <div class="clearfix"></div>
                  </div>
               </div>
               <div class="clearfix"></div>

            </div>
         </div>
      @endfor
    </div>
    <div class="col-md-4">

        <div class="account-top">
          <h3>Payment All</h3>
        </div>
        <div class="address">
          <span>Total Shopping : IDR {{ number_format($total_belanja) }}</span>
        </div>
        <div class="address new">
          <input type="submit" value="Payment" class="btn btn-default">
          <!-- <a href="{{ url('pembayaran') }}" class="btn btn-danger">
            Bayar Sekaligus
          </a> -->
        </div>
       </form>
    </div>
   {!! Form::close() !!}
   @endif
  </div>
</div>
</div>
     <!--//checkout-->
@endsection
