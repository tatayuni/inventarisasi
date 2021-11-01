<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardDataController;
use App\Http\Controllers\InventarisasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LayananOnlineController;

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


Route::get('/layanan-online', function () {
    return view('layanan',[
        "title" => "Layanan Online"
    ]);
})->name('layanan-online');

Route::get('/pantauan', function () {
    return view('pantauan',[
        "title" => "Pantauan"
    ]);
})->name('pantauan');


Route::get('/prosedur', function () {
    return view('prosedur',[
        "title" => "Prosedur"
    ]);
})->name('prosedur');

Route::get('/devan', function () {
    return view('layouts.main_admin',[
        "title" => "template"
    ]);
})->name('devan');


Route::get('/inventarisasi/list', [InventarisasiController::class, 'getInventarisasi'])->name('inventarisasi.list');
Route::get('/pendaftaran/list', [PendaftaranController::class, 'getSudahpunya'])->name('sudah_punya_aplikasi.list');
Route::get('/layananonline/list', [LayananOnlineController::class, 'getBelumpunya'])->name('belum_punya_aplikasi.list');
Route::resource('layananonline', LayananOnlineController::class);
Route::resource('inventarisasi', InventarisasiController::class);
Route::resource('pendaftaran', PendaftaranController::class);


Route::get('layanan/inventarisasi', function () {
    return view('inventarisasi',[
        "title" => "Inventarisasi"
    ]);
})->name('layanan.inventarisasi');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/dashboard/data', DashboardDataController::class)
->middleware('auth');
