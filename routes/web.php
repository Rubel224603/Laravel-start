<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class,'index']);

Route::get('/about', [WelcomeController::class,'about']);

Route::get('/contact-us', [WelcomeController::class,'contact']);
Route::get('/portfolio', [WelcomeController::class,'portfolio']);


