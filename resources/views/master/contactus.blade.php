@extends('master.layouts.master')
@section('content')
<!-- CONTENT -->
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
<div class="container">
  <div class="row title">
    <div class="title_row">
      <h1 data-title="Contact"><span>Contact</span></h1>
      <div class="page-breadcrumb">
        <a href="/home">Home</a>/ <span>Contact</span>
      </div>

    </div>

  </div>
</div>
</section>
<!-- End Intro Section -->
<!-- Contact Section -->
<section class="padding ptb-xs-40">
  <div class="container">

    <div class="row">

      <div class="col-lg-8">

        <div class="headeing pb-30">
          <h2>Get in Touch</h2>
          <span class="b-line l-left line-h"></span>
        </div>
        <!-- Contact FORM -->
        <form class="contact-form " id="contact" action="" method="">
          <!-- IF MAIL SENT SUCCESSFULLY -->
          <div id="success">
            <div role="alert" class="alert alert-success">
              <strong>Terima kasih </strong> telah menggunakan layanan paket pekerja kami.
            </div>
          </div>
          <!-- END IF MAIL SENT SUCCESSFULLY -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-field">
                <input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name" readonly="" value="{{auth()->user()->masters->name}}">
              </div>
              <div class="form-field">
                <input class="email-sm form-full" id="email" type="text" name="email" placeholder="Email" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-field">
                <input class="input-sm form-full" id="name" type="text" name="username" placeholder="Your Name" readonly="" value="{{auth()->user()->username}}">
              </div>
              <div class="form-field">
                <select class="input-sm form-full" name="subjek">
                  <option value="1">Masalah Akun</option>
                   <option value="2">Masalah Pembayaran</option>
                   <option value="3">Masalah Orderan</option>
                   <option value="4">Komplain ART</option>
                   <option value="5">Lainnya</option>
                </select>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-field">
                <textarea class="form-full" id="message" rows="7" name="laporan" placeholder="Ex: Nomor Order: 000000, &#10;Nomor Pembayaran: 000000, &#10;Isi Laporan: Hello, World!!" ></textarea>
              </div>
            </div>
            <div class="col-lg-12 mt-30">
              <button class="btn-text" type="submit" id="submit" name="button">
                Kirim Pesan
              </button>
            </div>
          </div>
        </form>
        <!-- END Contact FORM -->
      </div>

      <div class="col-lg-4 contact mt-sm-30 mt-xs-30">
        <div class="headeing pb-20">
          <h2>Contact Info</h2>
          <span class="b-line l-left line-h"></span>
        </div>
        <div class="contact-info">

          <ul class="info">
            <li>
              <div class="icon ion-ios-location"></div>
              <div class="content">
                <p>
                 123 Winery Street, Dawn Winery,
                </p>
                <p>
                  Mondstadt, Teyvt
                </p>
              </div>
            </li>

            <li>
              <div class="icon ion-android-call"></div>
              <div class="content">
                <p>
                  200 256 265 000
                </p>
                <p>
                  200 256 265 000
                </p>
              </div>
            </li>
            <li>
              <div class="icon ion-ios-email"></div>
              <div class="content">
                <p>
                  <a href="mailto:cleaningart@bussiness.com">cleaningart@bussiness.com</a>
                </p>
              </div>
            </li>
          </ul>
          <ul class="event-social">
            <li>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <!-- Map Section -->

</section>
<!-- Map -->
<section class="map-box">
  <div class="map">
    <div id="map"></div>
  </div>
</section>
<!-- Contact Section -->
<!--End Contact-->
@endsection
