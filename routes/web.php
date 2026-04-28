<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', [AppController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
Route::get('/AddNew', [AddController::class, 'AddNew'])->name('AddNew');
// Students Route
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/AddStudents', [StudentController::class, 'AddStudents'])->name('AddStudents');
Route::get('/StudentsAll', [StudentController::class, 'StudentsAll'])->name('StudentsAll');
Route::get('/StudentView/{id}', [StudentController::class, 'StudentView'])->name('StudentView');
Route::get('/EditStudent', [StudentController::class, 'EditStudent'])->name('EditStudent');
// Add Student //
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');

// Show Stundets In Table //
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.view');

Route::get('/parents', [ParentController::class, 'index'])->name('parents');

// Teachers Route
Route::get('/teacher', [TeachersController::class, 'index'])->name('teachers');
Route::get('/teacherview', [TeachersController::class, 'teacherview'])->name('teachersview');
Route::get('/addteacher', [TeachersController::class, 'addteacher'])->name('addteacher');
Route::get('/editteacher', [TeachersController::class, 'editteacher'])->name('editteacher');
