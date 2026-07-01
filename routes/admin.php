<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return 'Admin Dashboard';
// })->name('dashboard'); // এটি 'admin.dashboard' হিসেবে কল হবে

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::resource('categories', CategoryController::class);
