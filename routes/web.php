<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/hello', [HelloController::class, 'helloWithName']);

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::prefix('admin')->group(function () {
    Route::get('/post', [AdminPostController::class, 'index']);
    Route::get('/post/create', [AdminPostController::class, 'create']);
    Route::post('/post', [AdminPostController::class, 'store']);
    Route::get('/post/{id}/edit', [AdminPostController::class, 'edit']);
    Route::post('/post/{id}', [AdminPostController::class, 'update']);
    Route::delete('/post/{id}', [AdminPostController::class, 'delete']);
});
