<?php

use App\CMS\Auth\Controllers\AuthController as AdminAuthController;
use App\CMS\Barang\Controllers\BarangController as AdminBarangController;
use App\CMS\Laporan\Controllers\LaporanController as AdminLaporanController;
use App\CMS\Lelang\Controllers\LelangController as AdminLelangController;
use App\CMS\Masyarakat\Controllers\MasyarakatController as AdminMasyarakatController;
use App\CMS\Petugas\Controllers\PetugasController as AdminPetugasController;
use App\Frontend\Auth\Controllers\AuthController;
use App\Frontend\Barang\Controllers\BarangController;
use App\Frontend\Penawaran\Controllers\PenawaranController;
use App\Frontend\Profile\Controllers\ProfileController;
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

Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/', [BarangController::class, 'show']);
Route::get('/tawar-barang/{uuid}', [PenawaranController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);

Route::prefix('admin')->group(function() {
  Route::get('/portal', [AdminAuthController::class, 'show']);
  Route::get('/barang', [AdminBarangController::class, 'show']);
  Route::get('/lelang', [AdminLelangController::class, 'show']);
  Route::get('/petugas', [AdminPetugasController::class, 'show']);
  Route::get('/masyarakat', [AdminMasyarakatController::class, 'show']);
  Route::get('/laporan', [AdminLaporanController::class, 'show']);
});
