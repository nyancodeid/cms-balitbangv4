<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ base_url('assets/css/material.css') }}">

	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/dashboard/default.style.css').'?r='.rand(1000, 9999) }}">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Roboto" rel="stylesheet">
	
	<!-- Reset CSS -->
	<style>
	a:hover,
	a:focus {
		text-decoration: none;
	}
	my-apps {display: block;}
	</style>

	<!-- Custom CSS Inside HTML -->
	@yield('style')

	<!-- CSRF Protect -->
	@include('Components/csrfToken')
</head>
<body scroll-spy="" id="top" class="theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
	<my-apps>

	@include($pathTheme.'components/header')

	</my-apps>

	<!-- Javascript Vendor -->
	<script src="{{ base_url('assets/js/jquery.js') }}"></script>
	<script src="{{ base_url('assets/js/bootstrap.js') }}"></script>
	<script src="{{ base_url('assets/js/material.js') }}"></script>

	<!-- Balitbang Configuration Dont Remove this -->
	<script>
	var bbConfig = {{ $balitbangConfig }};
	</script>

	<!-- Custom Javascript inside HTML -->
	@yield('javascript')
</body>
</html>