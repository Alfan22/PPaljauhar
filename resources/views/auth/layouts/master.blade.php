<!DOCTYPE html>
<html lang="en">
<head>
	<title> @yield('tittle')</title>
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
	@if(session('sukses'))
<!-- Modal -->
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
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
      @yield('content')
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