<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('speedshop') }}">ICON SPEEDSHOP</a>
    <a class="navbar-brand" href="{{ url('konfirmasipembayaran') }}">konfirmasi</a>
  </div>
    <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category
          <span class="caret"></span></a>
          <ul class="dropdown-menu list">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
      </ul>
    <div class="col-sm-7 col-md-7">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Produk" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right total">
      <li class="total">
            <a href="{{ url('chart') }}">
              <i class="glyphicon glyphicon-shopping-cart"></i>
							@if(Auth::guest())
								<span id="simpleCart_quantity" class="label label-default">
									0
								</span>
							@else
								<span id="simpleCart_quantity" class="label label-default">
									<?php
									$customer_id = \DB::table('customers')->where('id_user',Auth::user()->id)->value('id');
									$sum = \DB::table('charts')->where('customer_id',$customer_id)->groupBy('product_id')->get();
									echo count($sum);
									?>

								</span>
							@endif
            </a>

          </li>
      <li>
									@if (Auth::guest())
                  <a href="{{ url('daftar')}}"><span></span> Daftar</a></li>
                  <li><a href="{{ url('masuk')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
									@else
											<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
															<span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span>
													</a>
                          <ul class="dropdown-menu" role="menu">
															<li><a href="{{ URL::to('keluar')}}"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
													</ul>
											</li>
									@endif
    </ul>
    <div class="clearfix"></div>
</nav>
<br>
<br>
