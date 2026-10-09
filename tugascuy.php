<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kredit Mobil - Ropek Wheels</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }


        .navbar-logo {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 8px;
        }


        .slider-box {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .slider-box img {
            width: 100%;
            height: 380px;
            object-fit: cover;
        }


        .info-card {
            background-color: #ffffff;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .info-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .info-card .card-body {
            padding: 1.5rem;
        }

        .calculator-card {
            background: #ffffff;
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 0.65rem 1rem;
            border: 1px solid #dee2e6;
        }

        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        .tenor-box {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 12px;
        }

        .btn-primary {
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
        }


        .result-box {
            background: linear-gradient(135deg, #f0fdf4 0%, #e6f4ea 100%);
            border: 1px solid #b7ebc6;
            border-left: 6px solid #198754;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(25, 135, 84, 0.08);
        }

        .result-title {
            color: #146c43;
            font-weight: 700;
            font-size: 1.2rem;
        }

        /* Footer */
        footer {
            background-color: #1e293b;
            color: #cbd5e1;
        }

        footer a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.2s;
        }

        footer a:hover {
            color: #ffffff;
        }
    </style>
</head>

<body>

    <!-- NAVBAR ini -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top shadow-sm py-2">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img class="navbar-logo" src="../asset/logo.png" alt="Ropek Wheels Logo">
                <span class="fw-bold text-primary fs-5">Ropek Wheels</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto gap-lg-3 fw-semibold">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4">

        <!-- CAROUSEL SLIDERnya -->
        <div id="companySlider" class="carousel slide slider-box mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../asset/1.png" alt="Mobil baru terbaik">
                </div>
                <div class="carousel-item">
                    <img src="../asset/2.png" alt="Showroom mobil">
                </div>
                <div class="carousel-item">
                    <img src="../asset/Pur Sport.png" alt="Promo kredit mobil">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#companySlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#companySlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- CARDS ini -->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="info-card">
                    <img src="../asset/4.png" alt="Tentang Perusahaan">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark mb-2">Tentang Perusahaan</h5>
                        <p class="text-muted small mb-0">Perusahaan yang bergerak di bidang otomotif, berfokus pada penyediaan unit kendaraan berkualitas tinggi serta solusi modifikasi roda dan velg premium. Berdiri dengan komitmen untuk memberikan kenyamanan, keamanan, dan gaya bagi setiap pengendara.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-card">
                    <img src="../asset/5.png" alt="Gambar mobil">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark mb-2">Pelayanan Berbasis Solusi</h5>
                        <p class="text-muted small mb-0">Membantu setiap pelanggan menemukan kendaraan dan penataan <i>wheels</i> yang presisi sesuai kebutuhan serta anggaran melalui layanan konsultasi yang profesional dan terpercaya.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- KALKULATOR cuy -->
        <div class="card calculator-card mb-4">
            <div class="card-body p-4">
                <h4 class="fw-bold text-dark mb-3"><i class="bi bi-calculator text-primary me-2"></i>Simulasi Kredit Mobil</h4>
                <form action="proses.php" method="post">

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                    </div>

                    <div class="mb-3">
                        <label for="hargamobil" class="form-label fw-semibold">Harga Mobil (Rp)</label>
                        <input type="number" class="form-control" id="hargamobil" name="hargamobil" placeholder="Contoh: 250000000" required>
                    </div>

                    <div class="mb-3">
                        <label for="dp" class="form-label fw-semibold">Uang Muka (DP %)</label>
                        <select class="form-select" name="dp" id="dp">
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                            <option value="30">30%</option>
                            <option value="40">40%</option>
                            <option value="50">50%</option>
                            <option value="60">60%</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold d-block">Jangka Waktu (Tenor)</label>
                        <div class="tenor-box">
                            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-2">
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="tenor" id="tenor1" value="1">
                                    <label class="form-check-label" for="tenor1">1 Tahun</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="tenor" id="tenor2" value="2" checked>
                                    <label class="form-check-label" for="tenor2">2 Tahun</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="tenor" id="tenor3" value="3">
                                    <label class="form-check-label" for="tenor3">3 Tahun</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="tenor" id="tenor4" value="4">
                                    <label class="form-check-label" for="tenor4">4 Tahun</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="tenor" id="tenor5" value="5">
                                    <label class="form-check-label" for="tenor5">5 Tahun</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 shadow-sm" name="hitung" value="1">
                        <i class="bi bi-calculator-fill me-1"></i> Hitung Angsuran
                    </button>
                </form>
            </div>
        </div>

    <!-- FOOTER -->
    <footer class="pt-5 pb-4">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img class="navbar-logo" src="../asset/logo.png" alt="Ropek Wheels Logo">
                        <span class="fs-5 fw-bold text-white">Ropek Wheels</span>
                    </div>
                    <p class="small text-slate-400 mb-0" style="color: #94a3b8;">Layanan kalkulator simulasi pembiayaan mobil dengan perhitungan cepat, mudah, dan akurat untuk membantu perencanaan finansial Anda.</p>
                </div>
                <div class="col-md-3">
                    <h6 class="text-white fw-bold mb-3">Navigasi</h6>
                    <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Perusahaan</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="text-white fw-bold mb-3">Kontak Kami</h6>
                    <p class="small mb-2" style="color: #94a3b8;"><i class="bi bi-geo-alt me-2 text-primary"></i> Jl. Karangduren, Kec. Tengaran, Kab. Semarang</p>
                    <p class="small mb-0" style="color: #94a3b8;"><i class="bi bi-envelope me-2 text-primary"></i> info@RopekWheels.com</p>
                </div>
            </div>
            <hr class="border-secondary opacity-25 my-4">
            <div class="text-center small" style="color: #94a3b8;">
                &copy; <?= date('Y'); ?> Ropek Wheels. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>