<?php

use Illuminate\Support\Facades\Route;


Route::get('/posts',[\App\Http\Controllers\PostController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
