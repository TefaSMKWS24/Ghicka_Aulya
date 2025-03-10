<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\GuestController;
use App\Http\controllers\AuthController;

use App\Http\controllers\BarangController;
use App\Http\controllers\KasirController;
use App\Http\controllers\KategoriController;
use App\Http\controllers\TransaksiController;
use App\Http\controllers\PelangganController;


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

Route::get('/', function () {
    return view('welcome');
});


// GUEST (sebelum login)
Route::middleware(['guest:kasir'])->group(function () {
    Route::get('/kasir', function () {return view('auth.loginkasir');})->name('loginkasir');
    Route::post('/loginkasir', [AuthController::class, 'loginkasir']);
   });

   Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin', function () {return view('auth.loginadmin');})->name('loginadmin');
    Route::post('/loginadmin', [AuthController::class, 'loginadmin']);
   });

   // AUTH (setelah login)
    Route::middleware(['auth:kasir'])->group(function () {
       Route::get('/kasir/dashboard', [DashbordkasirController::class, 'dashboard']);
       Route::get('/kasir/logout', [AuthController::class, 'logoutkasir']);
   });

    Route::middleware(['auth:admin'])->group(function () {
       Route::get('/admin/dashboard', [DashbordadminController::class, 'dashboard']);
       Route::get('/admin/logout', [AuthController::class, 'logoutadmin']);

       // Route::resource('barang', BarangController::class);
       // Route::resource('kasir', KasirController::class);
       // Route::resource('kategori', kategoriController::class);
       // Route::resource('transaksi', TransaksiController::class);
       // Route::resource('pelanggan', PelangganController::class);
   });
