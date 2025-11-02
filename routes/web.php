<?php

use App\Http\Resources\QuestionsResource;
use App\Models\Questions;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $questions = QuestionsResource::collection(
        Questions::with('user')->latest()->paginate(15)
    );

    // return $questions;
    return inertia('Questions/Index', [
            'questions' => $questions
    ]);
})->name('questions.index');

Route::get('/question/{id}', function ($id) {
    return inertia('Questions/Show', [
        'question' => ['id', $id, 'title' => 'Question ' . $id]
    ]);
})->name('questions.show');
