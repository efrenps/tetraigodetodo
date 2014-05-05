<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	<!-- Frameworks -->
	{{ HTML::style('packages/awesome/css/font-awesome.min.css'); }} 
   	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css'); }}
   	{{ HTML::style('packages/bootstrap/css/summernote.css'); }}
   	{{ HTML::style('packages/toastr/css/toastr.min.css'); }}
   	{{ HTML::style('packages/bootflat/css/bootflat.css'); }}
   	{{ HTML::style('packages/bxslider/bxslider.css'); }}

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
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Servicios</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> -->
							</ul>
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Ordenar</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> -->
							</ul>
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Nosotros</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> -->
							</ul>
							<ul class="nav navbar-nav">
								<li class=""><a href="#">Contáctenos</a></li>
								<!-- <li class="disabled"><a href="#">Link</a></li> -->
							</ul>
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
    	<div class="col-md-12">
    		footer
    	<br><br><br><br>
    	</div>
    </footer>
    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('packages/toastr/js/toastr.min.js'); }}
    {{ HTML::script('packages/bxslider/bxslider.min.js'); }}
    <script type="text/javascript">
	$('.bxslider').bxSlider({
	  auto: true,
	  autoControls: true,
	  //adaptiveHeight: true,
	});
</script>
</body>
</html>