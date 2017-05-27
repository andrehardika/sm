<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ base_url('assets/images/favicon/apple-icon-57x57.png')}} ">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ base_url('assets/images/favicon/apple-icon-60x60.png')}} ">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ base_url('assets/images/favicon/apple-icon-72x72.png')}} ">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ base_url('assets/images/favicon/apple-icon-76x76.png')}} ">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ base_url('assets/images/favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ base_url('assets/images/favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ base_url('assets/images/favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ base_url('assets/images/favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ base_url('assets/images/favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ base_url('assets/images/favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ base_url('assets/images/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ base_url('assets/images/favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ base_url('assets/images/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="/manifest.json">

	{{-- Meta --}}
	<meta charset="UTF-8" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ base_url('assets/images/favicon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<title>Senyum Media | @yield('page_title')</title>
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/fontawesome/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/theme-homepage.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/owlcarousel/css/owl.carousel.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/owlcarousel/css/owl.transitions.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/theme-homepage-responsive.css') }}" />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
	@yield('style')
</head>
<body>
	<div id="wrapper-wide">
		<div id="header">
			<!-- Top Bar Start-->
			<nav id="top" class="htop">
				<div class="container">
					<div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
						<div class="pull-left flip left-top">
							<div class="links">
								<ul>
									<li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
									<li class="email"><a href="mailto:senyum@example.com"><i class="fa fa-envelope"></i>senyum@example.com</a></li>
									<li><a href="#">Wish List (0)</a></li>
									<!-- <li><a href="checkout.html">Checkout</a></li> -->
								</ul>
							</div>
						</div>
						<div id="top-links" class="nav pull-right flip">
							<ul>
								<li><a href="masuk.html">Masuk</a></li>
								<li><a href="daftar.html">Daftar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<!-- Top Bar End-->
			
		</div>
	</div>
	@yield('modal')
	<!-- ALERT -->
	<?php $message = $this->session->flashdata('message'); ?>
	@if($message)
	<div class="modal fade" tabindex="-1" role="dialog" id="alerts">
		<div class="modal-dialog modal-{{$message[1]}} modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
					<i class="fa fa-bell fa-5x"></i>
					<p class="break-20 text-size-18 text-center">{{$message[0]}}</p>
				</div>
			</div>
		</div>
	</div>
	@endif
	<!-- END ALERT -->
</body>
<script type="text/javascript" src="{{ base_url('assets/plugins/jquery/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/jquery-easing/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/jquery-dcjqaccordion/jquery.dcjqaccordion.2.7.min.js')}}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/owlcarousel/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ base_url('assets/js/theme-homepage.js')}}"></script>
<script>
	$(document).ready(function(){
		$("#alerts").modal('show');

		// modal reset
		$(".modal").on('hide.bs.modal', function(e){
			$(".modal form").trigger('reset');
		});
	});
</script>
@yield('javascript')
</html>