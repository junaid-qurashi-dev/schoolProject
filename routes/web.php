<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ParentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
    // Students Route
    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.view');
    Route::get('/StudentView/{id}', [StudentController::class, 'StudentView'])->name('StudentView');
    Route::get('/EditStudent/{id}', [StudentController::class, 'EditStudent'])->name('EditStudent');
    Route::PUT('/UpdateStudent/{id}', [StudentController::class, 'update'])->name('UpdateStudent');
    Route::delete('/DeleteStudent/{id}', [StudentController::class, 'DeleteStudent'])->name('DeleteStudent');
    Route::get('/AddStudents', [StudentController::class, 'AddStudents'])->name('AddStudents');

    // Teachers Route
    Route::get('/teacher', [TeachersController::class, 'index'])->name('teachers');
    Route::get('/teacherview/{id}', [TeachersController::class, 'teacherview'])->name('teachersview');
    Route::get('/addteacher', [TeachersController::class, 'addteacher'])->name('Addteacher');
    Route::post('/teacheradd', [TeachersController::class, 'teacherstore'])->name('storeteacher');
    Route::get('/editteacher/{id}', [TeachersController::class, 'editteacher'])->name('editteacher');
    Route::put('/updateTeacher/{id}', [TeachersController::class, 'updateTeacher'])->name('updateTeacher');
    Route::delete('/teacherdelete/{id}', [TeachersController::class, 'teacherdelete'])->name('teacherdelete');

    // Parents Route
    Route::get('/parents', [ParentController::class, 'index'])->name('parents');

    // Logout Route //
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])
        ->name('logout');

    // Fess Route //
   Route::get('/fees',[FeeController::class,'index'])->name('fees.index');
});

require __DIR__ . '/auth.php';
