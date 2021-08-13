@extends('auth.layouts.master')
@section('tittle')
<title>LOGIN</title>
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{url('/postlogin')}}" >
					{{csrf_field()}}
					<span class="login100-form-title p-b-55">
						Login
					</span>
						
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" id="username" value="{{old('username')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
						 @if($errors->has('username'))
                                            <span class="help-block" style="color: #c80000"></span>
                                     @endif
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">

						<span class="focus-input100"></span>
						@if($errors->has('password'))
                                            <span class="help-block"></span>
                                     @endif
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>

					</div>
					<div class="contact100-form-checkbox m-l-4 m-b-13 p-r-90">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" onclick="pass()">
						<label class="label-checkbox100" for="ckb1">
							Tampilkan Password
						</label>
					</div>
					<div class="txt1 m-l-12 p-r-90">
						<label class="text">
							<a style="color: " href="{{url('/forgot_password')}}"> Lupa kata sandi? </a>
						</label>
					</div>
					<div class="container-login100-form-btn p-t-5">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Belum punya akun?
						</span>

						<a class="txt1 bo1 hov1" href="{{url('/register')}}">
							Regitrasi dulu						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection