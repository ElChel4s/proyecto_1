<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WorkController;

// Rutas para el frontend
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('contact', [ContactController::class, 'send'])->name('contact.send');
Route::resource('blog', BlogController::class);
Route::resource('photos', PhotoController::class);
Route::resource('works', WorkController::class);

// Rutas para el backend
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('contacts', [AdminController::class, 'showContacts'])->name('admin.contacts');
});
