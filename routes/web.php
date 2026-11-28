<?php

<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
=======
>>>>>>> origin/fitur/anggota-c
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

<<<<<<< HEAD
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


    // === ROUTE ANGGOTA C ===

});
=======
Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('members', MemberController::class);
>>>>>>> origin/fitur/anggota-c
