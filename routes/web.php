<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show;
use Illuminate\Http\Request;
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

Route::get('/pesantiket', function () {
    return view('pesantiket/pesantiket');
});
Route::get('/login',function(){
    return view("login/login");
});
Route::post('/login','UserController@store');
Route::get('/logindata','UserController@index');
// Route::get('/add','CarController@create');
// Route::post('/add','CarController@store');
// Route::get('car','CarController@index');
// Route::get('edit/{id}','CarController@edit');
// Route::post('edit/{id}','CarController@update');
// Route::delete('{id}','CarController@destroy');

