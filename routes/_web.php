<?php

use Inertia\Inertia;
use App\Http\Controllers\UsersController;

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UsersController::class);
});
