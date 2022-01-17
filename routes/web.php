<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PenukaranSampahController;
use App\Http\Controllers\PenukaranSembakoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\TransaksiSampahController;
use App\Http\Controllers\TransaksiSembakoController;
use App\Http\Controllers\UserDashboardController;
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

// route terbuka
Route::get('/', [HomeController::class, 'index']);
Route::get('tentang-kami', [HomeController::class, 'about']);
Route::get('visi-misi', [HomeController::class, 'visimisi']);
Route::get('our-team', [HomeController::class, 'ourteam']);

Route::get('sembako', [PenukaranSembakoController::class, 'index'])->name('sembako');
Route::get('sembako/search', [PenukaranSembakoController::class, 'search'])->name('sembako.search');

// middleware guest -> ketika user sudah login tidak akan bisa masuk ke halaman login/register lagi
Route::middleware('guest')->group(function() {
    
    // authentikasi    
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register');
    
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

// perlu melakukan authentikasi
Route::middleware('auth')->group(function() {
    
    // penukaran sampah
    Route::get('penukaran-sampah', [PenukaranSampahController::class, 'create'])->name('penukaran-sampah');
    Route::post('penukaran-sampah',  [PenukaranSampahController::class, 'store'])->name('penukaran-sampah');
    
    // penukaran sembako
    Route::get('sembako/{id}', [PenukaranSembakoController::class, 'create']);
    Route::post('sembako/{id}', [PenukaranSembakoController::class, 'store']);
    
    // route user
    Route::prefix('user/dashboard')->middleware('user')->group(function() {
        Route::get('/', [UserDashboardController::class, 'index'])->name('user');
        Route::post('/', [UserDashboardController::class, 'profil'])->name('user');
        Route::get('detail_penukaran_sampah/{id}', [UserDashboardController::class, 'detail']);
        Route::get('status_penukaran_sembako', [UserDashboardController::class, 'status'])->name('status');
    });

    // route admin
    Route::prefix('admin/dashboard')->middleware('admin')->group(function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin');
        Route::get('data-users', [AdminDashboardController::class, 'users'])->name('admin.data-users');
        
        Route::get('data-sembako', [SembakoController::class, 'index'])->name('admin.data-sembako');
        Route::get('tambah-sembako', [SembakoController::class, 'create'])->name('admin.tambah-sembako');
        Route::post('tambah-sembako', [SembakoController::class, 'store'])->name('admin.tambah-sembako');
        Route::get('update-sembako/{id}', [SembakoController::class, 'edit']);
        Route::post('update-sembako/{id}', [SembakoController::class, 'update']);
        Route::post('delete-sembako/{id}', [SembakoController::class, 'delete']);
        
        Route::get('transaksi-sampah', [TransaksiSampahController::class, 'index'])->name('admin.transaksi-sampah');
        Route::get('detail-sampah/{id}', [TransaksiSampahController::class, 'edit']);
        Route::post('detail-sampah/{id}', [TransaksiSampahController::class, 'update']);
        Route::post('delete-transaksi-sampah/{id}', [TransaksiSampahController::class, 'delete']);

        Route::get('transaksi-sembako', [TransaksiSembakoController::class, 'index'])->name('admin.transaksi-sembako');
        Route::get('detail-sembako/{id}', [TransaksiSembakoController::class, 'edit']);
        Route::post('detail-sembako/{id}', [TransaksiSembakoController::class, 'update']);
        Route::post('delete-transaksi-sembako/{id}', [TransaksiSembakoController::class, 'delete']);
    });

    // route logout
    Route::post('logout', LogoutController::class)->name('logout');
});