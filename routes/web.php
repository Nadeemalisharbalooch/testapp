<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return "now here successfull data comming from database";
});
Route::get('Create',[PostController::class,'store'])->name('create');
Route::get('uploadfile',[PostController::class,'index'])->name('upload');
Route::post('upload',[PostController::class,'upload']);
Route::get('showimage/{id}',[PostController::class,'showimage']);
// Route::get('test',[PostController::class,'test']);
Route::get('justTest',[PostController::class,'index']);
Route::get('join',[PostController::class,'show']);
Auth::routes();
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('factory',[PostController::class,'test']);