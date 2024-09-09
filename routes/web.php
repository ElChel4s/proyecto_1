<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WorkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/

// Cambiar la página de inicio a 'layouts.app'
Route::get('/', function () {
    return view('inicio.inicio');
})->name('home');
Route::get('/inicio', function () {
    return view('inicio.inicio');
});

// Rutas para el blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Rutas para fotos
Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
Route::get('/photos/{id}', [PhotoController::class, 'show'])->name('photos.show');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/photos/create', [PhotoController::class, 'create'])->name('photos.create');
    Route::post('/photos', [PhotoController::class, 'store'])->name('photos.store');
    Route::get('/photos/{id}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
    Route::put('/photos/{id}', [PhotoController::class, 'update'])->name('photos.update');
    Route::delete('/photos/{id}', [PhotoController::class, 'destroy'])->name('photos.destroy');
});

// Rutas para trabajos
Route::get('/works', [WorkController::class, 'index'])->name('works.index');
Route::get('/works/{id}', [WorkController::class, 'show'])->name('works.show');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/works/create', [WorkController::class, 'create'])->name('works.create');
    Route::post('/works', [WorkController::class, 'store'])->name('works.store');
    Route::get('/works/{id}/edit', [WorkController::class, 'edit'])->name('works.edit');
    Route::put('/works/{id}', [WorkController::class, 'update'])->name('works.update');
    Route::delete('/works/{id}', [WorkController::class, 'destroy'])->name('works.destroy');
});

// Rutas para contacto
Route::get('/emails', [ContactController::class, 'show'])->name('emails.contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Rutas de administración
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/contacts', [AdminController::class, 'showContacts'])->name('admin.contacts');
});
