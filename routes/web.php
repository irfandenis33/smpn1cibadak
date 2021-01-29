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

//umum

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('/about/about');
});

Route::get('/guru', 'crud@tampilguru');

Route::get('/siswa', 'crud@tampilsiswa');

Route::post('/kontak/tambahkontak', 'crud@tambahkontak');

Route::get('/kontak', function () {
    return view('/kontak/kontak');
});

//login

Route::get('/login', 'UserController@login');
Route::post('/login/auth', 'UserController@auth');
Route::get('/logout', 'UserController@logout');

Route::get('/tampil-admin', function () {
	if(session()->exists('admin')) {
		return view('tampil-admin');
    }
    else { return redirect('/login'); }
    return redirect('/login');
});

//tampil admin

//guru

Route::get('/guru/guru-admin', 'crud@tampilguruadmin');
Route::post('/guru/guru/tambahguru', 'crud@tambahguru');
Route::get('/hapusguru/{id}', 'crud@hapusguru');

//siswa

Route::get('/siswa/siswa-admin', 'crud@tampilsiswaadmin');
Route::post('/siswa/siswa/tambahsiswa', 'crud@tambahsiswa');
Route::get('/hapussiswa/{id}', 'crud@hapussiswa');

//about

Route::get('/about/about-admin', function () {
    return view('/about/about-admin');
});