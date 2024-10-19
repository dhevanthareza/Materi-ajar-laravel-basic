<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloController::class, 'hello']);

Route::get('/hello', [HelloController::class, 'helloWithName']);
