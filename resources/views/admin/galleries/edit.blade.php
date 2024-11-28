@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="card shadow-lg" style="border-radius: 10px; background: linear-gradient(135deg, #0d47a1, #2196f3);">
            <div class="card-body" style="background-color: #e3f2fd; padding: 30px;">
                <form action="/galleries/{{ $gallery->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-4">
                        <label for="post_id" class="font-weight-bold" style="color: #0d47a1;">Judul Post</label>
                        <select name="post_id" class="form-control" id="post_id" required style="border-color: #0d47a1; background-color: #bbdefb;">
                            <option value="">Pilih Post</option>
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}" @if($post->id == $gallery->post_id) selected @endif>{{ $post->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="position" class="font-weight-bold" style="color: #0d47a1;">Posisi</label>
                                <input type="number" name="position" class="form-control" id="position" required value="{{ $gallery->position }}" style="border-color: #0d47a1; background-color: #bbdefb;">
                                <small class="form-text text-muted">Nilai Posisi harus berupa angka.</small>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="status" class="font-weight-bold" style="color: #0d47a1;">Status</label>
                                <select name="status" class="form-control" id="status" required style="border-color: #0d47a1; background-color: #bbdefb;">
                                    <option value="">Pilih Status</option>
                                    <option value="aktif" @if($gallery->status == 'aktif') selected @endif>Aktif</option>
                                    <option value="tidak-aktif" @if($gallery->status == 'tidak-aktif') selected @endif>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn d-block mx-auto" style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white; width: 200px; height: 50px; font-size: 16px; border-radius: 25px;">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
