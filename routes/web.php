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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dahsboard');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/databarang', function () {
    return view('databarang');
});
Route::get('/dataruangan', function () {
    return view('dataruangan');
});
Route::get('/aturan', function () {
    return view('aturan');
});
Route::get('/tambahdata', function () {
    return view('/form/tambahdata');
});
Route::get('/dashboards', function () {
    return view('/dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Auth::routes();

Route::get('/superadmin', 'SuperadminController@index')->name('superadmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
