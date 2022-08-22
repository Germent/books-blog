<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'index']);

Route::get('/books/add', [BookController::class, 'create']);

Route::get('/books', [BookController::class, 'index']);

Route::post('/books', [BookController::class, 'store']);

Route::get('/books/{id}', [BookController::class, 'show']);

Route::put('/books/{id}', [BookController::class, 'update']);

Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::get('/books/edit/{id}', [BookController::class, 'edit']);


