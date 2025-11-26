<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('addDeta', [ProductController::class, 'addDeta']);
Route::get('ReadAll', [ProductController::class, 'ReadAll']);
Route::get('filterRead', [ProductController::class, 'filterRead']);
Route::get('if', [ProductController::class, 'if']);
Route::get('finde', [ProductController::class, 'finde']);
Route::get('updateData', [ProductController::class, 'update']);
Route::get('fetchData' , [StudentController::class , 'fetchData']);