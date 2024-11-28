<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'status' => 'success',
            'data' => $categories
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255', // Validasi title kategori
        ]);

        // Simpan kategori baru
        $category = Category::create([
            'title' => $validated['title'], // Menyimpan dengan kolom title
        ]);

        // Response sukses
        return response()->json([
            'status' => 'success',
            'message' => 'Kategori berhasil ditambahkan!',
            'data' => $category
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json([
            'status' => 'success',
            'data' => $category
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Temukan kategori dan perbarui data
        $category = Category::findOrFail($id);
        $category->update([
            'title' => $validated['title'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori berhasil diperbarui!',
            'data' => $category
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori berhasil dihapus!'
        ], Response::HTTP_OK);
    }
}
