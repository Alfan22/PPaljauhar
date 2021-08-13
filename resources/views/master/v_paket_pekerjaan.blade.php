@extends('master.layouts.master')
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
  <div class="container">
    <div class="row title">
      <div class="title_row">
        <h1 data-title="Service"><span>Paket pekerjaan</span></h1>
        <div class="page-breadcrumb">
          <a href="{{url('/home')}}">Home</a>/ <span>Paket Pekerjaan</span>
        </div>

      </div>

    </div>
  </div>
</section>
@section('content')
<!-- Intro Section -->
<!-- Service Section -->
<section class="padding ptb-xs-40">
  <div class="container">
    <div class="row pb-30 text-center">
      <div class="col-md-12">
        <div class="section-title_home">
          <h2>Paket Pekerjaan <span>Kami</span></h2>
        </div>
      </div>
    </div>

    <div class="row">
      @if (isset($paket) && count($paket) > 0)
      @foreach($paket as $peka)
      <div class="col-md-6 col-lg-4 mb-30" style="padding:30px;">
        <div class="service_box" style="border: 1px solid #dedede;text-align:center; margin: 5px">
          <figure>
            <a href="#"><img src="{{$peka->getPhoto()}}" alt="" /></a>
          </figure>
          <div class="product-details">
            <h3 class="text-center"><a href="#">{{$peka->nama_paket}}</a></h3>
            <h4 class="text-color text-center">Rp {{$peka->harga_paket}}</h4>
            <p>
              {{ substr($peka->deskripsi_paket, 0, 50)}}... <a href="{{url('/paketpekerjaan/'.$peka->id)}}" style="color: blue">lihat selengkapnya</a>
            </p>
            <div class="add-to-cart mb-20" >
              <a href="{{url('/paketpekerjaan/order/'.$peka->id)}}" style="border: 3px solid #6e8900;"><i class="fa fa-shopping-cart"></i>&nbsp;Order Paket</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
         @else
         <div class="col-md-6 col-lg-12 mb-30 text-center">
          <tr class="text-center">
              <td colspan="4"><h4 style="background-color: #dadbdc"> Belum ada paket yang tersedia </h4></td>
          </tr>
        </div>
      @endif
    </div>
    {{$paket->links()}}
  </div>
</section>
@endsection
