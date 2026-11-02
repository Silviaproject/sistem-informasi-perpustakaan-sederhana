<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('members', MemberController::class);