<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Task 5 & Task 9
Route::get('/', [PostController::class, 'allPostsWithCategory'])->name('posts');

// Task 6
Route::get('/categorypost/{id}', [PostController::class, 'categoryPost']);

// Task 7
Route::get('/posts/{id}/delete', [PostController::class, 'softDeletePost'])->name('postDestroy');

// Task 8
Route::get('/showDeletedData', [PostController::class, 'deletedData'])->name('softDeletedData');

// Task 10
Route::get('/categories/{id}/posts', [CategoryController::class, 'showPostsByCategoryID'])->name('category_posts');

// Task 11
Route::get('/categories/{id}/latestPosts', [CategoryController::class, 'latestPosts']);

// Task 12
Route::get('/categories', [CategoryController::class, 'CategoriesLatestPosts'])->name('categories');
