<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<!-- Frameworks -->
	{{ HTML::style('packages/awesome/css/font-awesome.min.css'); }} 
   	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css'); }}
   	{{ HTML::style('packages/bootstrap/css/summernote.css'); }}
   	{{ HTML::style('packages/toastr/css/toastr.min.css'); }}
   	{{ HTML::style('packages/bootflat/css/bootflat.css'); }}
   	{{ HTML::style('packages/bxslider/bxslider.css'); }}
   	{{ HTML::style('css/layout.css'); }}
   	{{ HTML::style('css/contacto.css'); }}

   	<!-- Fonts -->
   	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
        {{ HTML::script('packages/html5/html5shiv.js') }}
        {{ HTML::script('packages/html5/respond.min.js') }}
   <![endif]-->
</head>
<body>
	<div class="row">
		<div class="">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="img/logo.png" style="max-width:80%;" />
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="navbar-form navbar-right" role="search">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> -->
							</ul>
							<!-- <ul class="nav navbar-nav">
								<li class=""><a href="#">Servicios</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> 
							</ul>
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Ordenar</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> 
							</ul>
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Nosotros</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> 
							</ul>
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Contáctenos</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> 
							</ul> -->
							<!--<ul class="nav navbar-nav">
								<li class=""><a href="#"><i class="fa fa-users"></i> Ingresar</a></li>
								 <li class="disabled"><a href="#">Link</a></li> 
							</ul>-->
								<!-- <li class=""><a href="#" style="font-size: 2.5em;"><i class="fa fa-facebook-square"></i></a></li>
								<li class="disabled"><a href="#">Link</a></li> -->
						</div>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<div class="row">
          @yield('content')
    </div>
    <footer class="row" style="background-color:#48CFAD">    	
    	<div class="row" style="margin-top:1%; margin-bottom:2%;background-color:#FFFFFF;">
<!--     		<div id="tickerContainer" class="col-md-12">
    			<ul id="ticker">
					<li><a target="_blank" href="http://www.amazon.com/"><span><img src="img/site/logos/1_2_amazon.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/12_1_ebaylisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/9_3_americanlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/13_1_foreverlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/15_3_oldnavylisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/33_1_buyclisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/10_2_rakutenlistos.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/76_1_walmartlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/67_1_babylisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/11_1_gaplisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/35_1_disneylisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/54_1_tigerlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/46_1_jcplisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/49_1_dollarlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/72_1_music123.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/93_1_fox.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/106_1_loft.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/42_3_destinationlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/19_1_shoelisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/17_2_victorialisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/18_1_spiritlisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/8_1_aplisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/69_1_barneslisto.jpg" alt=""></span></a></li>
					<li><a target="_blank" href="#"><span><img src="img/site/logos/82_3_crocslisto.jpg" alt=""></span></a></li>
				</ul>
    		</div> -->
    	</div>
    	<div class="row">
    		<div class="col-md-4">
    			<img src="img/logo.png" style="max-width:50%;"/>
    		</div>
    		<div class="col-md-4" style="text-align:center;">
    			<label>Copyright © 2014 - Tetraigodetodo.com</label>
    			<label>| Terminos y condiciones |</label>
    		</div>
    		<div class="col-md-4" style="text-align:right;font-size:250%; padding-right:3%;color:white;">
    			<label>
    				<i class="fa fa-facebook-square"></i>
    			</label>
    			<label>
    				<i class="fa fa-twitter-square"></i>
    			</label>
    		</div>
    	</div>
    </footer>
    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('packages/toastr/js/toastr.min.js'); }}
    {{ HTML::script('packages/bxslider/bxslider.min.js'); }}

    @yield('scripts')
    
    <script type="text/javascript">
	$("#banner").bxSlider({
	  auto: true,
	  autoControls: true,
	  //adaptiveHeight: true,
	});
	
	$("#ticker").bxSlider({
	  minSlides: 4,
	  maxSlides: 4,
	  slideWidth: 270,
	  slideMargin: 30,
	  ticker: true,
	  speed: 60000
	});

	function StartToastMessage()
	{
	    toastr.options = {
	      "closeButton": false,
	      "debug": false,
	      "positionClass": "toast-center-screen",
	      "onclick": null,
	      "showDuration": "300",
	      "hideDuration": "1000",
	      "timeOut": "5000",
	      "extendedTimeOut": "1000",
	      "showEasing": "swing",
	      "hideEasing": "linear",
	      "showMethod": "fadeIn",
	      "hideMethod": "fadeOut"
	    } 
	}

</script>
</body>
</html>