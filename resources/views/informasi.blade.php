<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Terkini</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
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

        /* Container */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .card {
            background: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        .post-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #0d47a1;
            margin-bottom: 10px;
        }

        .post-date {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 15px;
        }

        .post-content {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* No Posts */
        .no-posts {
            font-size: 1.2rem;
            color: #b0bec5;
            text-align: center;
            margin-top: 50px;
        }

        /* Footer */
        footer {
            background: #0d47a1;
            color: white;
            padding: 15px;
            text-align: center;
            border-top: 4px solid #2196f3;
        }

        footer p {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Informasi Terkini</h1>
        <p>Jelajahi berita terbaru dari SMKN 4 Bogor</p>
        <a href="/" class="btn-home">Kembali ke Home</a>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            @forelse($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="post-title">{{ $post->title }}</div>
                    <div class="post-date">{{ $post->created_at->format('d M Y') }}</div>
                    <div class="post-content">{{ Str::limit($post->content, 150) }}</div>
                </div>
            </div>
            @empty
            <p class="no-posts">Tidak ada informasi terkini yang tersedia.</p>
            @endforelse
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} SMKN 4 BOGOR. Semua Hak Cipta Dilindungi.</p>
    </footer>

</body>

</html>
