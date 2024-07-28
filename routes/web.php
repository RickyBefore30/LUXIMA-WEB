<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/gallery', [SiteController::class, 'gallery'])->name('gallery');
Route::get('/packages', [SiteController::class, 'packages'])->name('packages');
Route::get('/how-it-work', [SiteController::class, 'howItWork'])->name('howItWork');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/sidebarRigth', [SiteController::class, 'sidebarRigth'])->name('sidebarRigth');
Route::get('/sidebarLeft', [SiteController::class, 'sidebarLeft'])->name('sidebarLeft');
Route::get('/shop', [SiteController::class, 'shop'])->name('shop');
Route::get('/listing', [SiteController::class, 'listing'])->name('listing');
Route::get('/listingMaps', [SiteController::class, 'listingMaps'])->name('listingMaps');
Route::get('/listingList', [SiteController::class, 'listingList'])->name('listingList');