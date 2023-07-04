<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Task 5
Route::get('/', [PostController::class, 'allPostsWithCategory'])->name('posts');

// Task 6
Route::get('/categorypost/{id}', [PostController::class, 'categoryPost']);

// Task 7
Route::get('/posts/{id}/delete', [PostController::class, 'softDeletePost'])->name('postDestroy');

// Task 8
// task 8
Route::get('/showDeletedData', [PostController::class, 'deletedData'])->name('softDeletedData');
