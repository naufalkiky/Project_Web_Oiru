<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SembakoController;
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
Route::get('tukar-sampah', [TukarSampahController::class, 'index']);
Route::get('tukar-sembako', [TukarSembakoController::class, 'index']);

Route::get('register', [RegisterController::class, 'create']);

Route::get('login', [LoginController::class, 'create']);

Route::get('admin', [AdminDashboardController::class, 'index']);

Route::get('sembako', [SembakoController::class, 'index']);
Route::get('sembako/tambah-sembako', [SembakoController::class, 'create']);