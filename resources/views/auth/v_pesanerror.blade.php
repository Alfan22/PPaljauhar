@extends('auth.layouts.master')
@section('tittle')
<title>ERROR</title>
@section('content')
<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<h2>PESAN ERROR</h2><hr>
				<ul>
				 <h5 style="font-size: 12px">PASTIKAN KONEKSI INTERNET ADA</h5>
				<h5 class="p-t-20" style="font-size: 12px">FILE .ENV udah dirubah belum bagian MAIL_USERNAME dan
MAIL_PASSWORD(selengkapnya cek github bagian readme)</h5></ul>
				<div class="text-center w-full p-t-115">
						<span class="txt1">
							kembali ke
						</span>

						<a class="txt1 bo1 hov1" href="{{url('/login')}}">
							login						
						</a>
					</div>
			</div>
			</div></div>
