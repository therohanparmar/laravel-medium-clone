<?php

use App\Http\Controllers\ClapController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/@{user:username}', [PublicProfileController::class, 'show'])->name('profile.show');
Route::get('/', [PostController::class, 'index'])->name('dashboard');
Route::get('/@{username}/{post:slug}', [PostController::class, 'show'])->name('post.show');
Route::get('/category/{category}',[PostController::class, 'category'])->name('post.byCategory');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::post('/follow/{user}', [FollowerController::class, 'handleFollowUnfollow'])->name('follow');
    Route::post('/clap/{post}', [ClapController::class, 'clap'])->name('clap');
    Route::get('/my-posts', [PostController::class, 'myPosts'])->name('myPosts');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
    Route::get('/post/{post:slug}', [PostController::class, 'edit'])->name('post.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
