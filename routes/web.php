<?php

use App\Http\Controllers\{
    PageController,
    ServiceController,
    ContactController,
    AiController
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/ai', [AiController::class, 'index'])->name('ai');
Route::post('/ai/suggest', [AiController::class, 'suggest'])->name('ai.suggest');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return back();
})->name('lang.switch');
