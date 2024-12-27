<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::resource( 'articles',ArticlesController::class);

Route::put('/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');

Route::get('/', function () {
    return view('welcome');
});
