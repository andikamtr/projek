<?php

use App\Http\Controllers\authLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\CpenerimaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenilaianController;
use App\Models\Kriteria;

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

Route::get('/', [authLogin::class, 'index']);
Route::post('/login', [authLogin::class, 'authLogin']);
Route::post('/logout', [authLogin::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/calon-penerima', [CpenerimaController::class, 'index']);
Route::post('/calon-penerima/tambah', [CpenerimaController::class, 'tambah']);
Route::get('/calon-penerima/{nik}/hapus', [CpenerimaController::class, 'hapus']);
Route::get('/calon-penerima/{nik}/edit', [CpenerimaController::class, 'edit']);
Route::put('/calon-penerima/update', [CpenerimaController::class, 'update']);

Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::get('/kriteria/{nik}/edit', [KriteriaController::class, 'edit']);
Route::put('/kriteria/update', [KriteriaController::class, 'update']);
Route::get('/penilaian', [PenilaianController::class, 'index']);
