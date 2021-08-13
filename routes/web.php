<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//halaman Utama
Route::get('/', function () {
    return view('index');

});
Route::get('/login', function () {
    return view('auth.v_login');
});

Route::get('/artikel', function () {
    return view('auth.v_login');
});

// login


Route::get('/register', function () {
    return view('auth.v_daftar_master');
});

Route::get('/postregister', function () {
    return view('auth.v_login');
});
Route::get('/postlogin', function () {
    return view('master.v_home_master');
});