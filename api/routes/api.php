<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\LivrosController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Filmes
Route::get('filmes', [FilmesController::class, 'index']);

// List single filmes
Route::get('filme/{id}', [FilmesController::class, 'show']);

// Create new filmes
Route::post('filme', [FilmesController::class, 'store']);

// Update filmes
Route::put('filme/{id}', [FilmesController::class, 'update']);

// Delete filmes
Route::delete('filme/{id}', [FilmesController::class,'destroy']);


// Livros

// List Filmes
Route::get('livros', [LivrosController::class, 'index']);

// List single livros
Route::get('livro/{id}', [LivrosController::class, 'show']);

// Create new livros
Route::post('livro', [LivrosController::class, 'store']);

// Update livros
Route::put('livro/{id}', [LivrosController::class, 'update']);

// Delete livros
Route::delete('livro/{id}', [LivrosController::class,'destroy']);