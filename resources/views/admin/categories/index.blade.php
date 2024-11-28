@extends('admin.layout')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg border-0" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 12px; color: white;">
        <div class="card-body p-4">
            <!-- Button to create new category -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="text-center">Daftar Kategori</h3>
                <a href="{{ route('categories.create') }}" class="btn btn-primary" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 8px; color: white;">
                    + Tambah Kategori
                </a>
            </div>
            
            <!-- Table with custom theme -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="border-radius: 8px; overflow: hidden; border: 2px solid #2196f3;">
                    <thead style="background: linear-gradient(to bottom, #0d47a1, #2196f3); color: white; border: 2px solid #2196f3;">
                        <tr>
                            <th style="width: 10%;">No</th>
                            <th style="width: 70%;">Judul</th>
                            <th style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr style="background-color: #e3f2fd; border: 2px solid #2196f3;">
                            <td class="text-center align-middle" style="border: 2px solid #2196f3;">{{ $loop->iteration }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ $category->title }}</td>
                            <td class="text-center align-middle" style="border: 2px solid #2196f3;">
                                <div class="d-flex justify-content-center">
                                    <!-- Edit button -->
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm me-2" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 6px; color: white;">
                                        <i data-feather="edit"></i> Edit
                                    </a>

                                    <!-- Delete button -->
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus kategori ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" style="background: linear-gradient(to bottom, #d32f2f, #b71c1c); border-radius: 6px; color: white;">
                                            <i data-feather="trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center" style="background: linear-gradient(to bottom, #e3f2fd, #90caf9); color: #0d47a1; border: 2px solid #2196f3;">Tidak ada kategori ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Table styles */
    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th, .table td {
        padding: 12px;
        text-align: center;
    }

    /* Tebalkan garis border tabel */
    .table th, .table td {
        border: 2px solid #2196f3;
    }

    .table tbody tr:hover {
        background: linear-gradient(to bottom, #0d47a1, #2196f3);
        color: white;
    }

    /* Button hover effects */
    .btn-primary {
        background: linear-gradient(to bottom, #0d47a1, #2196f3);
        border: none;
        color: white;
    }

    .btn-primary:hover {
        background: linear-gradient(to bottom, #2196f3, #0d47a1);
    }

    .btn-warning:hover {
        background: linear-gradient(to bottom, #ffb800, #ffaa00);
    }

    .btn-danger:hover {
        background: linear-gradient(to bottom, #b71c1c, #d32f2f);
    }
</style>
@endpush
