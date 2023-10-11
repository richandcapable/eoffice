<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;

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

// Route::get('visimisi', function () {
//     return view('layouts.visimisi');
// });
Route::get('/visimisi', [VisiController::class, 'index']);
Route::put('/visimisi-update/1', [VisiController::class, 'update']);
Route::put('/visis', [VisiController::class, 'store'])->name('visi.store');

Route::post('/misi-store', [MisiController::class, 'store']);
// Route::put('/misis', [MisiController::class, 'store'])->name('misi.store');
Route::get('sasaran', function () {
    return view('layouts.sasaran');
});
Route::resource('visis', \App\Http\Controllers\VisiController::class);
Route::resource('misis', \App\Http\Controllers\VisiController::class);
Route::put('/visis', [VisiController::class, 'store'])->name('visi.store');
Route::put('/misis', [VisiController::class, 'store'])->name('misi.store');
Route::get('layouts/visimisi', [VisiController::class, 'index'])->name('layouts.visimisi');

