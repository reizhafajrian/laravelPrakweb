<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
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


Route::get('/bantuan','BantuanController@index' );
Route::get('/tentangkami', 'TentangKamiController@index');
Route::post('/postgambar', 'TiketController@store');
Route::get('/pesantiket', 'PesanController@index');
Route::get('/pasangacara', 'PasangAcaraController@index');
Auth::routes();

Route::get('/', 'BerandaController@index');
Route::get('/home', 'HomeController@index');

