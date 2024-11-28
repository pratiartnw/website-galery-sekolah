@extends('admin.layout')
@section('content')
    <div class="container my-5">
        <div class="card shadow-lg border-0" style="border-radius: 12px; background: linear-gradient(135deg, #0d47a1, #2196f3);">
            <div class="card-header text-center" style="border-top-left-radius: 12px; border-top-right-radius: 12px; background: linear-gradient(135deg, #0d47a1, #2196f3); color: white;">
                <h3>Edit Post</h3>
            </div>
            <div class="card-body" style="background-color: #f4f9fc; border-radius: 12px;">
                <form action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="title" style="font-weight: bold; color: #2f3c52;">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" required value="{{ $post->title }}" 
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
                                        <option value="{{ $category->id }}" @if ($category->id == $post->category_id) selected @endif>
                                            {{ $category->title }}
                                        </option>
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
                                    <option value="publish" @if ($post->status == 'publish') selected @endif>Publish</option>
                                    <option value="draft" @if ($post->status == 'draft') selected @endif>Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="content" style="font-weight: bold; color: #2f3c52;">Isi</label>
                        <textarea name="content" class="form-control" id="content" required style="border-radius: 8px; border: 1px solid #5886a8; padding: 12px; transition: border-color 0.3s;">
                            {{ $post->content }}
                        </textarea>
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
        /* Focus State for Form Elements */
        .form-control:focus {
            border-color: #2196f3;
            box-shadow: 0 0 0 0.25rem rgba(33, 150, 243, 0.25);
        }

        /* Button Hover Effect */
        .btn-primary:hover {
            background-color: #0d47a1;
            border-color: #0d47a1;
        }

        /* Card Background Gradient */
        .card {
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #0d47a1, #2196f3); /* Gradasi biru pada card */
        }

        /* Card Header Gradient */
        .card-header {
            border-radius: 12px;
            background: linear-gradient(135deg, #0d47a1, #2196f3); /* Gradasi biru pada header */
            color: white;
        }

        /* Card Body Styling */
        .card-body {
            padding: 30px;
            background-color: #f4f9fc; /* Latar belakang yang terang dan bersih untuk card-body */
            border-radius: 12px;
        }

        /* Label Styling */
        .form-group label {
            color: #2f3c52;
            font-weight: bold;
        }

        /* Input, Select, Textarea Styling */
        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 14px;
            color: #333;
            border-radius: 8px;
            border: 1px solid #5886a8;
            padding: 12px;
            transition: border-color 0.3s ease;
        }

        /* Input Hover Effect */
        .form-group input:hover,
        .form-group select:hover,
        .form-group textarea:hover {
            border-color: #2196f3;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #2f3c52;
            border-radius: 8px;
            color: white;
            font-weight: bold;
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(33, 150, 243, 0.25);
        }
    </style>
@endpush
