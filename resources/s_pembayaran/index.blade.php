@extends('speedshop.app')

@section('aditional_css')

<div class="col-sm-6 col-md-6">
    <h2>Data Pribadi</h2>
    <br>
    <form class="sirclo-form shipping-form" action="" novalidate="novalidate" method="post" enctype="multipart/form-data"><div class="address address-autocomplete address-shipping-autosubmit">
            <div id="form-row-first_name" class="sirclo-form-row">
                <div class="sirclo-form-label">
                    <label for="first_name">
                        Nama
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="sirclo-form-input">
                    <input id="input_first_name" type="text" name="first_name" required="" value="Andri Yan Jisnu" class="valid">
                </div>
            </div>
            <div id="form-row-phone" class="sirclo-form-row">
                <div class="sirclo-form-label">
                    <label for="phone">
                        No HP
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="sirclo-form-input">
                    <input id="input_phone" type="text" name="phone" required="" value="089630913301">
                </div>
            </div>
            <div id="form-row-email" class="sirclo-form-row">
                <div class="sirclo-form-label">
                    <label for="email">
                        E-mail
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="sirclo-form-input">
                    <input id="input_email" type="email" name="email" required="" value="andriyanj@yahoo.com">
                </div>
            </div></div><h3 class="">Alamat Pengiriman</h3>
            <div id="form-row-is_set_delivery" class="sirclo-form-row">
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            </div></div><h3 class="">Metode Pengiriman</h3>
            <div id="form-row-shipping_value_wrapper" class="sirclo-form-row">
              <div id="form-row-shipping_value" class="sirclo-form-row">
              <div class="sirclo-form-input radio">
                <div class="radio"><input value="jne" name="shipping_value" type="radio" required="">JNE</div>
                <div class="radio"><input value="jnt" name="shipping_value" type="radio" required="">J&amp;T</div>
                <div class="radio"><input value="gojek" name="shipping_value" type="radio" required="">GOJEK</div>
              </div>
              </div>
            </div>
            <h3 class="">Metode Pembayaran</h3>
            <div id="form-row-payment_method" class="sirclo-form-row">
              <div class="sirclo-form-input radio">
              <div class="radio"><input value="bank-transfer" name="payment_method" type="radio" required="">Bank Transfer Mandiri</div>
              <div class="radio"><input value="bank-transfer" name="payment_method" type="radio" required="">Bank Transfer BCA</div>
              <div class="radio"><input value="bank-transfer" name="payment_method" type="radio" required="">Bank Transfer BRI</div>
              </div>
            </div>
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
                <div class="sirclo-form-row notice"><span class="required">*</span> wajib diisi.</div><div class="checkout-error"></div><input type="submit" value="Checkout" class="btn btn-info">
            </div></form>

</div>
