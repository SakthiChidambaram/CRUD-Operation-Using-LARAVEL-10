<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'create']);
Route::POST('/create_student',[StudentController::class,'store']);
Route::get('/list',[StudentController::class,'list']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::post('/update/{id}',[StudentController::class,'update']);
Route::get('/delete/{id}',[StudentController::class,'delete']);
