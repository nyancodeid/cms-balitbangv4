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
	</style>

	<!-- Custom CSS Inside HTML -->
	@yield('style')

	<!-- CSRF Protect -->
	@include('Components/csrfToken')


</head>
<body scroll-spy="" id="top" class="theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
	<balitbang-apps>
		@yield('content')
	</balitbang-apps>
	<div aria-live="assertive" aria-atomic="true" aria-relevant="text" class="mdl-snackbar mdl-js-snackbar">
	    <div class="mdl-snackbar__text"></div>
	    <button type="button" class="mdl-snackbar__action"></button>
	</div>

	<!-- Javascript Vendor -->
	<script src="{{ base_url('assets/js/jquery.js') }}"></script>
	<script src="{{ base_url('assets/js/bootstrap.js') }}"></script>
	<script src="{{ base_url('assets/js/material.js') }}"></script>

	<!-- Custom Javascript inside HTML -->
	@yield('javascript')
</body>
</html>