<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login CLEANING ART</title>
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('icon.png')}}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('awal/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	@if(session('success'))
<!-- Modal -->
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
  @if(session('error'))
<!-- Modal -->
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="{{url('updatepassword.update/'.$user->id)}}" method="POST" >
					<span class="login100-form-title p-b-20">
						Reset Kata Sandi
					</span>
					{{csrf_field()}}
					<!-- @method('PUT') -->
					<!-- <input type="hidden" name="token" value="{{ '$user->token' }}"> -->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="email" id="email" required value="{{ old('email') }}" autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
						 @if($errors->has('email'))
                                            <span class="help-block">{{($errors->first('email'))}}</span>
                                     @endif
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-5">
						<button type="submit" class="login100-form-btn" >
							Kirim
						</button>
					</div>
					<div class="text-center w-full p-t-15">
						<a class="txt1 bo1 hov1" href="/login">
							Login					
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
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('awal/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('awal/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('awal/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('awal/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('awal/js/main.js')}}"></script>
	<script type="text/javascript">
		function pass(){
 var pass = document.getElementById('password');
 var show = document.getElementById('show');
 if(pass.type == 'password'){
  pass.type = 'text';
 }else{
  pass.type = 'password';
 }
}
	</script>

</body>
</html>