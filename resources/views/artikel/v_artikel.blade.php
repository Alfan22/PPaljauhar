@extends('admin.layouts.master')
@section('content')
@if(session('sukses'))
<!-- Modal -->
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('gagal'))
<!-- Modal -->
<div class="alert alert-warning" role="alert">
  {{session('gagal')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if($errors->has([]))
<!-- Modal -->
    <div class="alert alert-danger" role="alert">
           <span class="help-block">Data tidak boleh kosong / Data yang diisi tidak valid, isi data dengan benar</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
<ol class="breadcrumb">
  <li><i class="fa fa-home"></i><a href="/dashboard">&nbsp;Home&nbsp;</a></li>
  <li>&#47;&nbsp;<i class="fas fa-people-carry"></i>&nbsp;Data Paket Pekerjaan&nbsp;</li>
</ol>

<!-- Modal tmbah paket -->
<div class="modal fade" id="createdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Form Tambah PAKET PEKERJAAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     </div>
<div class="modal-body">
      <form action="/paket_pekerjaan/create" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="role" value="3" hidden>
        <div class="form-group">
          <label >Foto</label>
          <input name="foto_paket" type="file" class="form-control" id="foto_paket" value="{{old('foto_paket')}}">
        </div>
        <div class="form-group ">
          <label >Nama</label>
          <input name="nama_paket" type="text" class="form-control" id="nama_paket" value="{{old('nama_paket')}}">
          @if($errors->has('nama_paket'))
          <span class="help-block">{{($errors->first('nama_paket'))}}</span>
          @endif
        </div>
        <div class="form-group">
          <label >Harga</label>
          <input name="harga_paket" type="text" class="form-control" id="harga_paket" value="{{old('harga_paket')}}">
          @if($errors->has('harga_paket'))
          <span class="help-block">{{($errors->first('harga_paket'))}}</span>
          @endif
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2" value="">Deskripsi</label>
          <textarea class="form-control" id="deskripsi_paket" rows="3" name="deskripsi_paket" >{{old('deskripsi_paket')}}</textarea>
          @if($errors->has('deskripsi_paket'))
          <span class="help-block">{{($errors->first('deskripsi_paket'))}}</span>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#showmessage">BUAT DATA</button>
        </div>
      </form>
    </div>
         </div>
      </div>
    </div>

<!-- end Modal tmbah paket -->
<div class="row" style="margin-bottom:10px">
  <div class="col-sm-12 col-md-6">
    <button type="button" class="btn btn-danger btn-rounded btn-outline
    hidden-xs hidden-sm waves-effect waves-light" data-toggle="modal" data-target="#createdata">
    <i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>Tambah PAKET</button>
  </div>
</div>
<!-- Table -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="col-sm-12 col-md-6">
      <h6 class="m-0 font-weight-bold text-primary">Data PAKET PEKERJAAN</h6>
    </div>
  </div>
  <div class="card-body" style="font-size: 15px;">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <div class="row">
          <form  method="get" action="{{url('/data_paket_pekerjaan')}}" role="search">
            <div class="col-sm-12 col-md-4">
              <div id="dataTable_filter" class="dataTables_filter">
                <label>Search:<input name="cari" type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon2"></label>
                <button class="btn btn-outline-info" type="submit" style="height: 2rem" >
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <thead style="background-color: #ddd;">
          <tr class="text-center">
            <th>Foto Paket</th>
            <th>Nama Paket</th>
            <th>Harga Paket</th>
            <th style="width: 50%">Deskripsi Paket</th>
            <th>aksi</th>
          </tr>
        </thead>
        @foreach($data_paket as $paket)
        <tbody>
          <tr class="text-center">
            <td><img src="{{$paket->getPhoto()}}" style="width: 100px"></td>
            <td><a href="/paket_pekerjaan/{{$paket->id}}">{{$paket->nama_paket}}</a></td>
            <td>Rp&nbsp;{{$paket->harga_paket}}</td>
            <td>{{$paket->deskripsi_paket}}</td>
            <td><a href="/paket_pekerjaan/edit/{{$paket->id}}" class='btn btn-warning btn-sm'><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Edit</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      {{$data_paket->links()}}
    </div>
  </div>
</div>

@endsection
