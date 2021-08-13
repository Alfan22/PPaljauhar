@extends('auth.layouts.master')
@section('tittle')
<title>MASUKKAN TOKEN</title>
@section('content')
	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{url('/activationtoken')}}" >{{csrf_field()}}
					<span class="login100-form-title p-b-20">
						Masukkan Token
					</span>
				<!-- <input type="tel" autocomplete="one-time-code" maxlength="6" value="779140" style="width: 0.5px; height: 0px; outline: none; padding: 0px; border-width: 0px;"> -->
					
					<div class="wrap-input100">
						<input class="input100" type="text" name="active_token" id="active_token" required="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-token"></span>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-5">
						<button type="submit" class="login100-form-btn" >
							Kirim
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection