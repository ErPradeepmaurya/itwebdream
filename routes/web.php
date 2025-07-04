<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\FreeCommaController;


Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('free-comma-separator-tool', [FreeCommaController::class, 'FreeCommaController'])->name('FreeComma.freecommatool');
