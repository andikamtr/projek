<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\NutrisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengetahuanController;

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

Route::get('/', [DashboardController::class, 'index']);
// Gejala
Route::get('/gejala', [GejalaController::class, 'index']);
Route::post('/gejala', [GejalaController::class, 'tambah']);
Route::get('/gejala/{id}/hapus', [GejalaController::class, 'hapus']);
// Nutrisi
Route::get('/nutrisi', [NutrisiController::class, 'index']);
Route::post('/nutrisi', [NutrisiController::class, 'tambah']);
Route::get('/nutrisi/{id}/hapus', [NutrisiController::class, 'hapus']);
// Basis Pengetahuan
Route::get('/pengetahuan', [PengetahuanController::class, 'index']);
Route::post('/pengetahuan', [PengetahuanController::class, 'tambah']);
Route::get('/pengetahuan/{id}/hapus', [PengetahuanController::class, 'hapus']);
