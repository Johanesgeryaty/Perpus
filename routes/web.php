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
use App\Http\Controllers\Tambah_BukuController;




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
route::post('/login', [LoginController::class, 'proces'])->name('login.proces');
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

        Route::resource('tambah_buku', Tambah_BukuController::class);

});

Route::prefix('user')->name('user.')->middleware('role:user')->group( function() {
        route::get('dashboard', [DashboardUserController::class, 'index'])->name('dashboard');
});
