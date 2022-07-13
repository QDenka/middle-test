<?php

use App\Http\Controllers\Manager\NewsManageController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('manager')->group(function() {
    Route::get('/', function() {
        return redirect(route('news.index'));
    });
    Route::resource('/news', NewsManageController::class);
});
