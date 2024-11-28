@extends('admin.layout')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #0d47a1, #2196f3); border-radius: 12px;">
        <div class="card-header text-center" style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white; border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <h3>Manajemen Post</h3>
        </div>
        <div class="card-body" style="background-color: #e3f2fd; border-radius: 12px;">
            <!-- Button to add a new post -->
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3" style="background: linear-gradient(135deg, #0d47a1, #2196f3); border-radius: 8px; color: white;">
                + Tambah Post
            </a>

            <!-- Post table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover" style="border-radius: 12px; overflow: hidden; background-color: #ffffff; color: black; border: 2px solid #2196f3;">
                    <thead style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white;">
                        <tr>
                            <th style="padding: 15px; border: 2px solid #2196f3;">No</th>
                            <th style="padding: 15px; border: 2px solid #2196f3;">Judul</th>
                            <th style="padding: 15px; border: 2px solid #2196f3;">Kategori</th>
                            <th style="padding: 15px; border: 2px solid #2196f3;">Petugas</th>
                            <th style="padding: 15px; border: 2px solid #2196f3;">Status</th>
                            <th style="padding: 15px; border: 2px solid #2196f3;">Dibuat pada</th>
                            <th class="text-center" style="padding: 15px; border: 2px solid #2196f3;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr style="background-color: #f1f6fb; border-radius: 8px; border: 2px solid #2196f3; transition: background-color 0.3s ease;">
                            <td class="text-center align-middle" style="border: 2px solid #2196f3;">{{ $loop->iteration }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ $post->title }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ $post->category ? $post->category->title : 'No Category' }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ $post->user ? $post->user->name : 'Unknown' }}</td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">
                                @if (Str::lower($post->status) == 'publish')
                                <span class="badge" style="background-color: #28a745; color: white; border-radius: 6px; padding: 5px 10px; font-size: 12px;">
                                    {{ Str::ucfirst($post->status) }}
                                </span>
                                @else
                                <span class="badge" style="background-color: #ffc107; color: white; border-radius: 6px; padding: 5px 10px; font-size: 12px;">
                                    {{ Str::ucfirst($post->status) }}
                                </span>
                                @endif
                            </td>
                            <td class="align-middle" style="border: 2px solid #2196f3;">{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</td>
                            <td class="text-center align-middle" style="border: 2px solid #2196f3;">
                                <div class="d-flex justify-content-center">
                                    <!-- Detail button -->
                                    <button class="btn btn-info btn-sm me-2" style="border-radius: 6px; padding: 6px 10px;" type="button" data-bs-toggle="modal" data-bs-target="#postDetail{{ $post->id }}">
                                        <i data-feather="info"></i> Detail
                                    </button>
                                    <!-- Edit button -->
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm me-2" style="border-radius: 6px; padding: 6px 10px;">
                                        <i data-feather="edit"></i> Edit
                                    </a>
                                    <!-- Delete button -->
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post" onsubmit="return confirm('Apakah anda yakin?')" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 6px; padding: 6px 10px;">
                                            <i data-feather="trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
    <!-- Modal detail post -->
    <div class="modal fade" id="postDetail{{ $post->id }}" tabindex="-1" aria-labelledby="postDetailLabel{{ $post->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 12px;">
                <div class="modal-header" style="background: linear-gradient(135deg, #0d47a1, #2196f3); color: white;">
                    <h5 class="modal-title" id="postDetailLabel{{ $post->id }}"><i data-feather="info"></i> Detail Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Judul</strong></td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal dibuat</strong></td>
                            <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Dibuat oleh</strong></td>
                            <td>{{ $post->user ? $post->user->name : 'Unknown' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Status</strong></td>
                            <td>{{ Str::ucfirst($post->status) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Kategori</strong></td>
                            <td>{{ optional($post->category)->title }}</td>
                        </tr>
                        <tr>
                            <td><strong>Isi</strong></td>
                            <td>{{ $post->content }}</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@push('styles')
<style>
    /* Table Styles */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #bbdefb;
    }

    .table-striped tbody tr:nth-of-type(even) {
        background-color: #bbdefb;
    }

    .table-striped tbody tr:hover {
        background-color: #90caf9;
        cursor: pointer;
    }

    .table th, .table td {
        vertical-align: middle;
        text-align: center;
        font-size: 14px;
        color: black;
        border: 2px solid #2196f3;
        border-radius: 8px;
    }

    .table thead th {
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Button Styles */
    .btn-primary:hover {
        background: linear-gradient(135deg, #0d47a1, #2196f3);
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

    .badge {
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 12px;
    }

    .table-responsive {
        margin-top: 20px;
    }

    .modal-content {
        border-radius: 12px;
    }

    .modal-header {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .modal-footer {
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
    }
</style>
@endpush
