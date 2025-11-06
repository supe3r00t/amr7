<?php

use App\Http\Controllers\{
    PageController,
    ServiceController,
    ContactController,
    AiController
};

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/ai', [AiController::class, 'index'])->name('ai');
Route::post('/ai/suggest', [AiController::class, 'suggest'])->name('ai.suggest');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
