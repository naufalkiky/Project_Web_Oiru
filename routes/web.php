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
use App\Http\Controllers\TukarSampahController;
use App\Http\Controllers\TukarSembakoController;
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

Route::get('penukaran-sembako', [PenukaranSembakoController::class, 'create'])->name('penukaran-sembako');
Route::get('penukaran-sembako/search', [PenukaranSembakoController::class, 'search']);

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

    // route user
    Route::get('user/dashboard/{id}', [UserDashboardController::class, 'index'])->name('user');
    Route::post('user/dashboard/{id}', [UserDashboardController::class, 'update'])->name('user');

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
        Route::get('update-sampah/{id}', [TransaksiSampahController::class, 'edit']);
        
        Route::get('transaksi-sembako', [TransaksiSembakoController::class, 'index'])->name('admin.transaksi-sembako');
    });

    // route logout
    Route::post('logout', LogoutController::class)->name('logout');
});