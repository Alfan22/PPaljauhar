@extends('master.layouts.master')
@section('content')
<br><br>
<div class="faq padding ptb-xs-40">
  <div class="container">
    <h2>Setting</h2>
  <form action="/myprofil/update/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data">
        	{{csrf_field()}}
          <div class="form-group">
        <label >Foto</label>
        <input name="foto" type="file" class="form-control" id="foto" value="{{auth()->user()->masters->foto}}">
        <p>{{auth()->user()->masters->foto}}</p>
      </div>
      <div class="form-group">
        <label >Nama</label>
        <input name="name" type="text" class="form-control" id="name" value="{{auth()->user()->masters->name}}" required="">
         @if($errors->has('name'))
            <span class="help-block">{{($errors->first('name'))}}</span>
          @endif
      </div>
     <div class="form-group">
          <label >Email</label>
          <input name="email" type="email" class="form-control" id="email" value="{{$users->email}}" required="">
           @if($errors->has('email'))
            <span class="help-block">{{($errors->first('email'))}}</span>
          @endif
        </div>
        <div class="form-group">
          <label >username</label>
          <input type="text" class="form-control" id="username" name="username" value="{{auth()->user()->username}}" required="">
           @if($errors->has('username'))
            <span class="help-block">{{($errors->first('username'))}}</span>
          @endif
        </div>
          <div class="form-group">
          <label >No Handphone</label>
          <input type="text" class="form-control" id="nohp" name="nohp" value="{{auth()->user()->masters->nohp}}" required="">
           @if($errors->has('nohp'))
            <span class="help-block">{{($errors->first('nohp'))}}</span>
          @endif
        </div>
          <div class="form-group">
          <label >Kecamatan</label>
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{auth()->user()->masters->kecamatan}}"></div>
          <div class="form-group">
          <label >Kode Pos</label>
          <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{auth()->user()->masters->kodepos}}"></div>
          <div class="form-group">
          <label >alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" >{{auth()->user()->masters->alamat}}</textarea></div>
           <div class="additional-info">
          <label><a style="color: #3DABD8;" href="/myprofil/changepassword/{{auth()->user()->id}}">Ganti Password</a></Label>
        </div>
          <button type="button" class="btn btn-secondary"><a href="/myprofil/{{$users->id}}/" >Batal</a></button>
     <button type="submit" class="btn btn-primary">simpan</button>
     </div>
      </form>
  </div>

</div>
@endsection
