@extends('speedshop.app')

@section('content')
<!--start-content-->
<!-- checkout -->
<div class="cart-items">
 <div class="container">
   {!! Form::open(['route'=>'chart.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-to-pembayaran']) !!}
    <div class="col-md-8">
      <h3 class="tittle">My shopping(3)</h3>
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
              <h3><a href="#"> {{ \DB::table('products')->where('id',$charts[$a]->product_id)->value('name') }} </a><span>Pickup time:</span></h3>
              <ul class="qty">
                <li><p>Min. order value:</p></li>
                <li><p>FREE delivery</p></li>
                <li><p>Quantity : <input type="number" min="1" max="100" value="{{ $charts[$a]->quantity }}" name="quantity[]"></p></li>
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
      @endfor
    </div>
    <div class="col-md-4">

        <div class="account-top">
          <h3>Bayar Sekaligus</h3>
        </div>
        <div class="address">
          <span>Item Di Pilih</span>
        </div>
        <div class="address">
          <span>Total Belanja</span>
        </div>
        <div class="address new">
          <input type="submit" value="Bayar Sekaligus" class="btn btn-default">
          <!-- <a href="{{ url('pembayaran') }}" class="btn btn-danger">
            Bayar Sekaligus
          </a> -->
        </div>
       </form>
    </div>
  </div>
 {!! Form::close() !!}
</div>
     <!--//checkout-->
@endsection
