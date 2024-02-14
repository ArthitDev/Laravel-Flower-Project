<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;






Route::get('/', [HomeController::class, 'Home'])->name('Homepage'); //ส่วนนี้สำคัญ
Route::get('/flower', [ListController::class, 'List'])->name('flower-list'); //ส่วนนี้สำคัญ


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/flower', function () {
//     return view('flower-list');
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
});

require __DIR__ . '/auth.php';
