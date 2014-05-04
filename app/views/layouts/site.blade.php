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

   	<!-- Fonts -->
   	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
        {{ HTML::script('packages/html5/html5shiv.js') }}
        {{ HTML::script('packages/html5/respond.min.js') }}
   <![endif]-->
</head>
<body>
	<div id="navigation">
		navigation bar
	</div>
	<div id="main-container" class="container-fluid">
          @yield('content')
    </div>
    <footer>
    	footer
    </footer>
    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('packages/toastr/js/toastr.min.js'); }}
</body>
</html>