<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/kesehatan', [App\Http\Controllers\HomeController::class, 'kesehatanpegawai'])->name('kesejahteraan.pegawai');
Route::get('/cuti', [App\Http\Controllers\HomeController::class, 'cutipegawai'])->name('kesejahteraan.cuti');
Route::get('/tunjangan', [App\Http\Controllers\HomeController::class, 'tunjanganpegawai'])->name('kesejahteraan.tunjangan');
Route::get('/pensiun', [App\Http\Controllers\HomeController::class, 'pensiunpegawai'])->name('kesejahteraan.pensiun');
Route::get('/promosi', [App\Http\Controllers\HomeController::class, 'promosi'])->name('promosi');
Route::get('/disiplinpegawai', [App\Http\Controllers\HomeController::class, 'disiplinpegawai'])->name('disiplinpegawai');
Route::get('/tandapenghargaan', [App\Http\Controllers\HomeController::class, 'tandapenghargaan'])->name('tandapenghargaan');
Route::get('/penilaianprestasi', [App\Http\Controllers\HomeController::class, 'penilaianprestasi'])->name('penilaianprestasi');
Route::get('/manajemenuser', [App\Http\Controllers\HomeController::class, 'manajemenuser'])->name('manajemenuser');
Route::post('/tambahpromosi', [App\Http\Controllers\HomeController::class, 'simpanPromosi'])->name('tambahpromosi');
