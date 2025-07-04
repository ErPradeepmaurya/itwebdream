<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\FreeCommaController;


Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('free-comma-separator-tool', [FreeCommaController::class, 'FreeCommaController'])->name('FreeComma.freecommatool');

Route::get('/check-db', function () {
    dd(env('DB_HOST'), env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'));
});
