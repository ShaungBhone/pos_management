<?php

use Inertia\Inertia;
use App\Http\Controllers\UsersController;

Route::get('users', [UsersController::class, 'index'])
    ->name('users')
    ->middleware('auth');
