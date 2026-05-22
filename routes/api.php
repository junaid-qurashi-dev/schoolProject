<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Login Route
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    // Students API
    Route::get('/student/{id?}', [StudentController::class, 'list']);
    Route::post('/add', [StudentController::class, 'store']);
    Route::put('/studentupdate/{id}', [StudentController::class, 'update']);
    Route::delete('/delete/{id}', [StudentController::class, 'delete']);
    // Logout//
    Route::post('/logout', [AuthController::class, 'logout']);
});


// Teachers API
Route::get('/teacher', [TeacherController::class, 'list']);
Route::post('/addteacher', [TeacherController::class, 'store']);
Route::put('/teacherupdate/{id}', [TeacherController::class, 'update']);
Route::delete('/teacherdelete/{id}', [TeacherController::class, 'delete']);
Route::delete('/teacherdelete/{id}', [TeacherController::class, 'delete']);
Route::delete('/teacherdelete/{id}', [TeacherController::class, 'delete']);
