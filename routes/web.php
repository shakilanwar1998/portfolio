<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/work', [PortfolioController::class, 'work'])->name('work');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/project/{id}', [PortfolioController::class, 'projectDetails'])->name('project.details');
