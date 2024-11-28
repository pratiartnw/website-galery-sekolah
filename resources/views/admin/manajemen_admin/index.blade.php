@extends('admin.layout')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg border-0" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 12px;">
        <div class="card-body p-4">
            <!-- Button to add new admin -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="text-center" style="color: #ffffff; font-weight: bold;">Manajemen Admin</h3>
                <a href="{{ route('users.create') }}" class="btn btn-primary" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border-radius: 8px; padding: 10px 20px;">
                    + Tambah Admin
                </a>
            </div>

            <!-- Success message alert -->
            @if(session('success'))
                <div class="alert alert-success" style="background-color: #c9e7d6; color: #2f3c52; border-radius: 8px;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover" style="border-radius: 12px; overflow: hidden; background-color: white; border: 2px solid #2196f3;">
                    <thead>
                        <tr style="background: linear-gradient(to bottom, #0d47a1, #2196f3); color: white; font-size: 16px; border: 2px solid #2196f3;">
                            <th style="width: 10%; padding: 15px; border: 2px solid #2196f3;">ID</th>
                            <th style="width: 30%; padding: 15px; border: 2px solid #2196f3;">Nama</th>
                            <th style="width: 40%; padding: 15px; border: 2px solid #2196f3;">Email</th>
                            <th style="width: 20%; padding: 15px; border: 2px solid #2196f3;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr style="background-color: #f1f6fb; border: 2px solid #2196f3; transition: background-color 0.3s ease;">
                            <td class="text-center align-middle" style="border: 2px solid #2196f3;">{{ $user->id }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ $user->name }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ $user->email }}</td>
                            <td class="text-center align-middle" style="border: 2px solid #2196f3;">
                                <div class="d-flex justify-content-center">
                                    <!-- Edit button -->
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm me-2" style="border-radius: 6px; padding: 6px 10px; font-size: 14px;">
                                        <i data-feather="edit"></i> Edit
                                    </a>

                                    <!-- Delete button -->
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah anda ingin menghapus user ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 6px; padding: 6px 10px; font-size: 14px;">
                                            <i data-feather="trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center" style="background-color: #d9e4ec; color: #2f3c52; border: 2px solid #2196f3;">Tidak ada admin ditemukan.</td>
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
    /* Table Styles */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f1f6fb;
    }

    .table-striped tbody tr:nth-of-type(even) {
        background-color: #d9e4ec;
    }

    .table-striped tbody tr:hover {
        background-color: #b8cde0;
    }

    .table th, .table td {
        vertical-align: middle;
        text-align: center;
        font-size: 14px;
        color: #2f3c52;
        border: 2px solid #2196f3; /* Konsisten border pada semua sel */
    }

    .table thead th {
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Button Styles */
    .btn-primary:hover {
        background-color: #2f3c52;
        border-color: #2f3c52;
    }

    .btn-warning:hover {
        background-color: #ffb800;
        border-color: #ffaa00;
    }

    .btn-danger:hover {
        background-color: #ff4b3e;
        border-color: #ff2a1f;
    }

    /* Success Alert */
    .alert-success {
        background-color: #c9e7d6;
        color: #2f3c52;
        border: 1px solid #b8d9c3;
        font-size: 14px;
        padding: 10px;
    }
</style>
@endpush
