<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


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

// index
Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

// 詳細ページ
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

// create
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

// store
Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

// edit
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

// update処理
// 一部分のデータ変更はpatchを利用
Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

// delete処理
Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');

// コメント作成処理
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
    ->name('comments.store')
    ->where('post', '[0-9]+');
