<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\FreeCommaController;


Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('terms-conditions', [MainController::class, 'termsconditions'])->name('terms-conditions');
Route::get('privacy-policy', [MainController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('faq', [MainController::class, 'faq'])->name('faq');
Route::get('about-us', [MainController::class, 'aboutus'])->name('aboutus');
Route::get('custom-doftware-development', [MainController::class, 'webdevelopment'])->name('web-development');
Route::get('sitemap.xml', [MainController::class, 'sitemap'])->name('sitemap');

Route::get('free-comma-separator-tool', [FreeCommaController::class, 'FreeCommaController'])->name('FreeComma.freecommatool');

// Route::get('/check-db', function () {
//     dd(env('DB_HOST'), env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'));
// });
