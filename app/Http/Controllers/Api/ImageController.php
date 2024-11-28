<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        // Ambil semua data image
        $images = Image::all();

        // Response sukses
        return response()->json([
            'message' => 'Daftar foto berhasil diambil',
            'data' => $images,
        ], 200);
    }

    public function show($id)
    {
        // Ambil data image berdasarkan id
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['message' => 'Foto tidak ditemukan'], 404);
        }

        // Response sukses
        return response()->json([
            'message' => 'Foto berhasil diambil',
            'data' => $image,
        ], 200);
    }

    public function store(Request $request)
    {
        // Validasi data request
        $validated = $request->validate([
            'gallery_id' => 'required|exists:galleries,id',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
            'title' => 'required|string|max:255',
        ]);

        // Ambil file yang diupload
        $file = $request->file('file');

        // Nama file
        $fileName = time() . '.' . $file->extension();

        // Pindahkan file ke folder public/images
        $file->move(public_path('images'), $fileName);

        // Simpan data ke database
        $image = Image::create([
            'file' => $fileName,
            'title' => $validated['title'],
            'gallery_id' => $validated['gallery_id'],
        ]);

        // Response sukses
        return response()->json([
            'message' => 'Foto berhasil ditambahkan',
            'data' => $image,
        ], 201);
    }

    public function destroy($id)
    {
        // Ambil data image berdasarkan id
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['message' => 'Foto tidak ditemukan'], 404);
        }

        // Hapus file dari folder public/images
        if (file_exists(public_path('images/' . $image->file))) {
            unlink(public_path('images/' . $image->file));
        }

        // Hapus data dari database
        $image->delete();

        // Response sukses
        return response()->json(['message' => 'Foto berhasil dihapus'], 200);
    }
}