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
.affix{
  
}
</style>
<div class="container">
  <div class="col-md-6">
    <br>
    <h2>Data Pribadi</h2>
    <br>
    <form class="form-horizontal" action="" novalidate="novalidate" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Nama </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" required="" value="{{ $customer[0]->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">No. HP </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" required="" value="{{ $customer[0]->phone }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" required="" value="{{ $customer_email->email }}">
                </div>
            </div>
            <br>
            <h2>Alamat Pengiriman</h2>
            <br>

            <div class="form-group">
              <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
            </div>
            <br>

            <h2 class="">Metode Pengiriman</h2>

            <div id="form-row-shipping_value_wrapper" class="sirclo-form-row">
              <div id="form-row-shipping_value" class="sirclo-form-row">
              <div class="sirclo-form-input radio">
                <div class="radio"><input value="jne" name="shipping_value" type="radio" required="">JNE</div>
                <div class="radio"><input value="jnt" name="shipping_value" type="radio" required="">J&amp;T</div>
                <div class="radio"><input value="gojek" name="shipping_value" type="radio" required="">GOJEK</div>
              </div>
              </div>
            </div>
            <br>

            <h2 class="">Metode Pembayaran</h2>

            <div id="form-row-payment_method" class="sirclo-form-row">
              <div class="sirclo-form-input radio">
                <div class="radio"><input value="bank-transfer" name="payment_method" type="radio" required="">Bank Transfer Mandiri</div>
                <div class="radio"><input value="bank-transfer" name="payment_method" type="radio" required="">Bank Transfer BCA</div>
                <div class="radio"><input value="bank-transfer" name="payment_method" type="radio" required="">Bank Transfer BRI</div>
              </div>
            </div>
            <br>
            <div id="form-row-agreement" class="sirclo-form-row">
                <div class="sirclo-form-input checkbox">
                    <input name="agreement" required="" type="checkbox">
                    <label for="agreement">
                        I agree to Terms of Use and Privacy Policy
                        <span class="required">*</span>
                    </label>
                </div>
            </div>
            <div id="form-row-" class="sirclo-form-row">
                <div class="sirclo-form-row notice"><span class="required"></span></div><div class="checkout-error"></div>
                <br>
                <input type="submit" value="Checkout" class="btn btn-info">
            </div>
        </form>

</div>
  <div class="col-md-6">
    <br>
    <div data-spy="affix" data-offset-top="0">
    <h2>Ringkasan Pesanan</h2>
    <br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
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
             <td></td>
             <td><p>{{ \DB::table('products')->where('id',$product['product_id'])->value('name') }}</p></td>
             <td><p><input type="number" min="1" max="100" value="{{ $product['quantity']}}" name="quantity[]"></p></td>
             <td><p>Rp. {{ number_format(\DB::table('products')->where('id',$product['product_id'])->value('amount')) }}</p></td>
           </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>

</div>
@endsection

@section('additional_scripts')

<script type="text/javascript">


		$(document).ready(function() {
    // Fungsi dimulai...
    	$('#home').hide();
    	$('.header_bg').hide();
    	$('.footer').hide();
      $('.socials').hide();
      $('.copy').hide();
		});


</script>

@endsection
