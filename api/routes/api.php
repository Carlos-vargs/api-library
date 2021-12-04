<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
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

Route::get('/authors', [AuthorsController::class, 'index']);

Route::post('/authors', [AuthorsController::class, 'store']);

Route::get('/books', [BooksController::class, 'index']);

Route::post('/books', [BooksController::class, 'store']);

Route::get('authors/{id}', [AuthorsController::class, 'show']);
