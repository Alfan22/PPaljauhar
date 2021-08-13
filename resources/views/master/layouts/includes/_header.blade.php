<header id="header" class="header header-1 header_tran">
	<div id="top-bar" class="top-bar-section top-bar-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="top_loction pull-left">
						<ul>
							<li>
								<a href="#!"><i class="fa fa-map-marker"></i> 123 Winery Street, Dawn Winery, Mondstadt, Teyvt</a>
							</li>
							<li>
								<a href="mailto:cleaningart@bussiness.com"><i class="fa fa-envelope"></i> cleaningart@bussiness.com</a>
							</li>
							<li>
								<a href="tel:1234567890"><i class="fa fa-phone"></i> +91 123 456 7890</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="top-social-icon icons-hover-black">
						<div class="icons-hover-black">
							<a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a>
							<a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a>
							<a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a>
							<a href="javascript:avoid(0);"> <i class="fa fa-dribbble"></i> </a>
							<a href="javascript:avoid(0);"> <i class="fa fa-linkedin"></i> </a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="nav-wrap">
		<div class="reletiv_box">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-3">
						<div class="logo">
							<a href="{{url('/home')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
						</div>
						<!-- Phone Menu button -->
						<button id="menu" class="menu hidden-md-up"></button>
					</div>
					<div class="col-md-9 nav-bg">
						<nav class="navigation">
							<ul>
								<li>
									<a href="{{url('/home')}}">Home</a>
									<i class="ion-ios-plus-empty hidden-md-up"></i>
								</li>
								<li>
									<a href="{{url('/aboutus')}}">Tentang Kami</a>
									<i class="ion-ios-plus-empty hidden-md-up"></i>
								</li>
								<li>
									<a href="{{url('/paketpekerjaan')}}">Order</a>
					</li>
					<li>
						<a href="javascript:avoid(0);">Tim ART kami</a>
						<i class="ion-ios-plus-empty hidden-md-up"></i>
						<ul class="sub-nav">
							<li>
								<a href="{{url('/paketpekerjaan')}}">Paket Pekerjaan</a>
							</li>
							<li>
								<a href="#work">Gallery ART</a>
							</li>
							<li>
								<a href="#artteam">TIM ART</a>
							</li>

							<li>
								<a href="#testimoni">Testimoni</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{url('/contactus')}}">Customer Services</a>
						<i class="ion-ios-plus-empty hidden-md-up"></i>
					</li>
					<li>
						<a href="#">{{auth()->user()->username}}</a>
						<i class="ion-ios-plus-empty hidden-md-up"></i>
						<!-- Nav Dropdown -->
						<ul class="sub-nav">
							<li>
								<a href="{{url('/myprofil/'.auth()->user()->id)}}">Profilku</a>
							</li>
							<li>
								<a  onclick="window.location.reload(true)" id="reload_page" href="{{url('/myorder')}}">Orderan Saya</a>
							</li>
							<li>
								<a href="{{url('/myprofil/setting/'.auth()->user()->id)}}">Setting</a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#logoutModal">log out</a>
							</li>
						</ul>
						<!-- End Nav Dropdown -->
					</li>
				</ul>

			</nav>
		</div>
	</div>
</div>
</div>
</div>
</header>
