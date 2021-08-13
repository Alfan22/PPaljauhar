@extends('auth.layouts.master')
@section('tittle')
<title>LUPA PASSWORD</title>
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{url('/forgot_pass')}}" >
					<span class="login100-form-title p-b-20">
						Lupa kata Sandi
					</span>
					<span>masukan email yang valid, yang telah didaftarkan dengan akun anda</span>
					{{csrf_field()}}
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="email" id="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-5">
						<button type="submit" class="login100-form-btn" >
							Kirim
						</button>
					</div>
					<div class="text-center w-full p-t-15">
						<a class="txt1 bo1 hov1" href="/login">
							kembali ke Login					
						</a>
					</div>
					<div class="text-center w-full p-t-11">
						<a class="txt1 bo1 hov1" href="/register">
							Regitrasi					
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection