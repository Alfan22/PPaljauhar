<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
<style type="text/css">
    .help-block{
        color: #EB3C3C;
        font-size: smaller;
    }
</style>
    <!-- Title Page-->
    <title>Daftar CLEANING ART</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icon.png')}}">
    <!-- Icons font CSS-->
    <link href="{{asset('awal/master/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('awal/master/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('awal/master/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('awal/master/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('awal/master/css/main.css')}}" rel="stylesheet" media="all">
</head>
@if(session('error'))
<!-- Modal -->
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
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
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title center">DAFTARKAN DIRI ANDA SEKARANG</h2>
                    <form method="POST" action="{{url('/postregis')}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <input type="text" placeholder="master" name="role" value="2" hidden >
                        <input type="text"  name="remember_token" value="" hidden >
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="name" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                            <span class="help-block">{{($errors->first('name'))}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                            <span class="help-block">{{($errors->first('email'))}}</span>
                                     @endif
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">username</label>
                                    <input class="input--style-4" type="text" name="username" value="{{old('username')}}">
                                    @if($errors->has('username'))
                                            <span class="help-block">{{($errors->first('username'))}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" name="password" value="{{old('password')}}">
                                    @if($errors->has('password'))
                                            <span class="help-block">{{($errors->first('password'))}}</span>
                                     @endif
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Foto</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="file" name="foto" value="{{old('foto')}}">
                                        @if($errors->has('foto'))
                                            <span class="help-block">{{($errors->first('foto'))}}</span>
                                     @endif
                                    </div>
                                </div>
                            </div>  
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nomor Handphone</label>
                                <input class="input--style-4" type="text" name="nohp" value="{{old('nohp')}}">
                                @if($errors->has('nohp'))
                                        <span class="help-block">{{($errors->first('nohp'))}}</span>
                                 @endif
                            </div>
                            </div>
                        </div>
                          <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kecamatan</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="kecamatan" value="{{old('kecamatan')}}">
                                        @if($errors->has('kecamatan'))
                                            <span class="help-block">{{($errors->first('kecamatan'))}}</span>
                                     @endif
                                    </div>
                                </div>
                            </div>  
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Kode Pos</label>
                                <input class="input--style-4" type="text" name="kodepos" value="{{old('kodepos')}}">
                                @if($errors->has('kodepos'))
                                        <span class="help-block">{{($errors->first('kodepos'))}}</span>
                                 @endif
                            </div>
                            </div>
                        </div>
                          <div class="row row-space">
                            <div class="max" style="width: 200%">
                            <div class="input-group">
                                <label class="label">Alamat</label>
                                <input class="input--style-4" type="text" name="alamat" value="{{old('alamat')}}">
                                @if($errors->has('alamat'))
                                        <span class="help-block">{{($errors->first('alamat'))}}</span>
                                 @endif
                            </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p-t-15" style="text-align: center;">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Daftar</button>
                        </div>
                    </form>
                    <div class="p-t-15" style="text-align: center;">
                            <span>sudah punya akun? <a href="{{url('/login')}}" style="text-decoration: none"><h2>LOGIN</h2></a></span>
                        </div>
                </div>
            </div>
        </div>
        <div class="p-t-15" style="text-align: center;">
                            <a href="{{url('/admin/register')}}" style="text-decoration: none"><h2 style="color:  #34495E  ">Daftar Administrator?</h2></a>
                        </div>
    </div>

    <!-- Jquery JS-->
<script src="{{asset('awal/master/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
<script src="{{asset('awal/master/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('awal/master/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('awal/master/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
<script src="{{asset('awal/master/js/global.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->