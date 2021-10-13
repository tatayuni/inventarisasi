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
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/aturan', function () {
    return view('aturan');
});
Route::get('/inventarisasi', function () {
    return view('inventarisasi');
});
Route::get('/pantauan', function () {
    return view('pantauan');
});
