<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KerusakanController;

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
Route::group(['middleware' => ['guest']], function () {
    // Login
    Route::get('/', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'authLogin']);
    // Register
    Route::get('/registrasi', [AuthController::class, 'register']);
    Route::post('/registrasi', [AuthController::class, 'authRegister']);
});
// Logout
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::group(['middleware' => ['auth', 'ceklevel:2']], function () {
    // Kerusakan
    Route::get('/kerusakan', [KerusakanController::class, 'index']);
    Route::get('/kerusakan/{id}/edit', [KerusakanController::class, 'edit']);
    Route::get('/kerusakan/{id}/hapus', [KerusakanController::class, 'hapus']);
    Route::put('/kerusakan/update', [KerusakanController::class, 'update']);
    Route::post('/kerusakan/tambah', [KerusakanController::class, 'tambah']);
    // Gejala
    Route::get('/gejala', [GejalaController::class, 'index']);
    Route::get('/gejala/{id}/edit', [GejalaController::class, 'edit']);
    Route::get('/gejala/{id}/hapus', [GejalaController::class, 'hapus']);
    Route::put('/gejala/update', [GejalaController::class, 'update']);
    Route::post('/gejala/tambah', [GejalaController::class, 'tambah']);
    // Rule
    Route::get('/rule', [RuleController::class, 'index']);
    Route::get('/rule/{id}/edit', [RuleController::class, 'edit']);
    Route::get('/rule/{id}/hapus', [RuleController::class, 'hapus']);
    Route::put('/rule/update', [RuleController::class, 'update']);
    Route::post('/rule/tambah', [RuleController::class, 'tambah']);
});
Route::group(['middleware' => ['auth', 'ceklevel:1']], function () {
    // Diagnosa
    Route::get('/diagnosa', [DiagnosaController::class, 'index']);
    Route::post('/diagnosa', [DiagnosaController::class, 'fc']);
});
