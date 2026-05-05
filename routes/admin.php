<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return 'Admin Dashboard';
})->name('dashboard'); // এটি 'admin.dashboard' হিসেবে কল হবে
