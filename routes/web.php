<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenukaranSampahController;
use App\Http\Controllers\PenukaranSembakoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\TransaksiSampahController;
use App\Http\Controllers\TransaksiSembakoController;
use App\Http\Controllers\TukarSampahController;
use App\Http\Controllers\TukarSembakoController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('tentang-kami', [HomeController::class, 'about']);

Route::group(['prefix' => 'penukaran'], function() {
    Route::get('sampah', [PenukaranSampahController::class, 'create'])->name('penukaran.sampah')->middleware('auth');
    Route::get('sembako', [PenukaranSembakoController::class, 'create'])->name('penukaran.sembako');
});

Route::middleware('guest')->group(function() {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register');

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin');
    Route::get('data-sembako', [SembakoController::class, 'index'])->name('admin.data-sembako');
    Route::get('transaksi-sampah', [TransaksiSampahController::class, 'index'])->name('admin.transaksi-sampah');
    Route::get('transaksi-sembako', [TransaksiSembakoController::class, 'index'])->name('admin.transaksi-sembako');
});
