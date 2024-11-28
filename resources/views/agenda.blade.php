<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

        /* Agenda Card */
        .agenda-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            padding: 15px;
            text-align: center;
            border: 2px solid #90caf9;
            width: 100%;
            max-width: 280px;
            margin-bottom: 20px;
        }

        .agenda-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
        }

        .agenda-card i {
            font-size: 50px;
            color: #2196f3;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .agenda-card:hover i {
            color: #1565c0;
        }

        .agenda-card h3 {
            font-size: 20px;
            color: #1565c0;
            font-weight: 700;
            margin: 10px 0 8px;
        }

        .agenda-card h3::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #42a5f5, #0d47a1);
            margin: 8px auto 0;
            border-radius: 2px;
        }

        .agenda-card .date {
            display: inline-block;
            background: #64b5f6;
            color: white;
            font-size: 12px;
            padding: 4px 10px;
            border-radius: 20px;
            margin: 5px 0 10px;
        }

        .agenda-card p {
            font-size: 12px;
            color: #666;
            line-height: 1.6;
        }

        footer {
            background: linear-gradient(90deg, #0d47a1, #1e88e5);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.1);
        }

        footer p {
            font-size: 14px;
            opacity: 0.8;
        }

        /* Flexbox container for agenda */
        .agenda-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5rem;
            }

            header p {
                font-size: 0.9rem;
            }

            .agenda-card {
                max-width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Agenda Sekolah</h1>
        <p>Jejalahi Agenda dari SMKN 4 Bogor</p>
        <a href="/" class="btn-home">Kembali ke Home</a>
    </header>

    <!-- Agenda -->
    <div class="container agenda-container">
        @foreach($posts as $agenda)
            <div class="agenda-card">
                <i class="fas fa-calendar-alt"></i>
                <h3>{{ $agenda->title }}</h3>
                <div class="date">{{ $agenda->created_at->format('d M Y') }}</div>
                <p>{{ Str::limit($agenda->content, 100) }}</p>
            </div>
        @endforeach
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} SMKN 4 BOGOR. Semua Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
