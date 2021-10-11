<?php

use Inertia\Inertia;
use App\Http\Controllers\UsersController;

Route::middleware(['auth'])->group(function () {
    // sleep(1);
    Route::resource('users', UsersController::class);
});
