<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post; // Perbaikan namespace
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data galeri dari database
        $images = Image::all();
        
        // Kirim data ke view
        return view('home', compact('images'));
    }

    public function galeri()
    {
        // Ambil semua data galeri dari database
        $images = Image::all();
        
        // Kirim data ke view
        return view('galeri', compact('images'));
    }

    public function agenda()
{
    // Ambil semua data dari tabel posts dengan category_id = 2
    $posts = Post::where('category_id', 2)->get();

    // Kirim data ke view
    return view('agenda', compact('posts'));
}
public function informasi()
{

    //Ambil posts yang memiliki category_id = 10
    $posts = Post::where('category_id', 10)->get();

    // kirim data ke view
    return view('informasi', compact('posts'));
}}