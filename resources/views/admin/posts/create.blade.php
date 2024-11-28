@extends('admin.layout')
@section('content')
    <div class="container my-5">
        <div class="card shadow-lg border-0" style="border-radius: 12px; background: linear-gradient(135deg, #0d47a1, #2196f3);">
            <div class="card-header text-center" style="border-top-left-radius: 12px; border-top-right-radius: 12px; background: linear-gradient(135deg, #0d47a1, #2196f3); color: white;">
                <h3>Tambah Post</h3>
            </div>
            <div class="card-body" style="background-color: #f4f9fc; border-radius: 12px;">
                <form action="/posts" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" style="font-weight: bold; color: #2f3c52;">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" required 
                               style="border-radius: 8px; border: 1px solid #5886a8; padding: 12px; transition: border-color 0.3s;">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="category_id" style="font-weight: bold; color: #2f3c52;">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control" required
                                        style="border-radius: 8px; border: 1px solid #5886a8; padding: 12px; transition: border-color 0.3s;">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="status" style="font-weight: bold; color: #2f3c52;">Status</label>
                                <select name="status" id="status" class="form-control" required
                                        style="border-radius: 8px; border: 1px solid #5886a8; padding: 12px; transition: border-color 0.3s;">
                                    <option value="">Pilih Status</option>
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="content" style="font-weight: bold; color: #2f3c52;">Isi</label>
                        <textarea name="content" class="form-control" id="content" required
                                  style="border-radius: 8px; border: 1px solid #5886a8; padding: 12px; transition: border-color 0.3s;"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary d-block mx-auto" 
                            style="background-color: #2f3c52; border-radius: 8px; padding: 10px 20px; font-weight: bold; transition: background-color 0.3s;">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Fokus input fields dengan efek soft shadow */
        .form-control:focus {
            border-color: #2196f3;
            box-shadow: 0 0 0 0.25rem rgba(33, 150, 243, 0.25);
        }

        /* Hover effect pada tombol */
        .btn-primary:hover {
            background-color: #0d47a1;  /* sedikit lebih gelap untuk efek hover */
            border-color: #0d47a1;
        }

        /* Card dengan background gradiasi */
        .card {
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #0d47a1, #2196f3); /* Gradiasi biru */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Card header dengan gradiasi dan teks putih */
        .card-header {
            border-radius: 12px;
            background: linear-gradient(135deg, #0d47a1, #2196f3);
            color: white;
        }

        /* Tombol Simpan dengan desain yang menarik */
        .btn-primary {
            background-color: #2f3c52;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
        }

        /* Paddings dan margin pada card body */
        .card-body {
            padding: 30px;
        }

        /* Label yang konsisten dengan desain */
        .form-group label {
            color: #2f3c52;
            font-size: 14px;
        }

        /* Styling untuk input, select, dan textarea */
        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
        }

        /* Hover effect untuk select dan input */
        .form-group input:hover,
        .form-group select:hover,
        .form-group textarea:hover {
            border-color: #2196f3;
        }

        /* Menambah sedikit space di bawah form-group untuk jarak */
        .form-group {
            margin-bottom: 20px;
        }

        /* Menambahkan sedikit padding untuk keseluruhan container */
        .container {
            padding: 30px;
        }

        /* Styling untuk placeholder */
        .form-control::placeholder {
            color: #888;
        }

    </style>
@endpush
