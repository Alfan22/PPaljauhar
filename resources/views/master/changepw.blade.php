    @extends('master.layouts.master')
@section('content')
<div class="faq padding ptb-xs-40">
  <br><br>
  <div class="container"> <h3>Ganti Password</h3>
    @if(session('error'))
<!-- Modal -->
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
  <form action="/postpassword/{{auth()->user()->id}}" method="POST">
        	{{csrf_field()}}
          <div class="form-group">
        <label >Password Sekarang</label>
        <input name="current_password" type="password" class="form-control" id="Password" value="{{auth()->user()->Password}}">
        @if($errors->has('current_password'))
            <span class="help-block">{{($errors->first('current_password'))}}</span>
          @endif
      </div>
      <div class="form-group">
        <label >Password Baru</label>
        <input name="new_password" type="password" class="form-control" id="new_password">
      </div>
     <div class="form-group">
          <label >Konfirmasi Password Baru</label>
          <input name="new_password" type="password" class="form-control" id="new_password">
        </div>
      @if($errors->has('new_password'))
            <span class="help-block">{{($errors->first('new_password'))}}</span>
          @endif
     <button type="submit" class="btn btn-primary">simpan</button>
     </div>
      </form>
  </div>
   
</div>
@endsection