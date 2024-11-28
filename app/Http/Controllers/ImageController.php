<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request){
        // validasi data request
        $request->validate([
            'gallery_id' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
            'title' => 'required',
        ]);

        // ambil file yang diupload
        $file = $request->file('file');

        // nama
        $fileName = time() . '.' . $file->extension();

        // pindahkan file ke folder public/images
        $file->move(public_path('images'),$fileName);

        // Simpan data ke Database
       Image::create([
        'gallery_id' => $request->gallery_id,
        'file' => $fileName,
        'title' => $request->title,
       ]);

       // Redirect ke halaman sebelumnya
       return back()->with('success', 'Foto berhasil ditambahkan');

    }

    public function destroy($id)
    {
        // ambil data image berdasarkan id
        $image = Image::find($id);

        // hapus file dari folder public/images
        unlink(public_path('images/' . $image->file));

        // hapus data dari database
        $image->delete();

        // redirectke halaman sebelumnya
        return back()->with('success', 'Foto berhasil dihapus');
    }
    public function update(Request $request, $id)
{
    $image = Image::findOrFail($id);

    // Validasi data
    $request->validate([
        'title' => 'required|string|max:255',
        'file' => 'nullable|image|max:2048',
    ]);

    // Update judul
    $image->title = $request->input('title');

    // Update file jika diunggah
    if ($request->hasFile('file')) {
        // Hapus file lama
        if ($image->file && file_exists(public_path('images/' . $image->file))) {
            unlink(public_path('images/' . $image->file));
        }

        // Upload file baru
        $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('images'), $fileName);
        $image->file = $fileName;
    }

    $image->save();

    return redirect()->back()->with('success', 'Foto berhasil diperbarui.');
}

}
