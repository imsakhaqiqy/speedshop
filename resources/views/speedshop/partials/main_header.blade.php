
<!--start-home-->
<!-- <ul id="overflow">
  <li id="facebook"><a href="#">Facebook</a></li>
  <li id="twitter"><a href="#">Twitter</a></li>
  <li id="google"><a href="#">Google</a></li>
</ul> -->
<div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<div class="logo">
					<h3 class="logo-brand">
	 			  	<a href="index.html" title="Belanja Online Aman, Nyaman dan Terpercaya">Icon SpeedShop</a>
					</h3>
	 		  </div>
			</div>
			<div class="container-fluid">
				<ul class="nav navbar-nav kategori">
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
					<form class="navbar-form navbar-left" style="width:50%">
						<div class="input-group cariproduk">
							<input type="text" class="form-control" placeholder="Cari Produk">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
			</div>
			<div class="top_left register">
				<ul>
					<li><h6><a href="{{ url('daftar')}}">Register</a></h6></li>

						<div class="collapse navbar-collapse" id="app-navbar-collapse">
							<!-- Right Side Of Navbar -->
								<ul class="nav navbar-nav navbar-right">
									@if (Auth::guest())
									<li><h6><span></span><a href="{{ url('masuk')}}">Login</a></h6></li>
									@else
											<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
															{{ Auth::user()->name }} <span class="caret"></span>
													</a>

													<ul class="dropdown-menu" role="menu">
															<li><a href="{{ URL::to('keluar')}}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
													</ul>
											</li>
									@endif
							</ul>
					</div>
				</ul>
				<div class="cart box_1">
					<a href="checkout.html">
					<div class="total">
						<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
						<i class="glyphicon glyphicon-shopping-cart"></i></a>
					<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					<div class="clearfix"> </div>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-->
<!-- <div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		  <div class="header_right">

		</div>
		<div class="clearfix"></div>
	    </div> -->
		<!--start-header-menu-->
		<!--<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">Pools &amp; Tees</a></li>
									<li><a href="product.html">shirts</a></li>
									<li><a href="product.html">shorts</a></li>
									<li><a href="product.html">twinsets</a></li>
									<li><a href="product.html">kurts</a></li>
									<li><a href="product.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">Handbag</a></li>
									<li><a href="product.html">Slingbags</a></li>
									<li><a href="product.html">Clutches</a></li>
									<li><a href="product.html">Totes</a></li>
									<li><a href="product.html">Wallets</a></li>
									<li><a href="product.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
									<li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">Belts</a></li>
									<li><a href="product.html">Pens</a></li>
									<li><a href="product.html">Eyeglasses</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">Watches</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">TUXEDO</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">Pools &amp; Tees</a></li>
									<li><a href="product.html">shirts</a></li>
									<li><a href="product.html">shorts</a></li>
									<li><a href="product.html">twinsets</a></li>
									<li><a href="product.html">kurts</a></li>
									<li><a href="product.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">Handbag</a></li>
									<li><a href="product.html">Slingbags</a></li>
									<li><a href="product.html">Clutches</a></li>
									<li><a href="product.html">Totes</a></li>
									<li><a href="product.html">Wallets</a></li>
									<li><a href="product.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
								    <li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">Belts</a></li>
									<li><a href="product.html">Pens</a></li>
									<li><a href="product.html">Eyeglasses</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">Watches</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">Pools &amp; Tees</a></li>
									<li><a href="product.html">shirts</a></li>
									<li><a href="product.html">shorts</a></li>
									<li><a href="product.html">twinsets</a></li>
									<li><a href="product.html">kurts</a></li>
									<li><a href="product.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">Handbag</a></li>
									<li><a href="product.html">Slingbags</a></li>
									<li><a href="product.html">Clutches</a></li>
									<li><a href="product.html">Totes</a></li>
									<li><a href="product.html">Wallets</a></li>
									<li><a href="product.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
									<li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">Belts</a></li>
									<li><a href="product.html">Pens</a></li>
									<li><a href="product.html">Eyeglasses</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">Watches</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">SHOES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">Pools &amp; Tees</a></li>
									<li><a href="product.html">shirts</a></li>
									<li><a href="product.html">shorts</a></li>
									<li><a href="product.html">twinsets</a></li>
									<li><a href="product.html">kurts</a></li>
									<li><a href="product.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">Handbag</a></li>
									<li><a href="product.html">Slingbags</a></li>
									<li><a href="product.html">Clutches</a></li>
									<li><a href="product.html">Totes</a></li>
									<li><a href="product.html">Wallets</a></li>
									<li><a href="product.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
									<li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">Belts</a></li>
									<li><a href="product.html">Pens</a></li>
									<li><a href="product.html">Eyeglasses</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">Watches</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>

				<li><a class="color7" href="#">GLASSES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">Pools &amp; Tees</a></li>
									<li><a href="product.html">shirts</a></li>
									<li><a href="product.html">shorts</a></li>
									<li><a href="product.html">twinsets</a></li>
									<li><a href="product.html">kurts</a></li>
									<li><a href="product.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">Handbag</a></li>
									<li><a href="product.html">Slingbags</a></li>
									<li><a href="product.html">Clutches</a></li>
									<li><a href="product.html">Totes</a></li>
									<li><a href="product.html">Wallets</a></li>
									<li><a href="product.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
									<li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">Belts</a></li>
									<li><a href="product.html">Pens</a></li>
									<li><a href="product.html">Eyeglasses</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">Watches</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>

				<li><a class="color8" href="#">T-SHIRT</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
									<li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.html">login</a></li>
									<li><a href="account.html">create an account</a></li>
									<li><a href="product.html">create wishlist</a></li>
									<li><a href="product.html">my shopping bag</a></li>
									<li><a href="product.html">brands</a></li>
									<li><a href="product.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.html">new arrivals</a></li>
									<li><a href="product.html">men</a></li>
									<li><a href="product.html">women</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul>-->

	</div>
</div>
</div>
