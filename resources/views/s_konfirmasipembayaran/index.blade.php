@extends('speedshop.app')

@section('additional_css')

@endsection

@section('content')



<style type="text/css">

#common-page-header {
    margin-top: 28px;
    background-color: #f6f6f6;
    height: 130px;
    background-size: cover !important;
}

#common-page-content {
    background: #fff;
    margin-top: 20px;
}

#common-page-content .wrapper {
    padding: 30px 30px;
}

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

<div class="container" id="common-page-content">
    <br>
    <h1>Payment Confirmation</h1>
    <div id="payment-notif-form" class="wrapper">
        <p><span style="color:red">Note :</span> After the transfer, do not forget direct confirmation.</p>
        <p>Order will be automatically canceled if no transfer from 24 hours.</p>
        <form id="form_payment" method="post" enctype="multipart/form-data">
        </form><ul>
        </ul>
        <p></p>
    </div>

    <div class="col-md-6">
      <br>
      <h2>Personal Data</h2>
      <br>
      {!! Form::open(['route'=>'konfirmasipembayaran.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-confirmation-payment']) !!}
              <div class="form-group">
                  <label class="control-label col-md-3" for="order_id">Order ID </label>
                  <div class="col-sm-4">
                  <input id="input_order_id" type="text" name="order_id" required="" value="" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="input_date">Transfer Date</label>
                  <div class="col-sm-4">
                    <input type='date' class="form-control"/>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="name">Transfer Name</label>
                  <div class="col-sm-4">
                  <input id="input_name" type="text" name="name" required="" value="" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="amount">Transfer Amount</label>
                  <div class="col-sm-4">
                  <input id="input_amount" type="text" name="amount" required="" value="" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="email">Bank Name</label>
                  <div class="col-sm-4">
                    <select name="input_bank_to" required="required" class="form-control">
                      <option value="" selected="selected">--Pilih Akun Bank--</option>
                      <option value="mandiri">Mandiri</option>
                      <option value="bca">BCA</option>
                      <option value="bri">BRI</option>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="email">Email </label>
                  <div class="col-sm-5">
                  <input id="input_email" type="email" name="email" required="" value="{{ Auth::user()->email }}" class="form-control">
                  </div>
              </div>
              <div id="form-row-" class="sirclo-form-row">
                  <div class="sirclo-form-row notice"><span class="required"></span></div><div class="checkout-error"></div>
                  <br>
                  <input type="submit" value="Konfirmasi" class="btn btn-info">
              </div>
    {!! Form::close() !!}
    </div>

</div>
<br>


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

    $(function () {
      $('#datepicker').datepicker({
          format: 'mm/dd/yyyy',
          startDate: '-3d'
          });
      });


</script>





@endsection
