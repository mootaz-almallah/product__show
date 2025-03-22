<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts;

Route::get('/e', function () {
    return view('welcome');
});
Route::get('/posts', [Posts::class, 'index'])->name('posts.index');
Route::get('/insert', [Posts::class, 'insert'])->name('posts.insert');
