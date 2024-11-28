<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data post
        $posts = Post::with('category')->get();

        // Kembalikan response JSON
        return response()->json([
            'message' => 'Daftar post berhasil diambil',
            'data' => $posts,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string|in:publish,draft',
            'content' => 'required|string',
        ]);

        // Tambahkan 'petugas_id' ke dalam data
        $validated['petugas_id'] = $request->user()->id; // Menggunakan ID petugas yang login

        // Simpan data post
        $post = Post::create($validated);

        // Kembalikan response JSON
        return response()->json([
            'message' => 'Post berhasil ditambahkan',
            'data' => $post,
        ], 201);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        // Cari post berdasarkan ID
        $post = Post::with('category')->find($id);

        if (!$post) {
            return response()->json(['message' => 'Post tidak ditemukan'], 404);
        }

        // Kembalikan response JSON
        return response()->json([
            'message' => 'Detail post berhasil diambil',
            'data' => $post,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string|in:publish,draft',
            'content' => 'required|string',
        ]);

        // Cari post berdasarkan ID
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post tidak ditemukan'], 404);
        }

        // Update data post
        $post->update($validated);

        // Kembalikan response JSON
        return response()->json([
            'message' => 'Post berhasil diperbarui',
            'data' => $post,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari post berdasarkan ID
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post tidak ditemukan'], 404);
        }

        // Hapus data post
        $post->delete();

        // Kembalikan response JSON
        return response()->json(['message' => 'Post berhasil dihapus'], 200);
    }
}