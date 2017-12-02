<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Nuevo Shop a Ecommerce Online Shopping Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nuevo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{!! Html::style('front/css/bootstrap.css') !!}
<!-- Custom Theme files -->
{!! Html::style('front/css/style.css') !!}
{!! Html::script('front/js/jquery-1.11.1.min.js') !!}
<!-- start menu -->
{!! Html::style('front/css/megamenu.css') !!}
{!! Html::script('front/js/megamenu.js') !!}
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
{!! Html::script('front/js/menu_jquery.js') !!}
{!! Html::script('front/js/simpleCart.min.js') !!}
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
{!! Html::script('front/js/scripts.js') !!}
{!! Html::script('front/js/modernizr.custom.js') !!}
{!! Html::script('front/js/move-top.js') !!}
{!! Html::script('front/js/easing.js') !!}
{!! Html::style('front/css/flexslider.css') !!}
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
{!! Html::script('front/js/jquery.jscrollpane.min.js') !!}
<script type="text/javascript" id="sourcecode">
  $(function()
  {
    $('.scroll-pane').jScrollPane();
  });
</script>
<!-- //the jScrollPane script -->
<style>
  #overflow{
    position:fixed;
    top:0;
    left:100;margin-top:100px;
    display: block;
  }
  #overflow li{
    padding:10px;
  }
  #facebook{
    background-color: #3B5998;
  }
  #facebook a{
    color: #fff;
  }
  #twitter{
    background-color: #55ACEE;
    color: #fff;
  }
  #twitter a{
    color: #fff;
  }
  #google{
    background-color: #EA4335;
    color: #fff;
  }
  #google a{
    color: #fff;
  }


</style>

@yield('aditional_css')

</head>
<body>
  @include('speedshop.partials.main_header')

  @yield('content')
  <!-- START FOOTER -->
  @include('speedshop.partials.footer')

  @yield('additional_scripts')

</body>
</html>
