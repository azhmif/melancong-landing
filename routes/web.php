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
//Landing
Route::get('/', 'LandingController@index');

//Auth
Route::get('/login', 'AuthController@index');
Route::post('/do_login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

//Dashboard
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin', 'DashboardController@index');
    Route::get('user', 'UserController@index');
    Route::post('user/update', 'UserController@update');
    Route::post('user/password', 'UserController@password');

    //About
    Route::get('/about', 'AboutController@index');
    Route::post('about/update', 'AboutController@update');
    Route::post('about/update/foto', 'AboutController@update_foto');

    //Jumbotron
    Route::get('/jumbotron', 'JumbotronController@index');
    Route::post('jumbotron/kata-1', 'JumbotronController@update_kata_1');
    Route::post('jumbotron/kata-2', 'JumbotronController@update_kata_2');
    Route::post('jumbotron/kata-3', 'JumbotronController@update_kata_3');
    Route::post('jumbotron/gambar-1', 'JumbotronController@update_gambar_1');
    Route::post('jumbotron/gambar-2', 'JumbotronController@update_gambar_2');
    Route::post('jumbotron/gambar-3', 'JumbotronController@update_gambar_3');

    //Contact
    Route::get('/contact', 'ContactController@index');
    Route::post('contact/update', 'ContactController@update');

    //Galeri
    Route::get('/galeri', 'GaleriController@index');
    Route::post('galeri/create', 'GaleriController@create');
    Route::post('galeri/update/ket', 'GaleriController@update_ket');
    Route::post('galeri/update/foto', 'GaleriController@update_foto');
    Route::get('galeri/delete/{id}', 'GaleriController@delete');

    //Response
    Route::get('/response', 'ResponseController@index');
    Route::post('response/create', 'ResponseController@create');
    Route::post('response/update/ket', 'ResponseController@update_ket');
    Route::post('response/update/foto', 'ResponseController@update_foto');
    Route::get('response/delete/{id}', 'ResponseController@delete');

    //Layanan
    Route::get('/layanan', 'LayananController@index');
    Route::post('layanan/create', 'LayananController@create');
    Route::post('layanan/update', 'LayananController@update');
    Route::get('layanan/delete/{id}', 'LayananController@delete');
});
