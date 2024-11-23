<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authLogin']);
Route::post('/logout', [AuthController::class, 'logout']);
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Data Siswa
Route::get('/data-siswa', [SiswaController::class, 'index']);
Route::post('/data-siswa/tambah', [SiswaController::class, 'tambah']);
Route::get('/data-siswa/{id}/hapus', [SiswaController::class, 'hapus']);
Route::get('/data-siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::put('/data-siswa/update', [SiswaController::class, 'update']);
// Data Siswa
Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::post('/kriteria/tambah', [KriteriaController::class, 'tambah']);
Route::get('/kriteria/{id}/hapus', [KriteriaController::class, 'hapus']);
Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit']);
Route::put('/kriteria/update', [KriteriaController::class, 'update']);
// Perhitungan
Route::get('/perhitungan', [PerhitunganController::class, 'index']);
