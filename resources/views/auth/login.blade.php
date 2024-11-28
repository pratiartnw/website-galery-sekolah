<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Web Galeri Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background: linear-gradient(to right, #0d47a1, #2196f3);
        color: #d9e4ec;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .card {
        background-color: #ffffff; /* Kotak login menjadi putih */
        border: none;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        width: 350px;
        margin: 0 auto;
      }
      .form-label, .form-check-label {
        color: #2f3c52; /* Menyesuaikan warna teks label agar kontras dengan latar belakang putih */
      }
      .btn-primary {
        background-color: #2196f3;
        border-color: #2196f3;
      }
      .btn-primary:hover {
        background-color: #0d47a1;
        color: #fff;
      }
      .text-center img {
        width: 80px;
        margin-bottom: 15px;
      }
      .text-center h3 {
        font-size: 1.5rem;
      }
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body px-4 py-4">
          <div class="text-center">
            <img src="{{ asset('images/lg4.png') }}" alt="Logo SMKN 4 Bogor">
            <h3 class="mb-4">Login</h3>
          </div>
          
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if (session('error'))
            <div class="alert alert-danger fade show" role="alert">
              {{ session('error') }}
            </div>
          @endif

          <form action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda" name="password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember">
              <label class="form-check-label" for="remember">Ingat saya</label>
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto mt-4">Login</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
