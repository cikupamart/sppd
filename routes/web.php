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

// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('instansi', 'InstansiController');
    Route::resource('biaya', 'BiayaController');
    Route::resource('pegawai', 'PegawaiController');
    Route::resource('surat', 'SuratController');
    Route::resource('sppd', 'SppdController');
    Route::resource('pengeluaran', 'PengeluaranController');
});


Route::group(['prefix' => 'table', 'as' => 'table.', 'middleware' => 'auth'], function () {
    Route::get('instansi', 'InstansiController@dataTable')->name('instansi');
    Route::get('biaya', 'BiayaController@dataTable')->name('biaya');
    Route::get('pegawai', 'PegawaiController@dataTable')->name('pegawai');
    Route::get('surat', 'SuratController@dataTable')->name('surat');
    Route::get('sppd', 'SppdController@dataTable')->name('sppd');
    Route::get('pengeluaran', 'PengeluaranController@dataTable')->name('pengeluaran');
});

Route::group(['prefix' => 'api/select', 'as' => 'api.select.', 'middleware' => 'auth'], function () {
    Route::get('surat/', 'SuratController@getSelect2Surat')->name('surat');
    Route::get('surat/pegawai', 'SuratController@getSelect2')->name('surat.pegawai');
});