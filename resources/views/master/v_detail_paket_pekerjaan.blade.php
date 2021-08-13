@extends('master.layouts.master')
@section('content')
<style type="text/css">
	.text-content h5{
		background-color: #f0ad4e;
    border: 1px solid;
    padding: 10px;
    box-shadow:         3px 3px 5px 3px #ccc;
    width: 20%;
    transform: translate(445px, 10px);
    margin-bottom: 20px;
	}
</style>
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Detail Paket Pekerjaan</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Detail Paket Pekerjaan</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- Intro Section -->
		<!-- Service Section -->
		<div id="services-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-xs-30 mt-sm-30">			
										
							
						<div class="text-box mt-40 text-center">
							<div class="box-title mb-20">
								<h2 style=" box-shadow: 0 5px 6px -6px black;">{{$paket->nama_paket}}</h2>
							</div>
							<div class="full-pic">
							<figure>
								<img src="{{$paket->getphoto()}}" style="width: 55%" alt="">
							</figure>
							</div>
							<div class="text-content center" style="text-align: center;">
								<h5 class="col-mb-20">
									Rp. {{$paket->harga_paket}}
								</h5>
								<a href="{{url('/paketpekerjaan/order/'.$paket->id)}}" class="btn-text">Order Paket</a>
							</div>
						</div><br>
							<div class="row top-pad-60">
							<div class="col-md-12">
								<div role="tabpanel">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">

										<li role="presentation" class="nav-item">
											<a href="#home" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab">Deskripsi</a>
										</li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home">
											<h4>Deskripsi</h4>
											<p>
												{{$paket->deskripsi_paket}}
											</p>
											<p>
												{{$paket->deskripsi_paket}}
											</p>
											<ul class="list-style">
												<li>
													<i class="ion-android-done-all text-color"> </i> 100% Cotton
												</li>
												<li>
													<i class="ion-android-done-all text-color"> </i> Slim fit throught
												</li>
												<li>
													<i class="ion-android-done-all text-color"> </i> Machine Wash Warm
												</li>
											</ul>
										</div>
										
						</div>
						<hr />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service Section end -->
@endsection
