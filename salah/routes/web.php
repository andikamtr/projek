<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\SolusiController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Middleware\CekLevel;
use Illuminate\Routing\RouteGroup;

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
//Authentication
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/registrasi', [AuthController::class, 'register']);
    Route::post('/registrasi', [AuthController::class, 'authRegister']);
    Route::post('/login', [AuthController::class, 'authLogin']);
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout']);
Route::group(['middleware' => ['auth', 'ceklevel:2']], function () {
    //Pertanyaan
    Route::get('/pertanyaan', [PertanyaanController::class, 'index']);
    Route::post('/pertanyaan', [PertanyaanController::class, 'tambah']);
    Route::get('/pertanyaan/hapus/{id}', [PertanyaanController::class, 'hapus']);
    Route::get('/pertanyaan/{id}/edit', [PertanyaanController::class, 'edit']);
    Route::put('/pertanyaan/{id}', [PertanyaanController::class, 'update']);
    // Gejala
    Route::get('/gejala', [GejalaController::class, 'index']);
    Route::post('/gejala', [GejalaController::class, 'tambah']);
    Route::get('/gejala/hapus/{id}', [GejalaController::class, 'hapus']);
    Route::get('/gejala/{id}/edit', [GejalaController::class, 'edit']);
    Route::put('/gejala/{id}', [GejalaController::class, 'update']);
    //Solusi
    Route::get('/solusi', [SolusiController::class, 'index']);
    Route::post('/solusi', [SolusiController::class, 'tambah']);
    Route::get('/solusi/hapus/{id}', [SolusiController::class, 'hapus']);
    Route::get('/solusi/{id}/edit', [SolusiController::class, 'edit']);
    Route::put('/solusi/{id}', [SolusiController::class, 'update']);
});
Route::group(['middleware' => ['auth', 'ceklevel:1']], function () {
    //Diagnosa Kerusakan
    Route::get('/diagnosa', [DiagnosaController::class, 'index']);
});
