<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AttendenceControllerr;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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
// Add Student //
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
// Show Stundets In Table //
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.view');
// Route::get('/StudentsAll', [StudentController::class, 'StudentsAll'])->name('StudentsAll');
Route::get('/StudentView/{id}', [StudentController::class, 'StudentView'])->name('StudentView');
Route::get('/EditStudent/{id}', [StudentController::class, 'EditStudent'])->name('EditStudent');
Route::PUT('/UpdateStudent/{id}', [StudentController::class, 'update'])->name('UpdateStudent');
Route::delete('/DeleteStudent/{id}', [StudentController::class, 'DeleteStudent'])->name('DeleteStudent');
Route::get('/AddStudents', [StudentController::class, 'AddStudents'])->name('AddStudents');


// Class Route //
Route::get('class', [ClassController::class, 'index'])->name('class');


// Subject  Route//


Route::get('/parents', [ParentController::class, 'index'])->name('parents');

// Teachers Route
Route::get('/teacher', [TeachersController::class, 'index'])->name('teachers');
Route::get('/teacherview/{id}', [TeachersController::class, 'teacherview'])->name('teachersview');
Route::get('/addteacher', [TeachersController::class, 'addteacher'])->name('Addteacher');
Route::post('/teacheradd', [TeachersController::class, 'teacherstore'])->name('storeteacher');
Route::get('/editteacher/{id}', [TeachersController::class, 'editteacher'])->name('editteacher');
Route::put('/updateTeacher/{id}', [TeachersController::class, 'updateTeacher'])->name('updateTeacher');
Route::delete('/teacherdelete/{id}',[TeachersController::class,'teacherdelete'])->name('teacherdelete');
//Routes //
Route::get('/att', [AttendenceControllerr::class, 'index'])->name('att');
