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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('penggunas', App\Http\Controllers\PenggunaController::class);

Route::resource('pemdaMonitorings', App\Http\Controllers\PemdaMonitoringController::class);

Route::resource('daftarOpds', App\Http\Controllers\DaftarOpdController::class);

Route::resource('ujiAktBansos', App\Http\Controllers\UjiAktBansosController::class);
Route::get('/ujiAktBansos/{pemda_id}/{opd_id}', [App\Http\Controllers\UjiAktBansosController::class, 'indexaktbansos'])->name('indexaktbansos');
Route::get('/ujiAktBansos/create/{pemda_id}/{opd_id}/{rek_id}', [App\Http\Controllers\UjiAktBansosController::class, 'createaktbansos'])->name('createaktbansos');

Route::resource('validasiPerwakilans', App\Http\Controllers\ValidasiPerwakilanController::class);
Route::get('/validasiPerwakilans/{kd_pwk}/ringkasan', [App\Http\Controllers\ValidasiPerwakilanController::class, 'show_ringkasan'])->name('show_ringkasan');

Route::resource('validasiPemdas', App\Http\Controllers\ValidasiPemdaController::class);
Route::get('/validasiPemdas/{id_pemda}/ringkasan', [App\Http\Controllers\ValidasiPemdaController::class, 'show_ringkasan'])->name('show_ringkasan');
