@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0" style="background-color: #e3f2fd; border-radius: 12px;">
        <div class="card-body">
            <!-- Button to add new gallery -->
            <a href="{{ route('galleries.create') }}" class="btn btn-primary mb-4" 
               style="background: linear-gradient(135deg, #0d47a1, #2196f3); border-radius: 8px; color: white; font-weight: bold; padding: 10px 20px;">
                + Galeri
            </a>
            
            <!-- Table with custom background and color -->
            <table class="table table-striped table-bordered table-hover" style="border-radius: 8px; overflow: hidden;">
                <thead style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white;">
                    <tr>
                        <th>No</th>
                        <th>Judul Post</th>
                        <th>Posisi</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                    <tr style="background-color: #bbdefb;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gallery->post ? $gallery->post->title : 'No title' }}</td>
                        <td>{{ $gallery->position }}</td>
                        <td>
                            @if ($gallery->status == 'aktif')
                            <span class="badge" style="background-color: #2196f3; color: white; font-size: 12px;">{{ Str::ucfirst($gallery->status) }}</span>
                            @else
                            <span class="badge" style="background-color: #90a4ae; color: white; font-size: 12px;">{{ Str::ucfirst($gallery->status) }}</span>
                            @endif
                        </td>
                        <td class="d-flex justify-content-center">
                            <!-- Detail button -->
                            <a href="/galleries/{{ $gallery->id }}" class="btn btn-sm" 
                               style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white; border-radius: 6px; margin-right: 8px; font-size: 14px;">
                               <i data-feather="info"></i> Detail
                            </a>
                            <!-- Edit button -->
                            <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-sm" 
                               style="background: linear-gradient(135deg, #2196f3, #0d47a1); color: white; border-radius: 6px; margin-right: 8px; font-size: 14px;">
                               <i data-feather="edit"></i> Edit
                            </a>
                            <!-- Delete button -->
                            <form action="{{ route('galleries.destroy', $gallery->id) }}" method="post" onsubmit="return confirm('Apakah anda yakin?')" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm" 
                                        style="background-color: #f44336; color: white; border-radius: 6px; font-size: 14px;">
                                    <i data-feather="trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Table Styles */
    .table {
        border-collapse: collapse;
        width: 100%;
        background-color: #e3f2fd; /* Light blue background */
    }

    .table th, .table td {
        padding: 12px;
        text-align: center;
        font-size: 14px;
        color: #0d47a1;
    }

    .table thead th {
        background: linear-gradient(135deg, #0d47a1, #2196f3); /* Gradient for table header */
        color: white;
        font-weight: bold;
    }

    .table tbody tr:hover {
        background: linear-gradient(135deg, #bbdefb, #0d47a1); /* Hover effect with gradient */
    }

    .table-bordered {
        border-color: #0d47a1; /* Matching border color */
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #0d47a1;
    }

    /* Button Styles */
    .btn-primary {
        background: linear-gradient(135deg, #0d47a1, #2196f3);
        border-color: #0d47a1;
        color: white;
        font-weight: bold;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #002171, #1565c0);
        border-color: #001970;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #2196f3, #0d47a1);
        border-color: #2196f3;
        color: white;
        font-weight: bold;
    }

    .btn-secondary:hover {
        background: linear-gradient(135deg, #1976d2, #0d47a1);
        border-color: #1565c0;
    }

    .btn-danger {
        background-color: #f44336;
        border-color: #f44336;
        color: white;
    }

    .btn-danger:hover {
        background-color: #d32f2f;
        border-color: #c62828;
    }

    .badge {
        padding: 5px 10px;
        border-radius: 12px;
        font-size: 12px;
    }
</style>
@endpush
