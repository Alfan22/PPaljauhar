@extends('master.layouts.master')  
	<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Shop"><span>ART</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>ART</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->
		@section('content')
		<section class="padding">
			<div class="container shop">
				<div class="row">
					<div class="col-sm-12 col-lg-12 product-page">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="cleaner">
									<img id="zoom-product" src="{{$art->getphoto()}}" width="500" height="600" data-zoom-image="{{$art->getphoto()}}" alt="" />
									<div id="zoom-product-thumb" class="zoom-product-thumb">
										<div class="owl-carousel nf-carousel-theme owl-carousel_product navigation-shop dark-switch lr-pad-20" data-pagination="false" data-autoplay="false" data-navigation="true" data-items="3" data-tablet="4" data-mobile="3" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right">
										</div>
									</div>
								</div>
							</div>
							
							<!-- .product -->
							<div class="col-lg-8 col-md-6 pt-xs-40">
								<div class="product-rating pull-right">
									 @if ( count($review) > 0)
									<div class="star-rating">
										@for ($i = 0; $i < $count->nilai; $i++)			
										<i class="fa fa-star"></i>
										@endfor
									</div>	
									@else
									<div class="star-rating">
										<span>belum ada rating</span>
									</div>	
									@endif
								</div>
								<div class="price-details">
									<span class="price">{{$art->name}}</span>
								</div>
								<div class="description">
									<p>
										{{$art->deskripsi}}
									</p>
								</div>
								<ul class="arrow-style">
									<li>
										<i class="ion-android-done-all text-color"> </i> Kecamatan: {{$art->kecamatan}}
									</li>
									<li>
										<i class="ion-android-done-all text-color"> </i> Kode pos: {{$art->kodepos}}
									</li>
									<li>
										<i class="ion-android-done-all text-color"> </i> Alamat: {{$art->alamat}}
									</li>
								</ul>
							</div>
						</div>
						<div class="row top-pad-80">
							<div class="col-md-12">
								<div role="tabpanel">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="nav-item">
											<a href="#messages" class="nav-link active" aria-controls="messages" class="nav-link" role="tab" data-toggle="tab">Review</a>
										</li>
									</ul>
									<!-- Tab panes -->
														<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home">
											<div class="item" style="background-color: #538e32;"><br/><hr/>
												 @if (isset($review) && count($review) > 0)
												@foreach($review as $rev)

												<div class="post-meta" style="background-color:#e6e1e1;padding: 5px;margin: 15px;">
													<!-- Author  -->
													<span class="author"> <i class="fa fa-user"></i>&nbsp;{{$rev->username}}</span>
													<!-- Meta Date -->

													<span class="time" style="font-size: 10px"> <i class="fa fa-calendar"></i>&nbsp;{{$rev->buat}}</span>
													<!-- Category -->

													<div class="star-rating pull-right">
														<span class="pull-right">
														@for ($i = 0; $i < $rev->rating; $i++)
														@if ($i < $rev->rating)
														<span class="fa fa-star"></span>
														@else
														<span class="fa fa-star"></span>
														@endif
														@endfor</span>
													</div>
													<h5>
													{{$rev->review}}
													</h5>
													@if($rev->fotos != null)
													<figure style="border: 1px"><img src="{{ URL::to('/images/' . $rev->fotos) }}" width="100" height="200">
													</figure>
													@else
													<span></span>
													@endif
												</div>

											<hr />
											@endforeach
											@else()
											<div class="post-meta" style="background-color:#e6e1e1;padding: 5px;margin: 15px;"><p>Belum ada Review</p></div><hr/>
											@endif
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr />
					
					</div>
					

				</div>
			</div>
		</section>
@endsection
