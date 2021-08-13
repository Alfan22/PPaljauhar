@extends('master.layouts.master')
<!-- Intro Section -->
<style type="text/css">
  .copy{
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
  }
  .copy:hover {
  background-color: #3e8e41;
  color: white;
}
</style>
<section class="inner-intro bg-img light-color overlay-before parallax-background">
  <div class="container">
    <div class="row title">
      <div class="title_row">
        <h1 data-title="Service"><span>Pembayaran Order</span></h1>
        <div class="page-breadcrumb">
          <a href="{{url('/home')}}">Home</a>/ <span>Pembayaran Order</span>
        </div>

      </div>

    </div>
  </div>
</section>
@section('content')
@if(session('success'))
        <div class="alert alert-success" role="alert">
         {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
       @endif
      <div id="mission-section" class="ptb ptb-xs-180">
      <div class="container">
        <div class="row">
          <div class="col-md-45 col-lg-12 border text-center">
            <div class="about-block clearfix">
             
                <div class="box-title ">
                  <h4 class="pb-50"> Silahkan Transfer ke nomor rekening ini</h4>
                  <button class="copy" id="no_rekening" onclick="copy(this)">
                    {{$data_order->no_rekening}}</button><span></span>
                   <h5>Bank {{$data_order->bank}}</h5>
                  <p class="pb-50">A.N. {{$data_order->nama}}</p>
       </div>
     
        </div>
        <a href="{{url('/bayarorder/'.$data_order->nomor_order)}}" class="btn btn-primary center">LANJUTKAN PEMBAYARAN</a>
       </div>
       <div class="col-lg-12">
       <p class="col-lg-6 float-left">nomor order: {{$data_order->nomor_order}}</p>
       <p class="col-lg-6 float-right text-right">waktu order: {{\Carbon\Carbon::parse($data_order->created_at)->format('d/m/Y H:i')}}</p>
     </div>
       </div>
        </div>
       </div>
<script type="text/javascript">
function copy(that){
var inp =document.createElement('input');
document.body.appendChild(inp)
inp.value =that.textContent
inp.select();
document.execCommand('copy',false);
inp.remove();
 alert("Nomor Rekening telah disalin dalam clipboard!");
}
       </script>
@endsection