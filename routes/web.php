<?php

use App\Http\Controllers\StartUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cms' , [StartUpController::class, 'index'])->name('CMS.index');
Route::get('/cms/insertStartup' , [StartUpController::class, 'insertView'])->name('CMS.insertView');
Route::post('/cms' , [StartUpController::class, 'insert'])->name('CMS.insert');
Route::get('/cms/{startup}/edit' , [StartUpController::class, 'edit'])->name('CMS.edit');
Route::put('/cms/{startup}/update' , [StartUpController::class, 'update'])->name('CMS.update');
Route::get('/cms/{startup}/delete' , [StartUpController::class, 'delete'])->name('CMS.delete');