<?php

use App\CMS\Auth\Controllers\AuthController as AdminAuthController;
use App\CMS\Barang\Controllers\BarangController as AdminBarangController;
use App\CMS\Laporan\Controllers\LaporanController as AdminLaporanController;
use App\CMS\Lelang\Controllers\LelangController as AdminLelangController;
use App\CMS\Masyarakat\Controllers\MasyarakatController as AdminMasyarakatController;
use App\CMS\Petugas\Controllers\PetugasController as AdminPetugasController;
use App\Frontend\Auth\Controllers\AuthController;
use App\Frontend\Home\Controllers\HomeController;
use App\Frontend\Penawaran\Controllers\PenawaranController;
use App\Frontend\Profile\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
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

Route::get('login', [AuthController::class, 'showLogin'])->name("view.login");
Route::get('register', [AuthController::class, 'showRegister'])->name("view.register");
Route::get('', [HomeController::class, 'show'])->name("view.home");
Route::get('tawar-barang/{slug}', [PenawaranController::class, 'show'])->name("view.tawar");
Route::get('profile', [ProfileController::class, 'show'])->name("view.profile");

Route::post('login', [AuthController::class, 'login'])->name("post.login");
Route::delete('logout', [AuthController::class, 'logout'])->name("delete.logout");
Route::post('register', [AuthController::class, 'register'])->name("post.register");
Route::post('tawar-barang/{slug}', [PenawaranController::class, 'tawar'])->name("post.tawar");
Route::patch('profile', [ProfileController::class, 'update'])->name("patch.profile");

Route::prefix('admin')->group(function() {
  Route::get('portal', [AdminAuthController::class, 'show'])->name("view.login..admin");
  Route::get('barang/{id}', [AdminBarangController::class, 'show'])->name("view.barang.admin");
  Route::get('lelang/{slug}', [AdminLelangController::class, 'show'])->name("view.lelang.admin");
  Route::get('petugas/{id}', [AdminPetugasController::class, 'show'])->name("view.petugas.admin");
  Route::get('masyarakat/{id}', [AdminMasyarakatController::class, 'show'])->name("view.masyarakat.admin");
  Route::get('laporan', [AdminLaporanController::class, 'show'])->name("view.laporan.admin");

  Route::post('portal', [AdminAuthController::class, 'login'])->name("post.login.admin");
  Route::post('barang', [AdminBarangController::class, 'create'])->name("post.barang.admin");
  Route::post('lelang', [AdminLelangController::class, 'create'])->name("post.lelang.admin");
  Route::post('petugas', [AdminPetugasController::class, 'create'])->name("post.petugas.admin");
  Route::post('masyarakat', [AdminMasyarakatController::class, 'create'])->name("post.masyarakat.admin");

  Route::patch('barang/{slug}', [AdminBarangController::class, 'update'])->name("patch.barang.admin");
  Route::patch('lelang/{slug}', [AdminLelangController::class, 'update'])->name("patch.lelang.admin");
  Route::patch('petugas/{id}', [AdminPetugasController::class, 'update'])->name("patch.petugas.admin");
  Route::patch('masyarakat/{id}', [AdminMasyarakatController::class, 'update'])->name("patch.masyarakat.admin");

  Route::delete('barang/{slug}', [AdminBarangController::class, 'delete'])->name("delete.barang.admin");
  Route::delete('lelang/{slug}', [AdminLelangController::class, 'delete'])->name("delete.lelang.admin");
  Route::delete('petugas/{id}', [AdminPetugasController::class, 'delete'])->name("delete.petugas.admin");
  Route::delete('masyarakat/{id}', [AdminMasyarakatController::class, 'delete'])->name("delete.masyarakat.admin");

  Route::delete('logout', [AdminAuthController::class, 'logout'])->name("delete.logout.admin");
});

Route::post('images', [ImageController::class, 'upload'])->name("post.images");
