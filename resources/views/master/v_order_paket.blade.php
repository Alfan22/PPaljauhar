@extends('master.layouts.master')
<style>
		.modal-dialog {
		    flex: initial;
		}
		</style>
<section class="inner-intro bg-img light-color overlay-before parallax-background">
  <div class="container">
    <div class="row title">
      <div class="title_row">
        <h1 data-title="Service"><span>Order Paket</span></h1>
        <div class="page-breadcrumb">
          <a href="{{url('/home')}}">Home</a>/ <span>Order Paket</span>
        </div>

      </div>

    </div>
  </div>
</section>
@section('content')
<section class="padding ptb-xs-40">
				<div class="romana_chect_out_form_area sp">
					<div class="container">
						<form method="POST" action="{{url('/postorder')}}">
							{{csrf_field()}}
							<div class="romana_check_out_form">
								<div class="row">
									<div class="col-lg-8">
										<div class="check_form_left common_input">
											<div class="heading-box pb-30">
												<h2><span>Detail&nbsp;</span>Pesanan</h2>
												<span class="b-line l-left"></span>
											</div>
											<input name="master_id" value="{{$master->user_id}}" hidden="" class="form-control">
											<div class="row">
												<div class="col-sm-6">

													<span>Nama:</span>
													<input type="text" name="name" value="{{$master->name}}" readonly="" class="form-control">
												</div>
												<div class="col-sm-6">
													<span>Username:</span>
													<input type="text" name="username" value="{{auth()->user()->username}}" readonly="" class="form-control">
												</div>
											</div>
												  @if($master->kecamatan == null)
												<div class="row">
												<div class="col-sm-6">
													<span>kecamatan:</span>
													<!-- <select name="kecamatan" class="form-control mb-25" style="color: #000; background-color: #fff;" > 
															<option value="">
																- pilih kecamatan -
															</option class="form-control mb-25" style="color: #000">
															@foreach($kecamatan as $kec)
															<option value="{{$kec->kecamatan}}" class="form-control mb-25" style="color: #000;" >
																{{$kec->kecamatan}}
															</option>
															@endforeach
															</select>  -->
													<input type="text" name="kecamatan" value="{{old('kecamatan')}}" placeholder="silahkan isi kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" style="margin-bottom: 0px">
													@if($errors->has('kecamatan'))
													<span class="help-block" style="color: #c80000">{{($errors->first('kecamatan'))}}</span>
													@endif
												</div>
												@else()
												<div class="row">
												<div class="col-sm-6">
													<span>kecamatan:</span>
													<input type="text" name="kecamatan" value="{{$master->kecamatan}}" placeholder="silahkan isi kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" style="margin-bottom: 0px">
													@if($errors->has('kecamatan'))
													<span class="help-block" style="color: #c80000">{{($errors->first('kecamatan'))}}</span>
													@endif
												</div>
												@endif
												@if($master->kodepos == null)
												<div class="col-sm-6">
													<span>Kodepos:</span>
													<input type="text" name="kodepos" value="{{old('kodepos')}}" placeholder="silahkan isi kodepos" class="form-control @error('kodepos') is-invalid @enderror" style="margin-bottom: 0px">
													@if($errors->has('kodepos'))
													<span class="help-block" style="color: #c80000">{{($errors->first('kodepos'))}}</span>
													@endif
												</div>
											</div>
											@else()
											<div class="col-sm-6">
													<span>Kodepos:</span>
													<input type="text" name="kodepos" value="{{$master->kodepos}}" placeholder="silahkan isi kodepos" class="form-control @error('kodepos') is-invalid @enderror" style="margin-bottom: 0px">
													@if($errors->has('kodepos'))
													<span class="help-block" style="color: #c80000">{{($errors->first('kodepos'))}}</span>
													@endif
												</div>
											</div>
											@endif
											@if($master->alamat == null)
											<div class="row">
												<div class="col-sm-12">
													<span>Alamat:</span>
													<textarea class="col-sm-12" name="alamat" placeholder="silahkan isi alamat" style="margin-bottom: 0px">{{old('kecamatan')}}</textarea>
													@if($errors->has('alamat'))
													<span class="help-block" style="color: #c80000">{{($errors->first('alamat'))}}</span>
													@endif
												</div>
											</div>
											@else()
											<div class="row">
												<div class="col-sm-12">
													<span>Alamat:</span>
													<textarea class="col-sm-12" name="alamat" placeholder="silahkan isi alamat" style="margin-bottom: 0px">{{$master->alamat}}</textarea>
													@if($errors->has('alamat'))
													<span class="help-block" style="color: #c80000">{{($errors->first('alamat'))}}</span>
													@endif
												</div>
											</div>
											@endif
										</div>
									</div>
									<div class="col-lg-4">
										<div class="check_form_right bg-color light-color">
											<div class="heading-box pb-15 ">
												<h2><span>Pesanan</span> Kamu</h2>
												<span class="b-line l-left secondary_bg"></span>

											</div>

											<div class="product_order">
												<ul>
													<li>
														Nama Paket<span>Harga</span>
													</li>
													<li>
														<input name="paket_id" value="{{$data_paket->id}}" hidden="">
														<input name="status_id" value="3" hidden="">
														{{$data_paket->nama_paket}} 
														<!-- <input name="time_up" value="24:00:00" hidden="" readonly=""> -->
														
														<span>
													Rp {{$data_paket->harga_paket}}</span>
													</li>

													<li>
														Biaya Admin dll:<span>Rp {{$pajak->pajak}}</span><hr>
													</li>
													<li>
														<input type="" name="total" value="{{$total}}" hidden="">
														Total:<span>Rp {{$total}}</span>
													</li>
													
													<li>
														Waktu Kerja:<span><input type="datetime-local" name="waktu_kerja" style="color: #000; background-color: #fff;" ></span>
													</li>
														@if($errors->has('waktu_kerja'))
													<span class="help-block " style="color: #c80000">{{($errors->first('waktu_kerja'))}}</span>
													@endif
													<li >
														<p style="margin-bottom: 0px"> Pilih ART:</p><span>
															<select name="art_id" class="form-control mb-25" style="color: #000; background-color: #fff;" required  oninvalid="alert('Pilih ART!');" > 
															<option value="">
																- pilih -
															</option class="form-control mb-25" style="color: #000">
															@foreach($art as $item)
															<option value="{{$item->user_id}}" class="form-control mb-25" style="color: #000;" >
																{{$item->name}}
															</option>
															@endforeach
															</select> 
														</span>
													</li>
													@if($errors->has('art'))
													<span class="help-block " style="color: #c80000">{{($errors->first('art'))}}</span>
													@endif
												</ul>
											</div><br>
											<div class="romana_select_method border pt-15" >
												<ul style="padding: 10px">
													Pilih Bank:
													<li>
														@foreach($bank as $item)
														<input type="radio"  name="bank_id" value="{{($item->id)}}" required="">
														<label>{{$item->bank}}</label>
														@endforeach
													</li>
													@if($errors->has('bank'))
													<span class="help-block" style="color: #c80000">{{($errors->first('bank'))}}</span>
													@endif
												</ul>
												
											</div>
											<div class="text-center pt-15" >
											<button class="btn-text white-btn " type="submit">Buat Order</button> <span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						<div class="col-lg-12 text-right" style="padding-right: 80px">
										
						<button class="btn-text red-btn "><a href="{{url('/paketpekerjaan')}}"> Batal</a></button>
					
				</div>
						<!-- column End -->
					</div>
					<!-- container End -->
				</div>
			</section>

			<!--End Contact-->
			
@endsection
