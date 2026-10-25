<?php

use App\Http\Controllers\MemberController;
Route::resource('members', MemberController::class);
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
