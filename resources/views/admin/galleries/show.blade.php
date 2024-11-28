@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-12 col-md-4 mb-4">
        <div class="card" style="background: linear-gradient(135deg, #0d47a1, #2196f3); border: none; box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1); border-radius: 15px;">
            <div class="card-body text-white">
                <h5 class="card-title mb-4"><i data-feather="info" class="me-2"></i>Informasi Galeri</h5>
                <table class="table table-borderless text-white">
                    <tr>
                        <td><strong>Judul Post</strong></td>
                        <td>:</td>
                        <td>{{ $gallery->post ? $gallery->post->title : 'No Title' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Posisi</strong></td>
                        <td>:</td>
                        <td>{{ $gallery->position ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <td>:</td>
                        <td>
                            <span class="badge {{ $gallery->status == 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                                {{ Str::ucfirst($gallery->status) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Dibuat Pada</strong></td>
                        <td>:</td>
                        <td>{{ \Carbon\Carbon::parse($gallery->created_at)->format('d M Y') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-8">
        <div class="card" style="border: none; border-radius: 15px; background: #f8f9fa; box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);">
            <div class="card-header" style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <h4 class="m-0 p-0"><i data-feather="image" class="me-2" style="color: white;"></i>Foto Galeri</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#addImageModal" style="position: absolute; top: 10px; right: 15px; border-radius: 25px; padding: 8px 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                    + Tambah Foto
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <form action="/images/store" method="POST" enctype="multipart/form-data" class="modal-content">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title text-secondary" id="addImageModalLabel">Tambah Foto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-secondary">
                            <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                            <div class="mb-3">
                                <label for="file">Foto</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body bg-light">
                <!-- Show error validation if any -->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0 p-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Show success message if any -->
                @if (session('success'))
                <div class="alert alert-success">{{ session('success')}}</div>
                @endif

                <div class="row">
                    @forelse ($gallery->images as $image)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card" style="border-radius: 15px; box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                            <img src="{{ asset('images/' . $image->file) }}" alt="{{ $image->title }}" class="img-fluid" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $image->title }}</h5>

                                <!-- Button Edit -->
                                <button type="button" class="btn btn-link btn-sm d-block ms-auto" data-bs-toggle="modal" data-bs-target="#editImageModal{{ $image->id }}" style="color: #0d47a1;">
                                    <i data-feather="edit"></i>
                                </button>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editImageModal{{ $image->id }}" tabindex="-1" aria-labelledby="editImageModalLabel{{ $image->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <form action="/images/{{ $image->id }}" method="POST" enctype="multipart/form-data" class="modal-content">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title text-secondary" id="editImageModalLabel{{ $image->id }}">Edit Foto</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-secondary">
                                                <div class="mb-3">
                                                    <label for="file{{ $image->id }}">Foto</label>
                                                    <input type="file" name="file" id="file{{ $image->id }}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title{{ $image->id }}">Judul</label>
                                                    <input type="text" name="title" id="title{{ $image->id }}" class="form-control" value="{{ $image->title }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-warning">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Form Delete -->
                                <form action="/images/{{ $image->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link btn-sm d-block ms-auto" onclick="return confirm('Apakah anda yakin ingin menghapus?')" style="color: #dc3545;">
                                        <i data-feather="trash-2" class="text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-warning">Tidak ada Foto.</div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
