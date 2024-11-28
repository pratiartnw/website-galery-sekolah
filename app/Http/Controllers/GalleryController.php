<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil smw data gallery
        $galleries = Gallery::all();

        // tampilan index untuk menampilkan smw data
        return view('admin.galleries.index', [
            'title' => 'Galeri Foto',
            'galleries' => $galleries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ambil semua data post
        $posts = Post::all();
    
        // tampilkan view form tambah galeri dan kirim data posts
        return view('admin.galleries.create', [
            'title' => 'Tambah Galeri Foto',
            'posts' => $posts, // Pastikan untuk mengirim data posts ke view
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // simpan data gallery yg baru
        Gallery::create([
            'post_id' => $request->post_id,
            'position' => $request->position,
            'status' => $request->status,
        ]);

        // redirect kehalaman index gallery
        return redirect('/galleries')->with('success', 'Galeri foto berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        // Tampilkan view detail gallery
        return view('admin.galleries.show',[
            'title' => 'Deatail Galeri Foto',
            'gallery' => $gallery,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        // ambil smw data post
        $posts = Post::all();

        // tampilkan view form edit gallery
        return view('admin.galleries.edit', [
            'title' => 'Edit Galeri Foto',
            'gallery' => $gallery,
            'posts' => $posts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        // update data gallery
        $gallery->update([
            'post_id' => $request->post_id,
            'position' => $request->position,
            'status' => $request->status,
        ]);

        // redirect kehalaman admin
        return redirect('/galleries')->with('success', 'Galeri foto berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // hapus data gallery
        $gallery->delete();

        // redirect kehalaman index
        return redirect('/galleries')->with('success', 'Galeri foto berhasil dihapus');
    }
}