<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', [AppController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/parents', [ParentsController::class, 'index'])->name('parents');
Route::get('/teacher', [TeachersController::class, 'index'])->name('teachers');
