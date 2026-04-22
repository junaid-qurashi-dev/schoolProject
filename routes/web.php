<?php

use App\Http\Controllers\AddController;
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
Route::get('/AddNew', [AddController::class, 'AddNew'])->name('AddNew');
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/StudentsAll', [StudentController::class, 'StudentsAll'])->name('StudentsAll');
Route::get('/StudentsTab', [StudentController::class, 'StudentsTab'])->name('StudentsTab');
Route::get('/parents', [ParentsController::class, 'index'])->name('parents');
Route::get('/teacher', [TeachersController::class, 'index'])->name('teachers');
