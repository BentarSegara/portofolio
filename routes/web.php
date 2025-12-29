<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('project')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('project');
    Route::get('/show', [ProjectController::class, 'show'])->name('project_detail');
});
