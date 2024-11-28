@extends('admin.layout')
@section('content')
    <div class="container my-5" style="max-width: 600px;">
        <h1 class="text-center mb-4" style="color: #ffffff;">Tambah Kategori Baru</h1>
        <div class="card shadow" style="border: none; background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 12px;">
            <div class="card-body p-4">
                <form action="/categories" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" style="color: #ffffff; font-weight: bold;">Judul</label>
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control" 
                            id="title" 
                            style="border: 2px solid #2196f3; border-radius: 8px; padding: 10px;"
                            placeholder="Masukkan Judul Kategori"
                            required>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="btn btn-primary w-100" 
                        style="background-color: #0d47a1; border-color: #0d47a1; border-radius: 8px; font-weight: bold;">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
