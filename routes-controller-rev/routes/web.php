<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

Route::get('/', function () {
    return view('welcome');
});

// static route
Route::get('/static', [SampleController::class, 'static']);

// dynamic route
Route::get('/dynamic/{name}', [SampleController::class, 'dynamic']);

// multiple route parameters
Route::get('/multiple/{category}/{id}', [SampleController::class, 'multiple']);

// optional route parameter
Route::get('/optional/{name?}', [SampleController::class, 'optional']);

// conditional route
Route::get('/conditional/{age}', [SampleController::class, 'conditional']);

// dynamic route + array
Route::get('/array/{section}', [SampleController::class, 'array']);