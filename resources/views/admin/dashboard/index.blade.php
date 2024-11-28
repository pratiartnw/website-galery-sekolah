@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg" style="background: linear-gradient(to right, #0d47a1, #2196f3);">
        <div class="card-header text-white" style="background: transparent; box-shadow: none;">
            <h2>Selamat Datang di Dashboard Admin</h2>
        </div>

        <div class="card-body text-center text-white">
            <h3>Halo, Administrator!</h3>
            <p>Dashboard ini memberikan informasi penting terkait sistem kami.</p>
        </div>
    </div>
</div>
@endsection
<style>
    body {
        background: linear-gradient(to right, #0d47a1, #2196f3); /* Gradasi untuk seluruh halaman */
        color: white;
        font-family: 'Arial', sans-serif;
    }

    .card-header h2 {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
    }

    .card-body h3 {
        font-size: 2rem;
        font-weight: normal;
    }

    .card-body p {
        font-size: 1.2rem;
        margin-top: 10px;
    }
</style>
