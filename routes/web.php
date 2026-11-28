<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Protected (Wajib Login: Admin & Petugas)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        $totalTitles = Book::count();
        $totalStock = Book::sum('stock');
        $totalMembers = Member::count();
        $activeBorrowings = Borrowing::where('status', 'borrowed')->count();

        return view('dashboard', compact(
            'totalTitles',
            'totalStock',
            'totalMembers',
            'activeBorrowings'
        ));
    })->name('dashboard');

    // Khusus Admin: Kelola User & Kelola (Tambah/Edit/Hapus) Kategori
    Route::middleware('role:admin')->group(function () {
        Route::resource('users', UserController::class)->except(['show']);
        Route::resource('categories', CategoryController::class)->except(['index', 'show']);
    });

    // Admin & Petugas: Lihat Kategori, Kelola Buku, Kelola Anggota
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::resource('books', BookController::class);
    Route::resource('members', MemberController::class);
});