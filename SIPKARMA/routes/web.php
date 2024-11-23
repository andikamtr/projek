<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Sub_KriteriaController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authLogin']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'register']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/data-kriteria', [KriteriaController::class, 'index']);
    Route::post('/data-kriteria', [KriteriaController::class, 't_kriteria']);
    Route::get('/hasil-kriteria', [KriteriaController::class, 'h_kriteria']);

    Route::get('/data-sub-kriteria', [Sub_KriteriaController::class, 'index']);
    Route::post('/sub-kriteria', [Sub_KriteriaController::class, 't_subkriteria']);
    Route::get('/hasil-sub-kriteria', [Sub_KriteriaController::class, 'h_subkriteria']);

    Route::get('/data-bobot', [BobotController::class, 'index']);
    Route::post('/data-bobot', [BobotController::class, 't_bobot']);
    Route::get('/hasil-bobot', [BobotController::class, 'h_bobot']);

    Route::get('/data-karyawan', [KaryawanController::class, 'index']);
    Route::post('/data-karyawan', [KaryawanController::class, 't_karyawan']);
});
