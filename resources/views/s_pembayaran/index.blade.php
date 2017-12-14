@extends('speedshop.app')

@section('additional_css')

@endsection

@section('content')
<style type="text/css">

h2 {
  font-size: 18px;
  font-weight: bold;
}
label {
    font-size: 13px;
    font-weight: normal;
}
input,p {
    font-size: 13px;
}
.radio {
    font-size: 13px;
}
</style>
<div class="container">
  <div class="col-md-6">
    <br>
    <br>
    <br>
    <h2>Personal Data</h2>
    <br>
    {!! Form::open(['route'=>'pembayaran.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-menu']) !!}
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name </label>
                <div class="col-sm-10">
                <input id="input_name" type="name" name="name" value="{{ $customer[0]->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="hp">No. HP </label>
                <div class="col-sm-10">
                <input id="input_hp" type="hp" name="hp" value="{{ $customer[0]->phone }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" value="{{ $customer_email->email }}">
                </div>
            </div>
            <br>
            <h2>Delivery Address</h2>
            <br>

            <div class="form-group">
              <div class="col-sm-10">
              <textarea class="form-control" name="address" rows="5" id="comment" required=""></textarea>
              </div>
            </div>
            <br>

            <h2 class="">Delivery Method</h2>

            <div id="form-row-shipping_value_wrapper" class="sirclo-form-row">
              <div id="form-row-shipping_value" class="sirclo-form-row">
              <div class="sirclo-form-input radio">
                <div class="radio"><input value="jne" name="delivery_method" type="radio" id="jne" required="">JNE</div>
                <div class="radio"><input value="j&t" name="delivery_method" type="radio" id="jnt" required="">J&amp;T</div>
                <div class="radio"><input value="gojek" name="delivery_method" type="radio" id="gojek" required="">GOJEK</div>
              </div>
              </div>
            </div>
            <br>

            <h2 class="">Payment Method</h2>

            <div id="form-row-payment_method" class="sirclo-form-row">
              <div class="sirclo-form-input radio">
                <div class="radio"><input value="mandiri" name="payment_method" type="radio" required="">Bank Transfer Mandiri</div>
                <div class="radio"><input value="bca" name="payment_method" type="radio" required="">Bank Transfer BCA</div>
                <div class="radio"><input value="bri" name="payment_method" type="radio" required="">Bank Transfer BRI</div>
              </div>
            </div>
            <br>
            <div id="form-row-agreement" class="sirclo-form-row">
                <div class="sirclo-form-input checkbox">
                    <input name="agreement" type="checkbox">
                    <label for="agreement">
                        I agree to Terms of Use and Privacy Policy
                        <span class="required">*</span>
                    </label>
                </div>
            </div>
            <div id="form-row-" class="sirclo-form-row">
                <div class="sirclo-form-row notice"><span class="required"></span></div><div class="checkout-error"></div>
                <br>
                @foreach($product_arr as $product)
                <input type="hidden" name="product_id_cart[]" value="{{ $product['product_id'] }}">
                <input type="hidden" name="quantity_cart[]" value="{{ $product['quantity'] }}">
                @endforeach
                <input type="submit" value="Checkout" class="btn btn-info">
            </div>
</div>
<br>
<br>
  <div class="col-md-6">
    <br>
    <div data-spy="affix" data-offset-top="0">
    <h2>Order Summary</h2>
    <br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>/Pcs</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sum_all = 0;
          ?>
          @foreach($product_arr as $product)
          <script>$(document).ready(function(c) {
            $('.cl').on('click', function(c){
              $('.ch').fadeOut('slow', function(c){
                $('.ch').remove();
              });
              });
            });
           </script>
           <tr>
             <td>
               <p>{{ \DB::table('products')->where('id',$product['product_id'])->value('name') }}</p>
               <input type="hidden" name="product_id[]" value="{{ $product['product_id'] }}">
             </td>
             <td><p>IDR <span class="sum_price_class">{{\DB::table('products')->where('id',$product['product_id'])->value('amount') }}
             </span>
             </p>
             </td>
             <td>
               <p><input id="quantity{{ $product['product_id'] }}" type="number" min="1" max="100" value="{{ $product['quantity']}}" name="quantity[]"></p>
             </td>
             <td>
              <input id="price{{ $product['product_id'] }}" name="price_per_item[]" type="hidden" value="{{ \DB::table('products')->where('id',$product['product_id'])->value('amount') }}">
               <p id="sum_price{{ $product['product_id'] }}">IDR <span class="sum_price_class">{{ \DB::table('products')->where('id',$product['product_id'])->value('amount')*$product['quantity'] }}
               </span>
               </p>
              </td>
               <?php $sum_all += \DB::table('products')->where('id',$product['product_id'])->value('amount')*$product['quantity']; ?>
           </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td>Postal Fee</td>
            <td id="postal_fee">IDR 0.00</td>
            <td>Total</td>
            <td>IDR <span id="total_harga">{{ $sum_all }}</span></td>
          </tr>
        </tfoot>
      </table>
    </div>
    </div>
  </div>
 {!! Form::close() !!}
</div>
<br>
@endsection

@section('additional_scripts')
{!! Html::script('front/js/autoNumeric.js') !!}

<script type="text/javascript">


		$(document).ready(function() {
    // Fungsi dimulai...
    	$('#home').hide();
    	$('.header_bg').hide();
    	$('.footer').hide();
      $('.socials').hide();
      $('.copy').hide();

        $('#jne').on('click',function(){
          $('#postal_fee').text('IDR 9.000,00');
        })
        $('#jnt').on('click',function(){
          $('#postal_fee').text('IDR 10.000,00');
        })
        $('#gojek').on('click',function(){
          $('#postal_fee').text('IDR 15.000,00');
        })

        $(".sum_price_class").autoNumeric('init',{
          aSep:',',
          aDec:'.'
        });
        $("#total_harga").autoNumeric('init',{
          aSep:',',
          aDec:'.'
        });
        @foreach($product_arr as $product)
          $("#quantity{{$product['product_id']}}").on('change',function(c){
            var quantity = $("#quantity{{$product['product_id']}}").val();
            var price = $("#price{{$product['product_id']}}").val();
            var sum = quantity*price;
            var sum_all = sum;
            $("#sum_price{{$product['product_id']}}").text(sum).autoNumeric('update',{
              aSep:',',
              aDec:'.'
            });
            $("#total_harga").text(sum_all);
          })
        @endforeach

		});


</script>

@endsection
