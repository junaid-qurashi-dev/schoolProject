<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return ["name" => "Anil SIdhu", "Chnnel" => "Code Step By Step"];
// });

Route::get('/student', [StudentController::class, 'list']);
Route::post('/add', [StudentController::class, 'store']);
Route::put('/studentupdate/{id}', [StudentController::class, 'update']);
Route::delete('/delete/{id}', [StudentController::class, 'delete']);
