@extends('speedshop.app')

@section('aditional_css')

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<style type="text/css">
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #BFBFBF;
}
.logo1{
	font-family: 'Audiowide', 'Inconsolata', 'Droid Sans', serif;
  font-size: 38px;
  color: #fff;
}
.logo2{
  font-family: 'Courgette';
	font-size: 35px;
  color: #F22613;
}
.greenunderline{
	color:#F22613;
	text-decoration: underline;
}

.main{
 	margin-top:-30px;
}
hr{
	width: 10%;
	color: #fff;
}
.form-group{
	margin-bottom: 15px;
}
label{
	margin-bottom: 15px;
}
input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;
}
.login-register{
	font-size: 11px;
	text-align: center;
}
</style>

@endsection


@section('content')


<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1><span class="logo1">Icon</span><span class="logo2">Speedshop</span></h1>
										<br>
	               		<h3 class="text-center">Sign Up Account</h3>
	               		<p class="text-center unf-black2-text fs-15">
Already have account? Login <a href="{{ url('masuk') }}" class="greenunderline">Here</a>

                    </p>

	               	</div>
	            </div>
				<div class="main-login main-center">
					 {!! Form::open(['route'=>'daftar.store', 'role'=>'form', 'class'=>'form-horizontal', 'id'=>'form-create-role']) !!}

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile-phone fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone Number" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>

						<!-- <div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div> -->

						<div class="form-group ">
							<div class="col-sm-0 col-sm-offset-2">
				                <a href="{{ url('speedshop') }}" class="btn btn-white">
				                  <i class="fa fa-repeat"></i>&nbsp;Cancel
				                </a>
				                <button class="btn btn-primary" type="submit">
				                  <i class="fa fa-save"></i>&nbsp;Submit
				                </button>
				             </div>
						</div>

					{!! Form::close() !!}
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
			$('.navbar').hide();
		});
</script>

@endsection
