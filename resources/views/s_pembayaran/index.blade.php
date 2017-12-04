@extends('speedshop.app')

@section('content')
<br>
<br>
<br>
<br>
<div class="col-md-6">
    <br>
    <h2>Data Pribadi</h2>
    <br>
    <form class="form-horizontal" action="" novalidate="novalidate" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Nama </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" required="" value="andriyanj@yahoo.com">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">No. HP </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" required="" value="andriyanj@yahoo.com">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email </label>
                <div class="col-sm-10">
                <input id="input_email" type="email" name="email" required="" value="andriyanj@yahoo.com">
                </div>
            </div>
            <br>
            <h3>Alamat Pengiriman</h3>
            <br>

            <div class="form-group">
              <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
            </div>
            <br>

            <h3 class="">Metode Pengiriman</h3>

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

            <h3 class="">Metode Pembayaran</h3>

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
