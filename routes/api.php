<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiKeyMiddleware;
Use App\Http\Controllers\LocationController;

Route::middleware([ApiKeyMiddleware::class])->group(function () {
    Route::get('/locations', [LocationController::class, 'index']);
});