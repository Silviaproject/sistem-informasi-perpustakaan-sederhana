<?php

use App\Http\Controllers\AuthController;
<<<<<<< HEAD
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
=======
>>>>>>> origin/main
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Protected (Wajib Login)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // === ROUTE ANGGOTA A ===
    Route::middleware('role:admin')->group(function () {
        Route::resource('users', UserController::class)->except(['show']);
    });
    Route::resource('members', MemberController::class);

    // === ROUTE ANGGOTA B ===
    Route::middleware('role:admin')->group(function () {
        Route::resource('categories', CategoryController::class)->except(['index', 'show']);
        Route::resource('books', BookController::class)->except(['index', 'show']);
    });
    Route::resource('categories', CategoryController::class)->only(['index']);
    Route::resource('books', BookController::class)->only(['index']);

    // === ROUTE ANGGOTA C ===

});