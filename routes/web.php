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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halaman-2', function () {
    return 'halaman-2';
});

Route::get('halaman-3/{nama}/jenis-kelamin/{jk}', function ($nama,$jk) {
    return 'halaman profile '.$nama .' Dengan Jenis Kelamin ' .$jk;
});

Route::get('halaman-profile/{nama?}', function ($nama='belum ada nama') {
    return 'profile '.$nama;
});

// Route::get('profile', function () {
//     return view('profile');
// });

//Route optional parameter
Route::get('pesan/{menu1?}/{menu2?}/{menu3?}', function ($a ="silahkan isi pesanan", $b="silahkan isi pesanan",$c="silahkan isi pesanan") {
    return view('pages.pesan',compact('a','b','c'));
});

Route::get('aboit/{nama}', function ($nama) {
    $calkulator = 1 + 5;
    return view('belajar',compact('nama','calkulator'));
});

Route::get('hallo','LatihanController@hallo');
Route::get('profile','LatihanController@profile');
Route::get('facebook/{perkalian}-{nama}','LatihanController@facebook');
Route::get('siswa','LatihanController@siswa');
Route::get('bojong/{berat}/{tinggi}/{umur}','LatihanController@beratbadan');
Route::get('dosen','LatihanController@dosen');
Route::get('mahasiswa','LatihanController@mahasiswa');
Route::get('murid','LatihanController@murid');
Route::get('belanja','LatihanController@belanja');
Route::get('siswa','SiswaController@tampil');