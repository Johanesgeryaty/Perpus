<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\BukuOnlineController;





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
    return view('index');
});

Auth::routes();

route::get('/Waca', [HomeController::class, 'index  '])->name('index');
route::get('/login', [LoginController::class, 'index'])->name('login.index');
route::post('/login', [LoginController::class, 'proces'])->name('login.post');
route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

//admin
Route::prefix('admin')->name('admin.')->middleware('role:admin')->group( function() {
        route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        route::get('daftar-anggota', [DashboardController::class, 'daftaranggota'])->name('daftar-anggota');
        route::get('data-buku-online', [DashboardController::class, 'databukuonline'])->name('data-buku-online');
        route::get('data-buku-offline', [DashboardController::class, 'databukuoffline'])->name('data-buku-offline');
        route::get('kotak-saran', [DashboardController::class, 'kotaksaran'])->name('kotak-saran');

        //crud anggota
        route::get('daftar-anggota/index', [AnggotaController::class, 'index'])->name('anggota.index');
        route::get('daftar-anggota/create', [AnggotaController::class, 'create'])->name('anggota.tambah');
        route::post('daftar-anggota/create', [AnggotaController::class, 'store'])->name('anggota.buat');
        route::get('daftar-anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
        route::put('daftar-anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
        route::delete('daftar-anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.hapus');

        //crud buku

        Route::get('buku-online', [BukuOnlineController::class, 'index'])->name('bukuonline.index');
        Route::get('buku-online/create', [BukuOnlineController::class, 'create'])->name('bukuonline.tambah');
        Route::post('buku-online/create', [BukuOnlineController::class, 'store'])->name('bukuonline.store');
        Route::get('buku-online/{id}/edit', [BukuOnlineController::class, 'edit'])->name('bukuonline.edit');
        Route::post('buku-online/{id}', [BukuOnlineController::class, 'update'])->name('bukuonline.update');
        Route::delete('buku-online/{id}', [BukuOnlineController::class, 'destroy'])->name('bukuonline.hapus');

});

Route::prefix('user')->name('user.')->middleware('role:user')->group( function() {
        route::get('dashboard', [DashboardUserController::class, 'index'])->name('dashboard');
<<<<<<< HEAD

=======
        Route::get('form-user', function () {
                return view('user.form-user');
            });
>>>>>>> f05810c39ee579ec7f606f7540b2a47f1b8ecc98
});
