<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Sekolah - SMK Negeri 4 Bogor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Body dan Tema Umum */
        body {
            background-color: #f4f8fb;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar */
        nav.navbar {
            background: linear-gradient(to right, #0d47a1, #2196f3);
        }

        nav.navbar .nav-link {
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        nav.navbar .nav-link:hover {
            color: #f8c32d;
        }

       /* Hero Section */
.hero-section {
    background: url('{{ asset('images/lapangan.jpg') }}') no-repeat center center/cover;
    height: 750px;
    color: white;
    position: relative;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    background-color: #0d47a1;
    /* Hapus filter dari background utama */
}

.hero-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5); /* Overlay gelap */
    z-index: 1;
}

.hero-section .container {
    position: relative;
    z-index: 2;
    padding: 250px 0;
    text-align: center;
}

.hero-section h1 {
    font-size: 3rem;
    font-weight: bold;
    color: transparent;
    background: linear-gradient(to right, #0d47a1, #2196f3);
    -webkit-background-clip: text;
    background-clip: text;
}

.hero-section p {
    font-size: 1.5rem;
    color: white;
}

.hero-section .btn-container {
    margin-top: 20px;
}

.hero-section .btn-container a {
    display: inline-block;
    margin: 0 10px;
    padding: 12px 24px;
    border-radius: 25px;
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    color: white;
    background: linear-gradient(to right, #2196f3, #0d47a1);
    transition: all 0.3s ease;
}

.hero-section .btn-container a:hover {
    background: linear-gradient(to right, #0d47a1, #2196f3);
    color: #d9e4ec;
}

/* Pastikan elemen berikutnya tetap terang */
.next-section {
    background: white;
    color: black;
    padding: 50px 20px;
}



        /* Heading */
        h2 {
            color: #0d47a1;
            font-weight: bold;
        }

        .underline {
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #0d47a1, #2196f3);
            margin-bottom: 20px;
        }

        /* Content Box */
        .content-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeInContent 2s forwards;
        }

        @keyframes fadeInContent {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Button */
        .btn-primary {
            background: linear-gradient(to right, #0d47a1, #2196f3);
            border: none;
        }

        .btn-primary:hover {
            background: #2196f3;
        }

        /* Gallery */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease, filter 0.5s ease;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
            filter: brightness(0.8);
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(13, 71, 161, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 0 0 12px 12px;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay .text {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        /* Footer */
        footer {
            background: linear-gradient(to right, #0d47a1, #2196f3);
            color: white;
            padding: 15px 0;
        }

        /* Gradasi pada teks */
        .gradient-text {
    background: linear-gradient(to right, #0d47a1, #2196f3);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-weight: bold; /* Menambahkan penebalan pada teks */
}
.btn-gradient-custom {
    background: linear-gradient(135deg, #5886a8, #2f3c52);
    color: #fff;
    border-radius: 15px;
    transition: all 0.3s ease-in-out;
    text-transform: uppercase;
    font-size: 1.1rem;
}

.btn-gradient-custom:hover {
    background: linear-gradient(135deg, #2f3c52, #d9e4ec);
    transform: scale(1.05);
    color: #fff;
}

.btn-gradient-custom i {
    transition: transform 0.3s ease-in-out;
}

.btn-gradient-custom:hover i {
    transform: scale(1.2);
}

.shadow-lg {
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #5e92f3, #0d47a1);">
    <div class="container-fluid">
        <!-- Logo dan teks SMKN 4 Bogor -->
        <a class="navbar-brand d-flex align-items-center mx-auto" href="#">
            <img src="{{ asset('images/lg4.png') }}" alt="Logo SMK Negeri 4 Bogor" 
                 style="height: 55px; width: auto; margin-right: 10px;">
            <span style="font-weight: bold; font-size: 1.2rem;">SMKN 4 Bogor</span>
        </a>

        <!-- Toggler for small screen -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            </ul>
        </div>
    </div>
</nav>


</body>


<div class="hero-section text-center">
    <div class="container">
        <h1 class="animated-text">Selamat Datang di SMKN 4 Bogor</h1>
        <p class="animated-text">KR4BAT (Kejuruan Empat Hebat)</p>
        <div class="mt-4 btn-container">
            <a href="https://www.instagram.com/smkn4kotabogor?igsh=ODZ3dXM3ajRoN3ll" target="_blank" class="btn instagram animated-btn">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="mailto:info@smkn4bogor.sch.id" class="btn email animated-btn">
                <i class="fas fa-envelope"></i> Email
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="btn whatsapp animated-btn">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </div>
</div>
<style>
    /* Hero Section */
    .hero-section {
        background: url('{{ asset('images/lapangan.jpg') }}') no-repeat center center/cover;
        height: 750px;
        color: white;
        position: relative;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        background-color: #0d47a1;
        animation: fadeIn 1.5s ease-out;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);  /* Transparansi hitam */
        z-index: 1;
    }

    .hero-section .container {
        position: relative;
        z-index: 2;
        padding: 250px 0;
    }

    /* Header Text */
    .hero-section h1 {
        font-size: 3rem;
        font-weight: bold;
        color: white;
        opacity: 0;
        animation: fadeInUp 1s forwards;
    }

    .hero-section p {
        font-size: 1.5rem;
        color: white;
        opacity: 0;
        animation: fadeInUp 1.5s forwards;
    }

    /* Button Animation */
    .btn-container .animated-btn {
        opacity: 0;
        animation: fadeInUp 2s forwards;
        animation-delay: 1s;
    }

    .btn-container .animated-btn:nth-child(1) {
        animation-delay: 1s;
    }

    .btn-container .animated-btn:nth-child(2) {
        animation-delay: 1.3s;
    }

    .btn-container .animated-btn:nth-child(3) {
        animation-delay: 1.6s;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hover effect for buttons */
    .btn-container a {
        margin: 10px;
        padding: 12px 20px;
        font-size: 1rem;
        text-decoration: none;
        border-radius: 30px;
        transition: background 0.3s ease, color 0.3s ease;
        display: inline-block;
    }

    /* Instagram button */
    .btn.instagram {
        background-color: #e4405f;
        color: white;
    }

    .btn.instagram:hover {
        background-color: #c13584;
    }

    /* Email button */
    .btn.email {
        background-color: #007bff;
        color: white;
    }

    .btn.email:hover {
        background-color: #0056b3;
    }

    /* WhatsApp button */
    .btn.whatsapp {
        background-color: #25d366;
        color: white;
    }

    .btn.whatsapp:hover {
        background-color: #128c7e;
    }
</style>


<!-- Tentang Kami -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box fade-delay-1 d-flex align-items-center">
                <div class="me-4" style="flex-shrink: 0;">
                    <img src="{{ asset('images/s4.jpeg') }}" alt="Tentang Kami Image" class="img-fluid border border-primary" style="max-height: 180px; width: 180px; object-fit: cover;">
                </div>
                <div>
                    <h4 class="gradient-text ">SMK Negeri 4 Bogor</h4>
                    <hr style="border: 1px solid #2f3c52; width: 80px;"> <!-- Border dengan warna biru gelap -->
                    <p>
            
                        Merupakan sekolah kejuruan berbasis Teknologi Informasi dan Komunikasi. Sekolah ini didirikan dan dirintis pada tahun 2008 kemudian dibuka pada tahun 2009 yang saat ini terakreditasi A. 
                        Terletak di Jalan Raya Tajur Kp. Buntar, Muarasari, Bogor, sekolah ini berdiri di atas lahan seluas 12.724 m2 dengan berbagai fasilitas pendukung di dalamnya.
                        <br><br>
                        Terdapat 54 staff pengajar dan 22 orang staff tata usaha, dikepalai oleh <strong>Drs. Mulya Mulprihartono, M.Si.</strong>, sekolah ini merupakan investasi pendidikan yang tepat untuk putra/putri anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visi dan Misi -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="content-box fade-delay-3">
                <h4 class="gradient-text">Visi</h4>
                <p>"Terwujudnya SMK Pusat Keunggulan melalui terciptanya pelajar pancasila yang berbasis teknologi, berwawasan lingkungan dan berkewirausahaan."</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-box fade-delay-3">
                <h4 class="gradient-text">Misi</h4>
                <ul>
                    <li>Mewujudkan karakter pelajar pancasila beriman dan bertaqwa kepada Tuhan Yang Maha Esa dan berakhlak mulia, berkebhinekaan global, gotong royong, mandiri, kreatif dan bernalar kritis.</li>
                    <li>Mengembangkan pembelajaran dan pengelolaan sekolah berbasis Teknologi Informasi dan Komunikasi.</li>
                    <li>Mengembangkan sekolah yang berwawasan Adiwiyata Mandiri.</li>
                    <li>Mengembangkan usaha dalam berbagai bidang secara optimal sehingga memiliki kemandirian dan daya saing tinggi.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Sambutan Kepala Sekolah -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box fade-delay-2 d-flex p-3 rounded shadow bg-light">
                <div class="me-4" style="flex-shrink: 0;">
                    <img src="{{ asset('images/kepala_sekolah.jpg') }}" alt="Kepala Sekolah SMKN 4 Bogor" class="img-fluid rounded-circle" style="max-height: 200px; object-fit: cover;">
                </div>
                <div>
                    <h4 class="gradient-text">Kepala Sekolah</h4>
                    <p><strong></strong> <span class="fw-bold">Drs. Mulya Murprihartono, M.Si.</span></p>
                    <p>Kepala Sekolah Ke-3, Juli 2020 - sekarang</p>
                    <p>Sejak satu tahun lalu SMKN 4 Kota Bogor dipimpin oleh seseorang yang membawa warna baru, tahun pertama sejak dilantik, tepatnya pada tanggal 10 Juli 2020, inovasi dan kebijakan-kebijakan baru pun mulai dirancang. Bukan tanpa kesulitan, penuh tantangan tapi beliau meyakinkan untuk selalu optimis pada harapan dengan bersinergi mewujudkan visi misi SMKN 4 Bogor ditengah kesulitan pandemi ini. Strategi baru pun dimunculkan, beberapa program sudah terealisasikan diantaranya mengembangkan aplikasi LMS (Learning Management System) sebagai solusi dalam pelaksanaan program BDR (Belajar dari Rumah), untuk mengoptimalkan hubungan kerjasama antara sekolah dengan Industri dan Dunia Kerja (IDUKA), dan juga untuk pengalaman praktek belajar jarak jauh agar tetap berjalan dengan optimal./p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jurusan -->
<div class="container mt-5" id="jurusan">
    <h2 class="text-center gradient-text">Jurusan SMK Negeri 4 Bogor</h2>
    <div class="underline mx-auto mb-4"></div>
    <div class="row">
        <!-- PPLG -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="content-box text-center">
                <img src="{{ asset('images/pplg.png') }}" alt="PPLG" class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                <h4 class="mt-3 gradient-text">Pengembangan Perangkat Lunak dan Gim</h4>
                <button class="btn btn-primary mt-3" data-toggle="collapse" data-target="#pplgDesc">Lihat Selengkapnya</button>
                <div id="pplgDesc" class="collapse mt-2">
                    <p>Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) mempelajari cara membuat aplikasi perangkat lunak dan gim digital, termasuk pemrograman, desain antarmuka, dan pengembangan gim komputer.</p>
                </div>
            </div>
        </div>

        <!-- Pengelasan -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="content-box text-center">
                <img src="{{ asset('images/tflm.jpeg') }}" alt="Pengelasan" class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                <h4 class="mt-3 gradient-text">Teknik Pengelasan</h4>
                <button class="btn btn-primary mt-3" data-toggle="collapse" data-target="#pengelasanDesc">Lihat Selengkapnya</button>
                <div id="pengelasanDesc" class="collapse mt-2">
                    <p>Teknik Pengelasan dan Fabrikasi Logam, merupakan jurusan yang di dominasi oleh kaum laki-laki. Seperti namanya, kompetensi keahlian ini berfokus pada pembuatan perangkat dengan meggunakan bahan dasar logam, seperti halnya rak sepatu, tralis, lemari besi, dan lain sebagainya.</p>
                </div>
            </div>
        </div>

        <!-- Otomotif -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="content-box text-center">
                <img src="{{ asset('images/to.png') }}" alt="Otomotif" class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                <h4 class="mt-3 gradient-text">Teknik Otomotif</h4>
                <button class="btn btn-primary mt-3" data-toggle="collapse" data-target="#otomotifDesc">Lihat Selengkapnya</button>
                <div id="otomotifDesc" class="collapse mt-2">
                    <p>Jurusan Teknik Otomotif fokus pada pemeliharaan dan perbaikan kendaraan bermotor, termasuk mobil, sepeda motor, dan teknologi terbaru dalam bidang otomotif.</p>
                </div>
            </div>
        </div>

        <!-- TKJ -->
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="content-box text-center">
                <img src="{{ asset('images/tkj.png') }}" alt="TKJ" class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                <h4 class="mt-3 gradient-text">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                <button class="btn btn-primary mt-3" data-toggle="collapse" data-target="#tkjDesc">Lihat Selengkapnya</button>
                <div id="tkjDesc" class="collapse mt-2">
                    <p>Jurusan Teknik Jaringan Komputer dan Telekomunikasi (TKJ) mempelajari instalasi, pemeliharaan, dan perbaikan jaringan komputer dan telekomunikasi, baik di skala lokal maupun global.</p>
                </div>
            </div>
        </div>
    </div>
</div>

       

        
    </div>
</div>
<!-- Tombol Navigasi dengan Box -->
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-gradient-custom text-white">
        </div>
        <div class="card-body bg-light">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-image display-4 text-primary mb-3"></i>
                            <h5 class="fw-bold">Galeri</h5>
                            <p class="text-muted">Lihat foto dan dokumentasi terbaru.</p>
                            <a href="{{ route('galeri') }}" class="btn btn-custom w-100 mt-2">Lihat Galeri</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-info-circle display-4 text-info mb-3"></i>
                            <h5 class="fw-bold">Informasi</h5>
                            <p class="text-muted">Temukan informasi terkini.</p>
                            <a href="{{ route('informasi') }}" class="btn btn-custom w-100 mt-2">Lihat Informasi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-calendar-event display-4 text-success mb-3"></i>
                            <h5 class="fw-bold">Agenda</h5>
                            <p class="text-muted">Jadwal kegiatan penting sekolah.</p>
                            <a href="{{ route('agenda') }}" class="btn btn-custom w-100 mt-2">Lihat Agenda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-gradient-custom text-center text-white">
            © 2024 SMKN 4 Bogor
        </div>
    </div>
</div>

<style>
    .btn-custom {
        background: linear-gradient(to right, #0d47a1, #2196f3);
        color: white;
        border: none;
    }

    .btn-custom:hover {
        background-color: #1e58a7; /* Warna saat hover */
    }
</style>




<!-- Kontak dan Peta -->
<div class="container mt-5">
    <div class="row">
      
    <div class="col-12">
    <div class="content-box">
        <h4 class="gradient-text text-center">Peta Lokasi</h4>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4565114533897!2d106.82147500000002!3d-6.637217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMK%20Negeri%204%20Bogor%20(Nebrazka)!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>




<!-- Footer -->
<footer class="py-5" style="background: linear-gradient(90deg, #0d47a1, #1e88e5); color: white;">
    <div class="container text-center">
        <div class="row">
            <!-- Logo dan Nama Sekolah -->
            <div class="col-md-4 mb-4">

                <h5 class="fw-bold">SMKN 4 Bogor</h5>
                <p>Unggul, Kreatif, dan Inovatif</p>
            </div>
            
            <!-- Informasi Kontak -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold">Kontak Kami</h6>
                <p style="margin: 5px 0;">
                    <i class="fas fa-map-marker-alt"></i> Jl. Raya Bogor KM 4, Bogor, Jawa Barat
                </p>
                <p style="margin: 5px 0;">
                    <i class="fas fa-envelope"></i> <a href="mailto:info@smkn4bogor.sch.id" style="color: #90caf9; text-decoration: none;">info@smkn4bogor.sch.id</a>
                </p>
                <p style="margin: 5px 0;">
                    <i class="fas fa-phone-alt"></i> +62 251 1234567
                </p>
            </div>

            <!-- Media Sosial -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold">Ikuti Kami</h6>
                <div class="d-flex justify-content-center">
                    <a href="https://www.instagram.com/smkn4bogor" target="_blank" class="text-white mx-2" style="font-size: 20px;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/smkn4bogor" target="_blank" class="text-white mx-2" style="font-size: 20px;">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://wa.me/628123456789" target="_blank" class="text-white mx-2" style="font-size: 20px;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://facebook.com/smkn4bogor" target="_blank" class="text-white mx-2" style="font-size: 20px;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr style="border-color: rgba(255, 255, 255, 0.3);">
        <p class="mt-3 mb-0" style="font-size: 0.9rem;">&copy; 2024 SMKN 4 Bogor. Semua Hak Cipta Dilindungi.</p>
    </div>
</footer>

<!-- Font Awesome CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    AOS.init(); // Inisialisasi AOS
</script>
>

</body>
</html>
