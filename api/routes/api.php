<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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

Route::post('/authors', [AuthorController::class, 'create']);

Route::get('author/books/{id}', [AuthorController::class, 'show']);


Route::get('/books', [BookController::class, 'index']);

Route::post('/books', [BookController::class, 'create']);

Route::get('book/{id}', [BookController::class, 'show']);



