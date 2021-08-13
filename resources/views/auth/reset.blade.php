@extends('auth.layouts.master')
@section('tittle')
<title>RESET PASSWORD</title>
@section('content')
		<div class="container-login100">
			
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form action="{{url('/resetnewpassword',$user->id)}}" method="POST">
        	{{csrf_field()}}

          <div class="form-group">
          	<p>RESET PASSWORD sebagai {{$user->username}}</p>
      </div>
      <div class="form-group">
        <label >Password Baru</label>
        <input name="password" type="password" class="form-control" id="new_password">
        @if($errors->has('password'))
                          <span class="help-block">{{($errors->first('password'))}}</span>
                           @endif
      </div>
     <button type="submit" class="btn btn-primary">simpan</button>

     <div class="text-center w-full p-t-15">
						
						<a class="txt2" href="{{url('/login')}}">
							kembali ke login						
						</a>
					</div>
      
      </form>
     
			</div>
		</div>
	</div>
@endsection