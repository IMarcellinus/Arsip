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


Route::get('/promosi', [App\Http\Controllers\HomeController::class, 'getPromosi'])->name('promosi');
Route::get('/manajemenuser', [App\Http\Controllers\HomeController::class, 'manajemenuser'])->name('manajemenuser');
Route::post('/tambahpromosi', [App\Http\Controllers\HomeController::class, 'simpanPromosi'])->name('tambahpromosi');
// Crud Promosi
Route::get('/tampilpromosi/{id}', [HomeController::class, 'tampilpromosi'])->name('tampilpromosi');
Route::post('/updatepromosi/{id}', [App\Http\Controllers\HomeController::class, 'updatepromosi'])->name('updatepromosi');
Route::get('/deletepromosi/{id}', [App\Http\Controllers\HomeController::class, 'deletepromosi'])->name('deletepromosi');
Route::get('/caripromosi', [App\Http\Controllers\HomeController::class, 'searchPromosi'])->name('caripromosi');
// Crud Disiplin
Route::get('/tampildisiplin/{id}', [HomeController::class, 'tampildisiplin'])->name('tampildisiplin');
Route::get('/deletedisiplin/{id}', [App\Http\Controllers\HomeController::class, 'deletedisiplin'])->name('deletedisiplin');
Route::get('/disiplinpegawai', [App\Http\Controllers\HomeController::class, 'getDisiplin'])->name('disiplinpegawai');
Route::post('/updatedisiplin/{id}', [App\Http\Controllers\HomeController::class, 'updatedisiplin'])->name('updatedisiplin');
Route::post('/tambahdisiplin', [App\Http\Controllers\HomeController::class, 'simpanDisiplin'])->name('tambahdisiplin');
// Crud penghargaan
Route::get('/tampilpenghargaan/{id}', [HomeController::class, 'tampilpenghargaan'])->name('tampilpenghargaan');
Route::post('/tambahpenghargaan', [App\Http\Controllers\HomeController::class, 'simpanPenghargaan'])->name('tambahpenghargaan');
Route::get('/tandapenghargaan', [App\Http\Controllers\HomeController::class, 'getPenghargaan'])->name('tandapenghargaan');
Route::get('/deletepenghargaan/{id}', [App\Http\Controllers\HomeController::class, 'deletepenghargaan'])->name('deletepenghargaan');
Route::post('/updatepenghargaan/{id}', [App\Http\Controllers\HomeController::class, 'updatepenghargaan'])->name('updatepenghargaan');
// Crud prestasi
Route::get('/tampilprestasi/{id}', [HomeController::class, 'tampilprestasi'])->name('tampilprestasi');
Route::post('/tambahprestasi', [App\Http\Controllers\HomeController::class, 'simpanPrestasi'])->name('tambahprestasi');
Route::get('/penilaianprestasi', [App\Http\Controllers\HomeController::class, 'getPrestasi'])->name('penilaianprestasi');
Route::post('/updateprestasi/{id}', [App\Http\Controllers\HomeController::class, 'updateprestasi'])->name('updateprestasi');
Route::get('/deleteprestasi/{id}', [App\Http\Controllers\HomeController::class, 'deleteprestasi'])->name('deleteprestasi');
// Crud Kesehatan   
Route::post('/updatekesehatan/{id}', [App\Http\Controllers\HomeController::class, 'updatedkesehatan'])->name('updatekesehatan');
Route::post('/tambahkesehatan', [App\Http\Controllers\HomeController::class, 'simpanKesehatan'])->name('tambahkesehatan');
Route::get('/kesehatan', [App\Http\Controllers\HomeController::class, 'getKesehatan'])->name('kesejahteraan.kesehatan');
Route::get('/deletekesehatan/{id}', [App\Http\Controllers\HomeController::class, 'deletekesehatan'])->name('deletekesehatan');
Route::get('/tampilkesehatan/{id}', [HomeController::class, 'tampilkesehatan'])->name('tampilkesehatan');
// Crud Cuti
Route::post('/tambahcuti', [App\Http\Controllers\HomeController::class, 'simpanCuti'])->name('tambahcuti');
Route::get('/cuti', [App\Http\Controllers\HomeController::class, 'getCuti'])->name('kesejahteraan.cuti');
Route::get('/cuti/{id}', [HomeController::class, 'cuti'])->name('cuti');
Route::post('/updatecuti/{id}', [App\Http\Controllers\HomeController::class, 'updatecuti'])->name('updatecuti');
Route::get('/deletecuti/{id}', [App\Http\Controllers\HomeController::class, 'deletecuti'])->name('deletecuti');
// Crud tunjangan
Route::post('/tambahtunjangan', [App\Http\Controllers\HomeController::class, 'simpanTunjangan'])->name('tambahtunjangan');
Route::get('/tunjangan', [App\Http\Controllers\HomeController::class, 'getTunjangan'])->name('kesejahteraan.tunjangan');
Route::get('/tunjangan/{id}', [HomeController::class, 'tunjangan'])->name('tunjangan');
Route::post('/updatetunjangan/{id}', [App\Http\Controllers\HomeController::class, 'updatetunjangan'])->name('updatetunjangan');
Route::get('/deletetunjangan/{id}', [App\Http\Controllers\HomeController::class, 'deletetunjangan'])->name('deletetunjangan');
// Crud pensiun
Route::post('/tambahpensiun', [App\Http\Controllers\HomeController::class, 'simpanPensiun'])->name('tambahpensiun');
Route::get('/pensiun', [App\Http\Controllers\HomeController::class, 'getPensiun'])->name('kesejahteraan.pensiun');
Route::get('/deletepensiun/{id}', [App\Http\Controllers\HomeController::class, 'deletepensiun'])->name('deletepensiun');
Route::post('/updatepensiun/{id}', [App\Http\Controllers\HomeController::class, 'updatepensiun'])->name('updatepensiun');
Route::get('/pensiun/{id}', [HomeController::class, 'pensiun'])->name('pensiun');
// crud manajemen user
Route::post('/tambahuser', [App\Http\Controllers\HomeController::class, 'tambahuser'])->name('tambahuser');
Route::post('/updateuser/{id}', [App\Http\Controllers\HomeController::class, 'updateuser'])->name('updateuser');
Route::get('/deleteuser/{id}', [App\Http\Controllers\HomeController::class, 'deleteuser'])->name('deleteuser');