<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/agenda', [HomeController::class, 'agenda'])->name('agenda');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');

// Route untuk Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login')->middleware('guest');

// Route untuk menangani proses login
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

// Route untuk pengunjung yang sudah login
Route::middleware('auth')->group(function () {

    // Route dashboard admin
    Route::get('/admin', function() {
        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
        ]);
    });


    // Route untuk menampilkan Manajemen Admin
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Form tambah admin
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 

// Simpan data admin baru
Route::post('/users', [UserController::class, 'store'])->name('users.store'); 

// Form edit admin
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); 

 // Update data admin
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');

// Hapus data admin
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
 

    // Route untuk logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route untuk CRUD category
    Route::resource('categories', CategoryController::class);

    // Route untuk CRUD post
    Route::resource('posts', PostController::class);

    // Route untuk CRUD gallery
    Route::resource('galleries', GalleryController::class);

    // Route untuk menyimpan foto yang diupload
    Route::post('/images/store' , [ImageController::class, 'store']);

    Route::put('/images/{id}', [ImageController::class, 'update'])->name('images.update');


    // Route untuk menghapus foto
    Route::delete('/images/{id}', [ImageController::class, 'destroy']);

   
});


