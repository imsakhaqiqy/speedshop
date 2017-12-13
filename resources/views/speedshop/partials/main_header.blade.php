@section('additional_css')

@endsection
<link href='https://fonts.googleapis.com/css?family=Rale Way' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>

<style type="text/css">

.flipkart-navbar {
    background-color: #34495E;
    height: 70px;
    padding:10px;
    -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
}
.icon{
  font-family: 'Audiowide';font-size: 22px;
  color: #fff;
}
.speedshop{
  font-family: 'Courgette';font-size: 22px;
  color: #F22613;
}
.cari{
  height: 10px;
  width: 20px;
}
.tulisan{
  font-size: 16px;
  font-family: 'Rale Way';
  color:#fff;
}

.tulisan a{
  color:#fff;
  font-weight: bold;

}
.cari{
  background-color: #293A4A;
}
#category{
    min-width: 160px;
    margin-top: 9px;
    padding: 1px 1px 0;
    background-color: #34495e;
    overflow:hidden;
    -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
.dropdown-menu > li > a {
    color: #e1e4e7;
    border-radius: 4px;
    padding: 6px 9px;
  }
#profil{
    min-width: 160px;
    margin-top: 10px;
    padding: 1px 1px 0;
    overflow:hidden;
    background-color:#34495e;
    -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
#login-dp{
    min-width: 300px;
    margin-top: 10px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:#ECF0F1;
    -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
#login-dp .help-block{
    font-size:12px
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin:5px 5px 10px 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
</style>

<nav class="navbar flipkart-navbar navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="{{ url('speedshop') }}"><span class="icon">Icon</span><span class="speedshop">SpeedShop</span></a>
  </div>
    <ul class="nav navbar-nav">
        <li class="dropdown tulisan ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-th-list" ></span> Category
          </a>
            <?php
              $category = \DB::table('families')->get();

             ?>
          <ul id="category" class="dropdown-menu menu">
            <?php foreach ($category as $key){?>
              <li><i></i><a href="{{url('list-product')}}"><?php echo $key->name;?></a></li>

          <?php  } ?>

          </ul>
        </li>
      </ul>
    <div class="col-sm-6 col-md-6">
        <form class="navbar-form" role="search" action="{{ url('list-product') }}">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Product" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right total">

      <li class="total tulisan">
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

              <li class="tulisan">
									@if (Auth::guest())
                  <a href="{{ url('daftar')}}"><span></span> Sign Up</a>
              </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle tulisan" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><b> Login</b></a>
                      <ul id="login-dp" class="dropdown-menu">
                        <li>
				                    <div class="row">
						                <div class="col-md-12">
            								Login via
            								<div class="social-buttons">
            									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
            									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
            								</div>
                            or
                           {!! Form::open(['url'=>'berhasil', 'method'=>'post', 'class'=>'form-horizontal']) !!}
                           <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                          		<div class="form-group">
                          			 <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          			 <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
                          		</div>
                          		<div class="form-group">
                          			 <label class="sr-only" for="exampleInputPassword2">Password</label>
                          			 <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                                                       <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                          		</div>
                          		<div class="form-group">
                          			 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                          		</div>
                           </form>
                           </div>
                           </div>
                          </li>
                        </ul>
                      </li>
									@else
											<li class="dropdown tulisan">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
															<span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span>
													</a>
                          <ul id="profil" class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{ url('konfirmasipembayaran') }}"><i class="glyphicon glyphicon-check"></i> Confirmation
                                  <span id="konfirmasi" class="label label-default">0</span>
                              </a>
                            </li>
															<li>
                                <a href="{{ URL::to('keluar')}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                              </li>
													</ul>
											</li>
									@endif
    </ul>


    <div class="clearfix"></div>
</nav>
<br>
<br>
