<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardDataController;

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
    return view('home',[
        "title" => "Beranda"
    ]);
})->name('home');


Route::get('/layanan', function () {
    return view('layanan',[
        "title" => "Layanan Online"
    ]);
})->name('layanan');


Route::get('/aturan', function () {
    return view('aturan',[
        "title" => "Aturan"
    ]);
})->name('aturan');


Route::get('/inventarisasi', function () {
    return view('inventarisasi',[
        "title" => "Inventarisasi"
    ]);
})->name('inventarisasi');


Route::get('/pantauan', function () {
    return view('pantauan',[
        "title" => "Pantauan"
    ]);
})->name('pantauan');


Route::get('/details', function () {
    return view('details',[
        "title" => "Details Aplikasi"
    ]);
})->name('pantauan');

Route::get('/devan', function () {
    return view('layouts.main_admin',[
        "title" => "template"
    ]);
})->name('devan');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/dashboard/data', DashboardDataController::class)
->middleware('auth');
