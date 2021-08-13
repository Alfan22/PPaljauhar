<!DOCTYPE html>
<html lang="en">

<!-- index106:36-->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cleaning ART - Master</title>
		<link rel="icon" type="image/png" sizes="20x20" href="{{asset('icon.png')}}">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" rel="stylesheet">
		<link href="{{asset('assets/datepickers/bootstrap-datetimepicker.min.css')}}" type="text/css" rel="stylesheet">

		<!--Main Slider-->
		<link href="{{asset('assets/css/settings.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('assets/css/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/header1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/footer1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/index1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/theme-color/default.css')}}" rel="stylesheet" type="text/css" id="theme-color" />
	</head>
	<body>
		<style media="screen">
		.modal-dialog-centered {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		min-height: calc(100% - 1rem);
		}

		.modal-dialog-centered::before {
		display: block;
		height: calc(100vh - 1rem);
		height: -webkit-min-content;
		height: -moz-min-content;
		height: min-content;
		content: "";
		}

		</style>
		<!-- modal logout -->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog  modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin akan keluar?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Tekan logout untuk keluar</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="{{url('/logout')}}">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal -->
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>

		<!--loader-->

		<!-- HEADER -->
		@include('master.layouts.includes._header')
		<!-- END HEADER -->
		<div class="content">
			@yield('content')
		</div>

		<!-- Footer_Section -->
		@include('master.layouts.includes._footer')
		<!-- Footer_Section_End -->

		<!-- Site Wraper End -->
		<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/assets/js/jquery.easing.js')}}" type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="{{asset('assets/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
		<!-- popup -->
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>

		<!-- carousel Js -->
		<script src="{{asset('assets/js/owl.carousel.js')}}" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.appear.js')}}" type="text/javascript"></script>
		<!-- Mail Function Js -->
		<script src="{{asset('assets/js/mail.js')}}" type="text/javascript"></script>
		<!--prettyPhotoprettyPhoto-->
		<script type="text/javascript" src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
		<!-- Fun Factor / Counter -->
		<script type="text/javascript" src="{{('assets/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
		<!-- Price Filter -->
		<script type="text/javascript" src="{{('assets/js/price-filter.js')}}"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.revolution.js')}}"></script>
		<script type="text/javascript" src="{{asset('datepicker/js/bootstrap-datetimepicker.js')}}"></script>
		<script type="text/javascript" src="{{asset('datepicker/js/locales/bootstrap-datetimepicker.fr.js')}}"></script>
		<!-- custom Js -->
		<script src="{{asset('assets/js/custom1.js')}}" type="text/javascript"></script>


	</body>

<!-- index107:11-->
</html>
