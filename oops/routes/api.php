<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List all posts
Route::get('posts', [App\Http\Controllers\ResourceController::class, 'index']);

// List a single post
Route::get('post/{id}', [App\Http\Controllers\ResourceController::class, 'show']);

// Create a new post
Route::post('post', [App\Http\Controllers\ResourceController::class, 'store']);

// Update a posts
Route::put('post', [App\Http\Controllers\ResourceController::class, 'store']);

// Delete a post
Route::delete('post/{id}', [App\Http\Controllers\ResourceController::class, 'destroy']);