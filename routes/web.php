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
Route::get('/user', function () {
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

