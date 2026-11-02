<?php

<<<<<<< HEAD
use App\Http\Controllers\MemberController;
Route::resource('members', MemberController::class);
=======
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
>>>>>>> origin/fitur/anggota-b
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('members', MemberController::class);