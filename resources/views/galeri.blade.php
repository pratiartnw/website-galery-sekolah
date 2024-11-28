<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Sekolah - SMK Negeri 4 Bogor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Reset box model */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            padding-bottom: 50px;
        }

        /* Header */
        header {
            position: relative;
            background: linear-gradient(to right, #0d47a1, #2196f3);
            color: white;
            padding: 40px 15px;
            text-align: center;
            border-radius: 10px;
            margin: 0;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        header p {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .btn-home {
            position: absolute;
            top: 15px;
            right: 20px;
            background: #ffffff;
            color: #0d47a1;
            padding: 8px 12px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 2px solid #ffffff;
            border-radius: 30px;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-home:hover {
            background: #0d47a1;
            color: white;
            border-color: #0d47a1;
        }

        /* Gallery */
        .gallery-container {
            padding-top: 30px; /* Add space between header and gallery */
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for gallery item */
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        /* Gallery image */
        .gallery-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease, filter 0.5s ease;
        }

        /* Image zoom effect on hover */
        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
            filter: brightness(0.6);
        }

        /* Title Overlay */
        .title-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(47, 60, 82, 0.8);
            color: white;
            padding: 12px;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
            transition: background 0.3s ease;
        }

        /* Hover effect for title overlay */
        .gallery-item:hover .title-overlay {
            background: rgba(47, 60, 82, 0.9);
        }

        /* No images message */
        .no-images {
            font-size: 18px;
            font-weight: bold;
            color: #2f3c52;
            text-align: center;
            padding: 50px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gallery-item {
                border-radius: 8px;
            }
            .gallery-image {
                height: 200px;
            }
            h2.gradient-text {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Galeri Kegiatan Sekolah</h1>
        <p>Jelahi Dokumentasi Kegiatan dari SMKN 4 Bogor</p>
        <a href="/" class="btn-home">Kembali ke Home</a>
    </header>

    <!-- Gallery Container -->
    <div class="container gallery-container">
        <div class="row">
            @if(isset($images) && $images->isNotEmpty())
                @foreach($images as $image)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="gallery-item">
                            <img src="{{ asset('images/' . $image->file) }}" alt="{{ $image->title }}" class="gallery-image">
                            <div class="title-overlay">{{ $image->title }}</div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center no-images">Tidak ada foto yang tersedia.</p>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
