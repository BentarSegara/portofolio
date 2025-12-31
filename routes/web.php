<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::prefix('project')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('project');
    Route::get('/show/{id}', [ProjectController::class, 'show'])->name('project_detail');
});
