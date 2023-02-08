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

Route::get('/login', [AuthController::class, 'showLogin'])->name("view.login");
Route::get('/register', [AuthController::class, 'showRegister'])->name("view.register");
Route::get('/', [HomeController::class, 'show'])->name("view.home");
Route::get('/tawar-barang/{uuid}', [PenawaranController::class, 'show'])->name("view.tawar");
Route::get('/profile', [ProfileController::class, 'show'])->name("view.profile");

Route::post('/login', [AuthController::class, 'login'])->name("post.login");
Route::delete('/logout', [AuthController::class, 'logout'])->name("delete.logout");
Route::post('/register', [AuthController::class, 'register'])->name("post.register");
Route::post('/tawar-barang/{slug}', [PenawaranController::class, 'tawar'])->name("post.tawar");
Route::patch('/profile', [ProfileController::class, 'update'])->name("patch.profile");

Route::prefix('admin')->group(function() {
  Route::get('/portal', [AdminAuthController::class, 'show']);
  Route::get('/barang', [AdminBarangController::class, 'show']);
  Route::get('/lelang', [AdminLelangController::class, 'show']);
  Route::get('/petugas', [AdminPetugasController::class, 'show']);
  Route::get('/masyarakat', [AdminMasyarakatController::class, 'show']);
  Route::get('/laporan', [AdminLaporanController::class, 'show']);

});

Route::post('/images', [ImageController::class, 'upload'])->name("post.images");
