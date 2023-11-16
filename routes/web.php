<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\SasaranController;
use App\Models\Indikator;
use App\Models\Sasaran;
use App\Models\Tujuan;

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

Route::get('detailsasaran', function () {
    return view('layouts.detailsasaran');
});
// Route::get('visimisi', function () {
//     return view('layouts.visimisi');
// });
Route::get('/visimisi', [VisiController::class, 'index']);
Route::put('/visimisi-update/1', [VisiController::class, 'update']);
Route::put('/visis', [VisiController::class, 'store'])->name('visi.store');
Route::get('/visi/{id}', [VisiController::class, 'show']);

// Route::put('/misis', [MisiController::class, 'store'])->name('misi.store');
Route::get('layouts/sasaran', function () {
    return view('layouts.sasaran');
});
Route::resource('visis', \App\Http\Controllers\VisiController::class);
Route::resource('misis', \App\Http\Controllers\VisiController::class);
Route::put('/visis', [VisiController::class, 'store'])->name('visi.store');
Route::put('/misis', [VisiController::class, 'store'])->name('misi.store');
Route::get('layouts/visimisi', [VisiController::class, 'index'])->name('layouts.visimisi');

//MISI
Route::get('/misi/{id}', [MisiController::class, 'index']);
Route::post('/misi-store', [MisiController::class, 'store']);
Route::put('/visimisi-update/{id}', [MisiController::class, 'update']);
Route::get('/hapus/misi/{id}', [MisiController::class, 'destroy'])->name('hapus');
//INDIKATOR
Route::post('/indikator-store', [IndikatorController::class, 'store']);
Route::put('/indikator-update/{item}', [IndikatorController::class, 'update']);
Route::get('/hapus/indikator/{id}', [IndikatorController::class, 'destroy'])->name('hapus');
//TUJUAN
Route::post('/tujuan-store', [TujuanController::class, 'store']);
Route::put('/tujuan-update/{id}', [TujuanController::class, 'update']);
Route::delete('/hapus-tujuan/{id}', [TujuanController::class, 'destroy'])->name('hapus');
//SASARAN
Route::get('/sasaran', [SasaranController::class, 'index'])->name('layouts.sasaran');
Route::post('/sasaran-store', [SasaranController::class, 'store']);
Route::put('/sasaran-update/{id}', [SasaranController::class, 'update']);
Route::delete('/hapus-sasaran/{id}', [SasaranController::class, 'destroy'])->name('hapus');

Route::get('/sasaran/search', [SasaranController::class, 'search']);
