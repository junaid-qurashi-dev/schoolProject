<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
use Illuminate\Support\Facades\Route;

// Students API
Route::get('/student', [StudentController::class, 'list']);
Route::post('/add', [StudentController::class, 'store']);
Route::put('/studentupdate/{id}', [StudentController::class, 'update']);
Route::delete('/delete/{id}', [StudentController::class, 'delete']);

// Teachers API
Route::get('/teacher', [TeacherController::class, 'list']);
Route::post('/addteacher', [TeacherController::class, 'store']);
Route::put('/teacherupdate/{id}',[TeacherController::class,'update']);
Route::delete('/teacherdelete/{id}',[TeacherController::class,'delete']);
