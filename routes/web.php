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
use App\Http\Controllers\BukuOfflineController;
use App\Http\Controllers\GantiPasswordController;
use App\Http\Controllers\EditProfilController;
use App\Http\Controllers\KotakSaranController;

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

Route::fallback(function () {
      return('error bang');
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
        route::get('data-buku-offlinel  ', [DashboardController::class, 'databukuoffline'])->name('data-buku-offline');
        route::get('kotak-saran', [DashboardController::class, 'kotaksaran'])->name('kotak-saran');
        route::get('transaksi', [DashboardController::class, 'transaksi'])->name('transaksi');
        route::delete('kotak-saran/{id}', [KotakSaranController::class, 'destroy'])->name('kotak-saran.hapus');

        //crud anggota
        route::post('daftar-anggota/import',[AnggotaController::class, 'import'])->name('anggota.import');
        route::get('daftar-anggota/export', [AnggotaController::class, 'export'])->name('anggota.export');
        route::get('daftar-anggota/index', [AnggotaController::class, 'index'])->name('anggota.index');
        route::get('daftar-anggota/create', [AnggotaController::class, 'create'])->name('anggota.tambah');
        route::post('daftar-anggota/create', [AnggotaController::class, 'store'])->name('anggota.buat');
        route::get('daftar-anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
        route::put('daftar-anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
        route::delete('daftar-anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.hapus');
        route::get('daftar-anggota/{id}/show', [AnggotaController::class, 'show'])->name('anggota.show');

        route::get('daftar-anggota/search',[Anggotacontroller::class,'search'])->name('anggota.search');

        //crud buku

        Route::get('buku-online', [BukuOnlineController::class, 'index'])->name('bukuonline.index');
        Route::get('buku-online/create', [BukuOnlineController::class, 'create'])->name('bukuonline.tambah');
        Route::post('buku-online/create', [BukuOnlineController::class, 'store'])->name('bukuonline.store');
        Route::get('buku-online/{id}/edit', [BukuOnlineController::class, 'edit'])->name('bukuonline.edit');
        Route::post('buku-online/{id}', [BukuOnlineController::class, 'update'])->name('bukuonline.update');
        Route::delete('buku-online/{id}', [BukuOnlineController::class, 'destroy'])->name('bukuonline.hapus');

         //crud buku-offline
        Route::get('buku-offline', [BukuOfflineController::class, 'index'])->name('bukuoffline.index'); 
        Route::get('buku-offline/create', [BukuOfflineController::class,'create'])->name('bukuoffline.create');
        Route::post('buku-offline/create', [BukuOfflineController::class, 'store'])->name('bukuoffline.store');
        Route::get('buku-offline/{id}/edit', [BukuOfflineController::class, 'edit'])->name('bukuoffline.edit');
        Route::post('buku-offline/{id}', [BukuOfflineController::class, 'update'])->name('bukuoffline.update');
        Route::delete('buku-offline/{id}', [BukuOfflineController::class, 'destroy'])->name('bukuoffline.hapus');
});

Route::prefix('user')->name('user.')->middleware('role:user')->group( function() {
        route::get('dashboard', [DashboardUserController::class, 'index'])->name('dashboard');
        route::get('bukuonline', [DashboardUserController::class, 'bukuonline'])->name('bukuonline');
        route::get('bukuoffline', [DashboardUserController::class, 'bukuoffline'])->name('bukuoffline');
        route::get('historypinjam', [DashboardUserController::class, 'historypinjam'])->name('historypinjam');
        route::get('whislist', [DashboardUserController::class, 'whislist'])->name('whislist');
        route::get('saran', [DashboardUserController::class, 'saran'])->name('saran');
        route::put('saran/store', [KotakSaranController::class, 'store'])->name('saran.store');
        
        //editprofil
        Route::get('editprofil/{id}', [EditProfilController::class, 'editprofil'])->name('editprofil');
        Route::post('editprofil/{id}', [EditProfilController::class, 'updateprofil'])->name('updateprofil');


        //ganti password
        route::get('gantipassword', [GantiPasswordController::class, 'gantipassword'])->name('gantipassword.action');
        Route::post('updatepassword', [GantiPasswordController::class, 'updatepassword'])->name('updatepassword');
       
});