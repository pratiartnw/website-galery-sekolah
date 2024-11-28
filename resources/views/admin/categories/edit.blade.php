@extends('admin.layout')
@section('content')
    <div class="container my-5" style="max-width: 600px;">
        <h1 class="text-center mb-4" style="color: #ffffff;">Edit Kategori</h1>
        <div class="card shadow" style="border: none; background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 12px;">
            <div class="card-body p-4">
                <form action="/categories/{{ $category->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="title" style="color: #ffffff; font-weight: bold;">Judul</label>
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control" 
                            id="title" 
                            value="{{ $category->title }}" 
                            style="border: 2px solid #ffffff; border-radius: 8px; padding: 10px; background-color: rgba(255, 255, 255, 0.2); color: #ffffff;"
                            placeholder="Masukkan Judul Kategori"
                            required>
                    </div>
                    <button 
                        type="submit" 
                        class="btn btn-primary w-100" 
                        style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border: none; border-radius: 8px; font-weight: bold; color: #ffffff;">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
