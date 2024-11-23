<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\FishTestingController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::controller(FishController::class)->group(function () {
    Route::get('/fish', 'index')->name('fish');
    Route::post('/fish/store', 'store')->name('fish.store');
    Route::get('/fish/destroy/{id}', 'destroy')->name('fish.destroy');
    Route::get('/fish/edit/{id}', 'edit')->name('fish.edit');
    Route::put('/fish/update', 'update')->name('fish.update');
});

Route::controller(FishTestingController::class)->group(function () {
    Route::get('/fish-test', 'index')->name('fish-test');
    Route::post('/fish-test/store', 'store')->name('fish-test.store');
    Route::get('/fish-test/destroy/{id}', 'destroy')->name('fish-test.destroy');
    Route::get('/fish-test/edit/{id}', 'edit')->name('fish-test.edit');
    Route::put('/fish-test/update', 'update')->name('fish-test.update');
});
Route::get('/calculation', [CalculationController::class, 'index'])->name('calculation');
