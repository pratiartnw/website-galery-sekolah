@extends('admin.layout')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg border-0" style="background-color: #d9e4ec; border-radius: 12px;">
        <div class="card-header text-center" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); color: white; border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <h3>Tambah Admin Baru</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <!-- Input for Name -->
                <div class="mb-4">
                    <label for="name" class="form-label" style="color: #2f3c52;">Nama</label>
                    <input type="text" id="name" name="name" class="form-control" 
                           style="border-radius: 8px; background-color: #f1f6fb; border: 1px solid #5886a8;" 
                           required>
                </div>

                <!-- Input for Email -->
                <div class="mb-4">
                    <label for="email" class="form-label" style="color: #2f3c52;">Email</label>
                    <input type="email" id="email" name="email" class="form-control" 
                           style="border-radius: 8px; background-color: #f1f6fb; border: 1px solid #5886a8;" 
                           required>
                </div>

                <!-- Input for Password -->
                <div class="mb-4">
                    <label for="password" class="form-label" style="color: #2f3c52;">Password</label>
                    <input type="password" id="password" name="password" class="form-control" 
                           style="border-radius: 8px; background-color: #f1f6fb; border: 1px solid #5886a8;" 
                           required>
                </div>

                <!-- Input for Password Confirmation -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label" style="color: #2f3c52;">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" 
                           style="border-radius: 8px; background-color: #f1f6fb; border: 1px solid #5886a8;" 
                           required>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5 py-2" 
                            style="background-color: #5886a8; border-radius: 8px; font-weight: bold;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Card and Form Styling */
    .card {
        border: none;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        padding: 12px;
        font-size: 14px;
        color: #2f3c52;
    }

    .form-control:focus {
        border-color: #2f3c52;
        box-shadow: 0px 0px 5px rgba(47, 60, 82, 0.5);
    }

    /* Button hover effects */
    .btn-primary:hover {
        background-color: #2f3c52;
        border-color: #2f3c52;
    }

    /* Card Header Styling */
    .card-header {
        font-weight: bold;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    /* Responsive Form */
    @media (max-width: 768px) {
        .form-control {
            font-size: 13px;
        }

        .btn-primary {
            font-size: 14px;
        }
    }
</style>
@endpush
