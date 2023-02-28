<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[PostController::class, 'index'])->name('posts');
Route::get('posts/create',[PostController::class, 'create'])->name('posts.create');
Route::post('posts/store',[PostController::class, 'store'])->name('posts.store');
Route::get('posts/edit/{id}',[PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/update/{id}',[PostController::class, 'update'])->name('posts.update');
Route::get('posts/delete/{id}',[PostController::class, 'delete'])->name('posts.delete');
Route::get('posts/delete/all/truncate',[PostController::class, 'deleteAllTruncate'])->name('posts.delete.all.truncate');

