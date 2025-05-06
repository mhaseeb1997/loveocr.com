<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OcrController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');
Route::get('blogs', function () {
    return view('frontend.pages.blogs');
})->name('blogs');

Route::get('blog/blog-detail', function () {
    return view('frontend.pages.blog-detail');
})->name('blog-detail');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ocr', [OcrController::class, 'index'])->name('ocr.index');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
