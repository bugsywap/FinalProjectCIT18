<?php

use App\Http\Controllers\CapstoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cms' , [CapstoneController::class, 'index']);