<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\FreeCommaController;


Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('welcome2', [MainController::class, 'index2'])->name('welcome2');
Route::get('terms-conditions', [MainController::class, 'termsconditions'])->name('terms-conditions');
Route::get('privacy-policy', [MainController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('faq', [MainController::class, 'faq'])->name('faq');
Route::get('about-us', [MainController::class, 'aboutus'])->name('aboutus');
Route::get('custom-sdoftware-development', [MainController::class, 'customwebdevelopment'])->name('custome-web-development');
Route::get('website-development', [MainController::class, 'webdevelopment'])->name('web-development');
Route::get('app-development', [MainController::class, 'appdevelopment'])->name('app-development');
Route::get('UI-UX-Design', [MainController::class, 'uiuxdesign'])->name('uiux-design');
Route::get('comming-soon', [MainController::class, 'commingsoon'])->name('comming-soon');
Route::get('technology', [MainController::class, 'technology'])->name('technology');
Route::get('contact-us', [MainController::class, 'contactus'])->name('contact-us');




Route::get('sitemap.xml', [MainController::class, 'sitemap'])->name('sitemap');

// Route::get('free-comma-separator-tool', [FreeCommaController::class, 'FreeCommaController'])->name('FreeComma.freecommatool');
Route::get('/free-comma-separator-tool', [FreeCommaController::class, 'FreeCommaController'])->name('FreeComma.freecommatool');
Route::post('/process', [FreeCommaController::class, 'process'])->name('process');

// Route::get('/check-db', function () {
//     dd(env('DB_HOST'), env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'));
// });
