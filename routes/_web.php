<?php

use Inertia\Inertia;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UsersController::class);
    Route::resource('products', ProductController::class);
});
