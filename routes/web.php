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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('lembaga','LembagaController');

Route::resource('akademik','AkademikController');

Route::resource('fakultas','FakultasController');

Route::get('prodi/{id}/buat', 'ProdiController@buat');
Route::resource('prodi','ProdiController');

Route::resource('siklus','SiklusController');

Route::get('sisi/{id}/daftarisi', 'IsiController@daftarisi');
Route::get('sisi/isi/{id}', 'IsiController@viewisi');
Route::get('sisi/{id}/buat', 'IsiController@buat');
Route::get('nilai/view/{id}', 'IsiController@viewnilai');
Route::resource('sisi','IsiController');

Route::get('nilai/{id}/tambahnilai', 'PenilaianController@tambahnilai');
Route::resource('nilai','PenilaianController');

Route::resource('doc','DokumenController');

Route::get("addMore","ProductAddMoreController@addMore");
Route::post("addMore","ProductAddMoreController@addMorePost")->name('addmorePost');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});

