<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('frontend.')->group(function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::get('/book', [FrontendController::class, 'bookDetail'])->name('book.detail');
    Route::get('/category', [FrontendController::class, 'categoryDetail'])->name('category.detail');

    Route::get('/success', [FrontendController::class, 'success'])->name('success');
    Route::get('/profile', [FrontendController::class, 'profile'])->name('profile');
    Route::get('/publishers', [FrontendController::class, 'publishers'])->name('publishers');
    Route::get('/publisher', [FrontendController::class, 'publisherDetail'])->name('publisher.detail');
    Route::get('/events', [FrontendController::class, 'events'])->name('events');
    Route::get('/event', [FrontendController::class, 'eventDetail'])->name('event.detail');
    Route::get('/authors', [FrontendController::class, 'authors'])->name('authors');
    Route::get('/author', [FrontendController::class, 'authorDetail'])->name('author.detail');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
