<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('welcome');
});

// http://pemrograman-web-a/halo/
Route::get('/halo', function () {
    return '<h1>Halo apa kabar</h1>';
});

// http://pemrograman-web-a/halo/{nama}
Route::get('/halo/{nama}', function ($nama) {
    return "<h1>Halo apa kabar $nama</h1>";
});

Route::resource('biodatas', BiodataController::class);



