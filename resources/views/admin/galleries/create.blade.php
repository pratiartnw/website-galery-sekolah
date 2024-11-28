@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="text-center mb-4" style="color: #0d47a1;">Tambah Post Baru</h1>
    <div class="card shadow-lg" style="border-radius: 15px; background: linear-gradient(135deg, #0d47a1, #2196f3);">
        <div class="card-body" style="padding: 30px; background-color: #e3f2fd;">
            <form action="{{ route('galleries.store') }}" method="post">
                @csrf
                
                <!-- Judul Post -->
                <div class="form-group mb-4">
                    <label for="post_id" class="font-weight-bold" style="color: #0d47a1;">Judul Post</label>
                    <select name="post_id" class="form-control" id="post_id" required style="border-color: #0d47a1; background-color: #bbdefb;">
                        <option value="">Pilih Post</option>
                        @foreach ($posts as $post)
                            <option value="{{ $post->id }}">{{ $post->title }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Posisi dan Status -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label for="position" class="font-weight-bold" style="color: #0d47a1;">Posisi</label>
                            <input type="number" name="position" class="form-control" id="position" required style="border-color: #0d47a1; background-color: #bbdefb;">
                            <small class="form-text text-muted">Nilai harus berupa angka.</small>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label for="status" class="font-weight-bold" style="color: #0d47a1;">Status</label>
                            <select name="status" class="form-control" id="status" required style="border-color: #0d47a1; background-color: #bbdefb;">
                                <option value="">Pilih Status</option>
                                <option value="aktif">Aktif</option>
                                <option value="tidak-aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Button Simpan -->
                <button type="submit" class="btn" style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white; font-size: 16px; width: 200px; height: 50px; border-radius: 25px; display: block; margin: 0 auto;">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
