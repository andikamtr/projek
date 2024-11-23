<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Login
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authLogin']);
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
Route::get('/mahasiswa/{nim}/hapus', [MahasiswaController::class, 'hapus']);
Route::get('/mahasiswa/{nim}/edit', [MahasiswaController::class, 'edit']);
// Pengelompokan KKN
Route::get('/kelompok', [KelompokController::class, 'index']);
