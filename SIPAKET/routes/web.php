<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;

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
// Auth
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/authLogin', [LoginController::class, 'authLogin']);
Route::post('/authRegister', [LoginController::class, 'authRegister']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/hasil-kriteria', [kriteriaController::class, 'h_kriteria'])->middleware('auth');
Route::post('/hasil-kriteria', [kriteriaController::class, 'tb_kriteria'])->middleware('auth');
Route::get('/data-kriteria', [kriteriaController::class, 'index'])->middleware('auth');
