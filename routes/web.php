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
    return view('home/home');
});
Route::get('/bantuan', function () {
    return view('bantuan/bantuan');
});
Route::get('/tentangkami', function () {
    return view('tentangkami/tentangkami');
});
Route::get('/login', function () {
    return view('tentangkami/tentangkami');
});
Route::get('/pesantiket', function () {
    return view('tentangkami/tentangkami');
});


