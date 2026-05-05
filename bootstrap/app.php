<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web', 'auth']) // এখানে আপনার প্রয়োজন অনুযায়ী মিডলওয়্যার দিতে পারেন
                ->prefix('admin') // URL এর শুরুতে 'admin' থাকবে (যেমন: domain.com/admin/dashboard)
                ->name('admin.') // রাউটের নামের শুরুতে 'admin.' থাকবে (যেমন: route('admin.dashboard'))
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
