<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::get('/', function () {
    return view('home');
});

Route::get('/m-pro', function() {
    return view('my-projects',['nama_user' => 'Fredelida Gamboa Masela']);
});

Route::get('/web-dev', function() {
    return view('web-development');
});

//Route::get('/my_project', function () {
  //  return view('project');
//});

//Cara route paling gampang, tapi hanya menampilkan halaman saja

Route::view('/my_project','project', ['nama' => 'Fredelida Gamboa Masela', 'notelp' => '085885327594']);

Route::get('/test', function () {
    return "Hello World";
});

Route::get('/tatambahan', function () {
    return 8+8;
});

//Untuk mengalihkan halaman yang sedang perbaikan
//Route::redirect('/tentang','/maintenance');

Route::get('/produk', function() {
    return 'produk';
});

Route::get('/produk/{id}', function($id) {
    return 'Ini adalah Produk Dengan ID ' .$id;
});

Route::get('/404', function() {
    return view('404');
});