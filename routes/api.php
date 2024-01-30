<?php

use App\Http\Controllers\DepartmentController;
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
// Departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{codes}', [DepartmentController::class, 'showMultiple'])->name('departments.showMultiple');
// Provinces
Route::get('/provinces', [ProvinceController::class, 'index'])->name('provinces.index');
Route::get('/provinces/{codes}', [ProvinceController::class, 'showMultiple'])->name('provinces.showMultiple');