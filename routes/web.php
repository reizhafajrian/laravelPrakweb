<?php

use App\Http\Controllers\PesanTiketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/view-data', 'AuthorizationController@viewData');
Route::get('/create-data', 'AuthorizationController@createData');
Route::get('/edit-data', 'AuthorizationController@editData');
Route::get('/update-data', 'AuthorizationController@updateData');
Route::get('/delete-data', 'AuthorizationController@deleteData');
Route::get('/bantuan','BantuanController@index' );
Route::get('/tentangkami', 'TentangKamiController@index');
Route::post('/postgambar', 'TiketController@store');
Route::get('/pesantiket', 'PesanController@index');

Route::get('/pasangacara', 'PasangAcaraController@index');
Route::get('/tiketdetail/{id}', 'TiketDetailController@index');
Route::post('/pasangacara/postticket', 'PasangAcaraController@post');
Route::post('/pasangacara/postticket', 'PasangAcaraController@post');
// Route::post('/sendemail', 'EmailController@sendEmail');
Route::get('/pesantiket/search/{key}','PesanController@search');
Route::get('/pesantiket/{kategori:tags}', 'PesanController@show');

Route::get('/payment/{id}', "PesanTiketController@index");
Route::post('/cancel', "TiketDetailController@Cancel");
Auth::routes();

Route::get('/', 'BerandaController@index');
Route::get('/home', 'HomeController@index');

