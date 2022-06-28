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


Route::get('/kesehatan', [App\Http\Controllers\HomeController::class, 'getKesehatan'])->name('kesejahteraan.pegawai');
Route::get('/cuti', [App\Http\Controllers\HomeController::class, 'getCuti'])->name('kesejahteraan.cuti');
Route::get('/tunjangan', [App\Http\Controllers\HomeController::class, 'getTunjangan'])->name('kesejahteraan.tunjangan');
Route::get('/pensiun', [App\Http\Controllers\HomeController::class, 'getPensiun'])->name('kesejahteraan.pensiun');
Route::get('/promosi', [App\Http\Controllers\HomeController::class, 'getPromosi'])->name('promosi');
Route::get('/disiplinpegawai', [App\Http\Controllers\HomeController::class, 'getDisiplin'])->name('disiplinpegawai');
Route::get('/tandapenghargaan', [App\Http\Controllers\HomeController::class, 'getPenghargaan'])->name('tandapenghargaan');
Route::get('/penilaianprestasi', [App\Http\Controllers\HomeController::class, 'getPrestasi'])->name('penilaianprestasi');
Route::get('/manajemenuser', [App\Http\Controllers\HomeController::class, 'manajemenuser'])->name('manajemenuser');
Route::post('/tambahpromosi', [App\Http\Controllers\HomeController::class, 'simpanPromosi'])->name('tambahpromosi');
Route::post('/tambahdisiplin', [App\Http\Controllers\HomeController::class, 'simpanDisiplin'])->name('tambahdisiplin');
Route::post('/tambahpenghargaan', [App\Http\Controllers\HomeController::class, 'simpanPenghargaan'])->name('tambahpenghargaan');
Route::post('/tambahprestasi', [App\Http\Controllers\HomeController::class, 'simpanPrestasi'])->name('tambahprestasi');
Route::post('/tambahkesehatan', [App\Http\Controllers\HomeController::class, 'simpanKesehatan'])->name('tambahkesehatan');
Route::post('/tambahcuti', [App\Http\Controllers\HomeController::class, 'simpanCuti'])->name('tambahcuti');
Route::post('/tambahtunjangan', [App\Http\Controllers\HomeController::class, 'simpanTunjangan'])->name('tambahtunjangan');
Route::post('/tambahpensiun', [App\Http\Controllers\HomeController::class, 'simpanPensiun'])->name('tambahpensiun');
// Route::patch('/updatepromosi/{id}', ['as' => 'updatepromosi', 'uses' => 'HomeController@updatePromosi']);
Route::get('/tampilpromosi/{id}', [HomeController::class, 'tampilpromosi'])->name('tampilpromosi');
Route::post('/updatepromosi/{id}', [App\Http\Controllers\HomeController::class, 'updatepromosi'])->name('updatepromosi');
Route::get('/deletepromosi/{id}', [App\Http\Controllers\HomeController::class, 'deletepromosi'])->name('deletepromosi');
Route::get('/caripromosi', [App\Http\Controllers\HomeController::class, 'searchPromosi'])->name('caripromosi');