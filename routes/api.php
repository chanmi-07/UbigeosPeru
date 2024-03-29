<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvinceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{codes}', [DepartmentController::class, 'showMultiple'])->name('departments.showMultiple');

// Provinces
Route::get('/provinces', [ProvinceController::class, 'index'])->name('provinces.index');
Route::get('/provinces/{codes}', [ProvinceController::class, 'showMultiple'])->name('provinces.showMultiple');

// Districts
Route::get('/districts', [DistrictController::class, 'index'])->name('districts.index');
Route::get('/districts/{codes}', [DistrictController::class, 'showMultiple'])->name('districts.showMultiple');