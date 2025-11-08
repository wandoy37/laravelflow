<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuestionController::class, 'index'])->name('questions.index');

Route::get('/question/{question:slug}', [QuestionController::class, 'show'])->name('questions.show');

Route::resource('/questions', QuestionController::class)->except(['index', 'show'])->middleware('auth');
