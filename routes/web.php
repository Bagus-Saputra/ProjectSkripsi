<?php

use App\Http\Controllers\HalPesanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProdukDataController;
use App\Http\Controllers\RekDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){return redirect('/home');});

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/rekomendasi', [AuthController::class,'index'])->name('rekomen');

Route::get('/isirekomendasi', [HalPesanController::class, 'index'])->name('rekrekomen');
Route::post('/isirekomendasi', [HalPesanController::class, 'store'])->name('rekrekomenn');

Route::get('/hasilrek', [HalPesanController::class, 'hasil'])->name('hasilrek');

Route::get('/produk', [HomeController::class,'produkk'])->name('prod');

Route::get('/pesan', [AuthController::class,'call'])->name('pesan');

Route::get('/login', [LogController::class, 'login'])->name('login');
Route::post('/actionlogin', [LogController::class,'actionlogin'])->name('actionlogin');
Route::get('/logout', [LogController::class, 'logout'])->name('logout');

Route::get('/beranda', [BerandaController::class,'index'])->name('berandaadmin')->middleware('auth');

// Route::get('/dataproduk', [ProdukDataController::class,'index'])->name('ahh')->middleware();
// Route::post('/actionproduk', [ProdukDataController::class,'actionproduk'])->name('actionproduk');

Route::resource('product', ProdukDataController::class)->middleware('auth');

// Route::get('/adminrek', [RekDataController::class, 'index'])->name('rekdata')->middleware('auth');

Route::resource('reko', RekDataController::class)->middleware('auth');