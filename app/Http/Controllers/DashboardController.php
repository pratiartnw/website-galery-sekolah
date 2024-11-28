<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
       // Mengambil total data dari database
    $totalUsers = User::count();       // Mengambil jumlah total pengguna
    $totalCategories = Category::count();  // Mengambil jumlah kategori
    $totalPosts = Post::count();      // Mengambil jumlah total post
    $totalGalleries = Gallery::count();  // Mengambil jumlah total galeri

    // Mengirim data ke tampilan dashboard
    return view('admin.dashboard', compact('totalUsers', 'totalCategories', 'totalPosts', 'totalGalleries'));
}
}
