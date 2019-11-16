<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>NKStore</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}"/>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/slick.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/slick-theme.css') }}"/>

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/nouislider.min.css') }}"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/style.css') }}"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<!-- HEADER -->
		@include('user.layouts.header')
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		@include('user.layouts.nav')
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		@yield('breadcrumb')
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		@yield('content-title')
		<!-- /SECTION -->
		
		<!-- SECTION -->
		@yield('content-new')
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		@yield('content-hot')
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		@yield('content')
		<!-- /SECTION -->

		<!-- SECTION -->
		@yield('content-top')
		<!-- /SECTION -->

		<!-- SECTION -->
		@yield('content-related')
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		@include('user.layouts.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		@include('user.layouts.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ asset('user/js/jquery.min.js') }}"></script>
		<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('user/js/slick.min.js') }}"></script>
		<script src="{{ asset('user/js/nouislider.min.js') }}"></script>
		<script src="{{ asset('user/js/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('user/js/main.js') }}"></script>
		<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>

	</body>
	</html>
