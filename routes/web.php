<?php

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
// route basic
Route::get('/', function () {
    return view('welcome');
});
Route::get('hallo', function () {
    return 'Hello ini Aplikasi Laravel Pertama Saya' .
           '<br>Laravel is magical framework';
});
Route::get('about', function()
{
    return '<h1>Halo<h1>' .
            'Selamat datang di webapp saya <br>';
});
Route::get('profil/ajrin', function () {
    return 'Hallo saya ajrin umur saya 17 thn';
});
Route::get('profil/dadang', function () {
    return 'Hallo saya dadang umur saya 20 thn';
});
Route::get('profil/jamal', function () {
    return 'Hallo saya jamal umur saya 16 thn';
});
Route::get('profil/udin', function () {
    return 'Hallo saya udin umur saya 19 thn';
});
Route::get('profil/cecep', function () {
    return 'Hallo saya cecep umur saya 21 thn';
});

// route parameter
Route::get('biodata/{nama}/{alamat}/{sekolah}', function($a,$b,$c){
    return 'Hallo ini biodata '. $a .
            '<br>Alamat saya di '.$b.
            '<br>Sekolah di '.$c;
});

Route::get('pesan/{makan?}/{minum?}/{harga?}', function ($m = null,$n = null, $h=null) {
    $a = 'Silahkan Pesan terlebih dahulu';
    if (isset($m) ) {
        $a = 'Anda membeli ' . $m ;
    }
    if (isset($n)) {
        $a .= ' dan '.$n ;
    }
    if (isset($h)) {

        if($h<0){
            $f = 'harga tidak valid';
        }
        elseif ($h>=35000) {
            $f = 'Size Large';
        }elseif ($h>=25000) {
            $f = 'Size Medium';
        }else{
            $f = 'Size Small';

        }
        $a.=' dengan harga '. $h .' dan '.$f;
    }
    return $a;
});
Route::get('testtni/{nama?}/{bb?}/{umur?}', function($n=null,$b=null,$u=null){
    $a = 'Silahkan isi terlebih dahulu';
    if (isset($n)) {
        $a = 'Nama anda : '.$n.'<br>';
    }
    if (isset($b)) {
        if ($b>= 76 && $b<=100) {
            $f = 'Anda harus diturunkan';
        }
        elseif ($b>=65 && $b<=75) {
            $f = 'Berat anda ideal';
        }
        elseif ($b>=50 && $b<=64) {
            $f = 'Anda harus dinaikan ';
        }elseif ($b<50) {
            $f = 'Anda kurang nutrisi';
        }
        $a.= 'Berat Badan '.$f;
    }
    if (isset($u)) {
        if ($u>= 30 && $u<=40) {
            $j = 'Perwira';
        }
        elseif ($u>=40 && $u<=50) {
            $j = 'Laksamana';
        }
        elseif ($u>=50 && $u<=60) {
            $j = 'Jendral';
        }
        $a.='<br>Pangkat Anda :'.$j;
    }
    return $a;
});
