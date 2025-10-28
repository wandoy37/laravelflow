<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('Questions/Index', [
            'questions' => [
                ['id' => 1, 'title' => 'Questions 1'],
                ['id' => 2, 'title' => 'Questions 2'],
            ]
    ]);
});
