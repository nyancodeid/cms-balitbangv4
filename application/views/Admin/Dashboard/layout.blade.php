<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }} - NyanHotel</title>

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ base_url('assets/css/material.css') }}">

	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/dashboard/default.style.css') }}">

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

</head>
<body scroll-spy="" id="top" class="theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
	<balitbang-apps>
		 @include('Admin/Dashboard/Components/apps')
	</balitbang-apps>
	

	<!-- Javascript Vendor -->
	<script src="{{ base_url('assets/js/jquery.js') }}"></script>
	<script src="{{ base_url('assets/js/bootstrap.js') }}"></script>
	<script src="{{ base_url('assets/js/material.js') }}"></script>

	<!-- Custom Javascript inside HTML -->
	@yield('javascript')
</body>
</html>