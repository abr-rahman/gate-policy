<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gate', [AuthorizationController::class, 'index'])->name('gate.index');
Route::get('/home/post', [PostController::class, 'index'])->name('post.index');
Route::get('/home/post/show/{post}', [PostController::class, 'show'])->name('post.show');
// ->middleware('can:view,post');
Route::get('/home/post/create',[PostController::class, 'create'])->name('post.create');
Route::post('/home/post/store',[PostController::class, 'store'])->name('post.store');
Route::post('/home/post/delete/{id}',[PostController::class, 'delete'])->name('post.delete');
