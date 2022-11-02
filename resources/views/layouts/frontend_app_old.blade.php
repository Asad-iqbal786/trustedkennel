<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href=" {{asset('frontend/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href=" {{asset('frontend/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href=" {{asset('frontend/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href=" {{asset('frontend/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href=" {{asset('frontend/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href=" {{asset('frontend/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href=" {{asset('frontend/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href=" {{asset('frontend/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href=" {{asset('frontend/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href=" {{asset('frontend/css/slicknav.min.css')}}">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href=" {{asset('frontend/css/reset.css')}}">
	<link rel="stylesheet" href=" {{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href=" {{asset('frontend/css/responsive.css')}}">
	<link rel="stylesheet" href=" {{asset('frontend/css/custom.css')}}">

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @stack('styles')

        
</head>
<body class="js">

    @include('frontend.partials.header')


		@yield('main-content')

    @include('frontend.partials.footer')

	
	
    <!-- Modal end -->
	
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="j{{asset('frontend/s/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="j{{asset('frontend/s/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>
	<script src="{{asset('frontend/js/custom.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	
	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
@stack('scripts')

</body>
</html>