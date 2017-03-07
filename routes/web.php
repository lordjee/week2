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

Route::get('/', function () {
    return view('rumah');
});
Route::get('gallery', function () {
    return view('halo');
});
Route::get('halo/bebas', function () {
    return view('terserah.bebas');
});
Route::get('about', function () {
    return view('about');
});