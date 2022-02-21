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
    echo "Selamat Datang";
});

Route::get('/about', function () {
    return ('2041720059 Gilang Setyawan');
});

Route::get('articles1/{id}', function ($id) {
    return "Halaman artikel 1 dengan id : ".$id;
});

Route::get('articles2/{id}', function ($id) {
    return "Halaman artikel 2 dengan id : ".$id;
});