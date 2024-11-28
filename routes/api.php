<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\API\ImageController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\API\HomeController;

//Categories
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::post('categories', [CategoryController::class, 'store']);
Route::put('categories/{id}', [CategoryController::class, 'update']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);

//Images
Route::get('/images', [ImageController::class, 'index']); 
Route::get('/images/{id}', [ImageController::class, 'show']);
Route::post('images', [ImageController::class, 'store']);
Route::delete('images/{id}', [ImageController::class, 'destroy']);

//Users
Route::get('/users', [UserController::class, 'index']);  // Get all users
Route::get('{id}', [UserController::class, 'show']);  // Show specific user
Route::post('/', [UserController::class, 'store']);  // Create a new user
Route::put('{id}', [UserController::class, 'update']);  // Update an existing user
Route::delete('{id}', [UserController::class, 'destroy']);  // Delete a user

//Posts
Route::get('/posts', [PostController::class, 'index']); // Menampilkan semua post
Route::post('/posts', [PostController::class, 'store']); // Membuat post baru
Route::get('/posts/{post}', [PostController::class, 'show']); // Menampilkan post berdasarkan ID
Route::put('/posts/{post}', [PostController::class, 'update']); // Memperbarui post berdasarkan ID
Route::delete('/posts/{post}', [PostController::class, 'destroy']); // Menghapus post berdasarkan ID

//Home
Route::get('/home/galeri', [HomeController::class, 'galeri']);
Route::get('/home/agenda', [HomeController::class, 'agenda']);
Route::get('/home/informasi', [HomeController::class, 'informasi']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');