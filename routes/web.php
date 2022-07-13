<?php

use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Роутинг новостей
Route::get('/', [NewsController::class, 'index'])->name('home.news');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('home.news.show');

Auth::routes();
