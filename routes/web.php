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
