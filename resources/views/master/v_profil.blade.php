<style type="text/css">
  .border{
    border-color: #ebebeb;
    border-style: solid;
    border-width: 0 1px 1px;
    background-color: #EAEAEA;
  }
</style>
@extends('master.layouts.master')
@section('content')
<!-- CONTENT -->
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
<div class="container">
  <div class="row title">
    <div class="title_row">
      <h1 data-title="Contact"><span>Profile</span></h1>
      <div class="page-breadcrumb">
        <a>Home</a>/ <span>Profile</span>
      </div>

    </div>

  </div>
</div>
</section>
<!-- End Intro Section -->
<!-- content -->
<div id="mission-section" class="ptb ptb-xs-180">
      <div class="container">

        @if(session('message'))
          <div class="alert alert-success" role="alert">
          {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      @endif
      @if(session('success'))
        <div class="alert alert-success" role="alert">
         {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
       @endif
  <!--  end modal -->

        <div class="row">
          <div class="col-md-12 col-lg-12 dark-bg our-vision light-color">
            <div class="block-title v-line mb-35">
              <h2 class="row d-flex align-items-center">
                <span class="col-md-10">@<span></span>{{auth()->user()->username}}<span></span>'s Profile</span>
                <a class="col-md-2" href="/myprofil/setting/{{auth()->user()->id}}" style="font-size: 20px;"><i class="fa fa-cog mr4"></i>Edit Profile</a></h2>
              <p style="text-decoration: underline;">
               {{auth()->user()->role}}
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 border">
            <div class="about-block clearfix">
              <div class="fl width-25per box-shadow mt-15 mb-xs-15">
                <img class="img-responsive" src="{{auth()->user()->masters->getPhoto()}}" alt="Photo" style="width: 100%">
              </div>
              <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                <div class="box-title">
                  <h3>{{$master->name}}</h3>
                </div>
                <div class="text-content">
                  <p>Email: <span></span>{{auth()->user()->email}}</p>
                   <p>No HP: <span></span>{{$master->nohp}}</p>
                </div>
              </div>
              <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                <div class="box-title">
                  <h3>ALAMAT: </h3>
                </div>
                <div class="text-content">
                  <p>Kode Pos: <span></span>
                    @if($master->kodepos == null)
                     ——
                    @else()
                   {{$master->kodepos}}
                    @endif
                  </p>
                   <p>Kecamatan: <span></span>
                    @if($master->kecamatan == null)
                     ——
                    @else()
                   {{$master->kecamatan}}
                    @endif
                  </p>
                   <p>Alamat: <span></span>
                    @if($master->alamat == null)
                     ——
                    @else()
                   {{$master->alamat}}
                    @endif</p>
                </div>
              </div>
            </div>
          </div>
          <p>Bergabung pada: {{\Carbon\Carbon::parse(auth()->user()->created_at)->format('d-m-Y')}}</p>
        </div>
    </div>
</div>
@endsection
