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
    return view('home');
});

Route::get('/labsatu', function () {
    return view('lab/labsatu');
});

Route::get('/labdua', function () {
    return view('lab/labdua');
});

Route::get('/labtiga', function () {
    return view('lab/labtiga');
});

