<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SearchBookController;
use App\Http\Controllers\BookCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('/authors', [AuthorController::class, 'index']);

Route::post('/authors', [AuthorController::class, 'store']);

Route::get('/books', [BookController::class, 'index']);

Route::post('/books', [BookController::class, 'store']);

Route::get('/books/categories', [BookCategoryController::class, 'index']);

Route::get('/search', [SearchBookController::class, 'index']);







