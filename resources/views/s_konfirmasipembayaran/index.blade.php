@extends('speedshop.app')

@section('additional_css')

@endsection

@section('content')



<style type="text/css">

#common-page-header {
    margin-top: 50px;
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

<div class="container" id="common-page-header">
        <br>
        <br>
        <h1>Konfirmasi Pembayaran</h1>
</div>

<div class="container" id="common-page-content">
    <div id="payment-notif-form" class="wrapper">
        <p></p><p>Setelah transfer, jangan lupa langsung konfirmasi ya bosku.<br><br>Orderan akan otomatis batal apabila tidak dilakukan transfer dari 24 jam.<br><br></p>
        <form id="form_payment" method="post" enctype="multipart/form-data">
        </form><ul>

        </ul>
        <p></p>
    </div>

    <div class="col-md-6">
      <br>
      <h2>Data Pribadi</h2>
      <br>
      {!! Form::open(['route'=>'konfirmasipembayaran.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-confirmation-payment']) !!}
              <div class="form-group">
                  <label class="control-label col-md-3" for="order_id">Order ID </label>
                  <div class="col-sm-4">
                  <input id="input_order_id" type="text" name="order_id" required="" value="">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="input_date">Tanggal Transaksi </label>
                  <div class="col-sm-4">
                    <input type='text' class="form-control" id='datepicker' name="input_date"/>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="name">Nama Pengirim </label>
                  <div class="col-sm-4">
                  <input id="input_name" type="text" name="name" required="" value="">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="amount">Jumlah Ditransfer </label>
                  <div class="col-sm-4">
                  <input id="input_amount" type="text" name="amount" required="" value="">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="email">Pembayaran </label>
                  <div class="col-sm-4">
                    <select name="input_bank_to" required="required">
                      <option value="" selected="selected">--Pilih Akun Bank--</option>
                      <option value="mandiri">Mandiri</option>
                      <option value="bca">BCA</option>
                      <option value="bri">BRI</option>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="email">Email </label>
                  <div class="col-sm-4">
                  <input id="input_email" type="email" name="email" required="" value="">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
