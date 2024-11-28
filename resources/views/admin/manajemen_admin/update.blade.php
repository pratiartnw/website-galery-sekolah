@extends('admin.layout') <!-- Menggunakan layout admin yang ada -->

@section('content')
<div class="container mt-4">
    <h2 style="color: #374c7a;">Pembaruan Berhasil</h2>
    <div class="alert alert-success" style="background-color: #fe9814; border-color: #fe9814;">
        <strong>Data berhasil diperbarui!</strong>
        Pengguna telah diperbarui dengan sukses.
    </div>

    <!-- Button untuk kembali ke halaman utama -->
    <a href="{{ route('user.index') }}" class="btn" style="background-color: #374c7a; border-color: #374c7a; color: white;">Kembali ke Daftar Pengguna</a>
</div>
@endsection
