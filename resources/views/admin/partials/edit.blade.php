@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Edit Admin</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="email">Password</label>
            <input type="password" class="form-control" id="email" name="password" value="{{ $user->password }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <!-- Link Kembali ke Daftar Admin -->
    <div class="mt-3">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali ke Daftar Admin</a>
    </div>
</div>
@endsection
