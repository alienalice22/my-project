<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('articles-create', [ArticlesController::class, 'create'])->name('articles.create');

Route::middleware(['admin'])->group(function () {
    Route::resource('articles', ArticlesController::class)->except(['index', 'show', 'create']);
    Route::put('/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');
    
    Route::get('/admin', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin', [AdminController::class, 'update'])->name('admin.update');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/register', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
