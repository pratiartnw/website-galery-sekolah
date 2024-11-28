<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Endpoint untuk mendapatkan semua data galeri
    public function galeri()
    {
        $images = Image::all();

        return response()->json([
            'success' => true,
            'message' => 'Data galeri berhasil diambil',
            'data' => $images
        ], 200);
    }

    // Endpoint untuk mendapatkan data agenda
    public function agenda()
    {
        $posts = Post::where('category_id', 2)->get();

        return response()->json([
            'success' => true,
            'message' => 'Data agenda berhasil diambil',
            'data' => $posts
        ], 200);
    }

    // Endpoint untuk mendapatkan data informasi
    public function informasi()
    {
        $posts = Post::where('category_id', 10)->get();

        return response()->json([
            'success' => true,
            'message' => 'Data informasi berhasil diambil',
            'data' => $posts
        ], 200);
    }
}
