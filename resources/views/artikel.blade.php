<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug - Pendidikan dan Karir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif;
            overflow-x: hidden;
            overflow-y: auto;
        }

        header {
            background: linear-gradient(135deg, #6b2d87 0%, #3b4ba8 50%, #4a90e2 100%);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .logo-icon {
            width: 35px;
            height: 35px;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b2d87;
            font-size: 20px;
        }

        .logo-image {
            width: 40px;
            height: 40px;
            object-fit: contain;
            display: block;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
            padding-bottom: 5px;
            border-bottom: 2px solid transparent;
        }

        nav a:hover,
        nav a.active { 
            border-bottom-color: white;
        }

        .search-box {
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
            padding-bottom: 5px;
            gap: 8px;
            background: transparent;
        }

        .search-box .search-icon {
            color: white;
            font-size: 16px;
        }

        .search-box input {
            background: transparent;
            border: none;
            outline: none;
            color: white;
            width: 180px;
            font-size: 14px;
        }

        .search-box input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        .btn-daftar {
            background: #195395;
            border: 2px solid rgba(255, 255, 255, 0.5);
            color: white;
            padding: 10px 28px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 17px;
            transition: all 0.3s;
            text-transform: uppercase;
            white-space: nowrap;
            text-decoration: none;
            display: inline-block;
            margin-right: 1.8rem;
        }

        .btn-daftar:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: white;
            color: white;
        }

        /* Hero Banner Article */
        .artikel-hero {
            margin-top: 70px;
            height: 600px;
            position: relative;
            overflow: hidden;
        }

        .artikel-hero-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .artikel-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, 
                rgba(107,45,135,0.6) 0%, 
                rgba(59,75,168,0.6) 40%, 
                rgba(74,144,226,0.6) 70%, 
                rgba(255,200,100,0.3) 100%
            );
            display: flex;
            align-items: flex-end;
            padding: 60px 80px;
        }

        .artikel-hero-content {
            max-width: 800px;
        }

        .artikel-hero-label {
            display: inline-block;
            color: white;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .artikel-hero-title {
            color: white;
            font-size: 42px;
            font-weight: 700;
            line-height: 1.3;
            margin: 0;
        }

        /* Featured Articles Section */
        .featured-section {
            max-width: 1400px;
            margin: 80px auto;
            padding: 0 50px;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
        }

        .featured-card {
            background: transparent;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .featured-card:hover {
            transform: translateY(-10px);
        }

        .featured-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .featured-card h3 {
            font-size: 22px;
            color: #333;
            line-height: 1.4;
            margin: 0;
            font-weight: 500;
        }

        /* Latest Articles Section */
        .latest-section {
            max-width: 1400px;
            margin: 100px auto 80px;
            padding: 0 50px;
        }

        .latest-section h2 {
            font-size: 32px;
            color: #666;
            margin-bottom: 50px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .latest-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .latest-card {
            display: flex;
            gap: 30px;
            background: white;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .latest-card:hover {
            transform: translateX(10px);
        }

        .latest-card-image {
            flex: 0 0 400px;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .latest-card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .latest-card-content h3 {
            font-size: 26px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 500;
            line-height: 1.4;
        }

        .latest-card-meta {
            font-size: 14px;
            color: #999;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin: 60px 0;
        }

        .pagination button {
            background: white;
            border: none;
            color: #999;
            width: 50px;
            height: 50px;
            border-radius: 50%; /* ✅ Ubah jadi bulat penuh */
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1); /* ✅ Tambah shadow */
        }

        .pagination button:hover {
            background: linear-gradient(135deg, #6b2d87 0%, #4a90e2 100%);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(107,45,135,0.3);
        }

        .pagination button.active {
            background: linear-gradient(135deg, #6b2d87 0%, #4a90e2 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(107,45,135,0.4);
        }

        /* Button Previous & Next (Arrow) */
        .pagination .btn-prev,
        .pagination .btn-next {
            background: transparent;
            border: none;
            color: #999;
            width: auto;
            height: auto;
            border-radius: 0;
            font-size: 24px;
            padding: 10px;
            box-shadow: none;
        }

        .pagination .btn-prev:hover,
        .pagination .btn-next:hover {
            background: transparent;
            color: #6b2d87;
            transform: translateX(0);
            box-shadow: none;
        }

        .hubungi-section {
            max-width: 1400px;
            margin: 80px auto 40px;
            padding: 0 50px;
            text-align: center;
        }

        .hubungi-section h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .hubungi-section h3 {
            font-size: 28px;
            color: #666;
            margin-bottom: 30px;
        }

        .hubungi-info {
            margin-bottom: 40px;
        }

        .hubungi-info p {
            color: #666;
            font-size: 16px;
            margin: 8px 0;
        }

        .hubungi-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 80px;
        }

        .btn-lokasi {
            background: linear-gradient(135deg, #6b2d87 0%, #4a90e2 100%);
            color: white;
            border: none;
            padding: 15px 50px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-pesan {
            background: white;
            color: #6b2d87;
            border: 2px solid #6b2d87;
            padding: 15px 50px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-lokasi:hover, .btn-pesan:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #4a1a5c 0%, #2d4a8a 100%);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            margin-top: 80px;
        }

        footer p {
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .featured-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .latest-card {
                flex-direction: column;
            }

            .latest-card-image {
                flex: 1;
                width: 100%;
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .artikel-hero {
                height: 400px;
            }

            .artikel-hero-overlay {
                padding: 40px 30px;
            }

            .artikel-hero-title {
                font-size: 28px;
            }

            .featured-card img {
                height: 250px;
            }

            .featured-card h3 {
                font-size: 18px;
            }

            .latest-card-content h3 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body style="background: white;">
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="{{ asset('images/inaklug.png') }}" alt="Logo Inaklug" class="logo-image">
                <span>Inaklug</span>
            </div>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/tentang') }}">Tentang Kami</a>
                <a href="{{ url('/layanan') }}">Layanan Kami</a>
                <a href="{{ url('/artikel') }}">Artikel</a>
                <a href="{{ url('/hubungi') }}">Hubungi Kami</a>
                <div class="search-box">
                    <form class="search-form" role="search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="search-icon" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        <input class="search-input" type="search" placeholder="Ketik pencarian">
                    </form>
                </div>

                <button class="btn-daftar">DAFTAR ON-LINE</button>
            </nav>
        </div>
     </header>

    <!-- Hero Banner -->
    <section class="artikel-hero">
        <img src="{{ asset('images/teacharc.png') }}" alt="Hero" class="artikel-hero-bg">
        <div class="artikel-hero-overlay">
            <div class="artikel-hero-content">
                <span class="artikel-hero-label">TIPS</span>
                <h1 class="artikel-hero-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h1>
            </div>
        </div>
    </section>

    <!-- Featured Articles -->
    <section class="featured-section">
        <div class="featured-grid">
            <div class="featured-card">
                <img src="{{ asset('images/tupai.png') }}" alt="Featured 1">
                <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            </div>
            <div class="featured-card">
                <img src="{{ asset('images/becak.png') }}" alt="Featured 2">
                <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            </div>
        </div>
    </section>

    <!-- Latest Articles -->
    <section class="latest-section">
        <h2>ARTIKEL TERBARU</h2>
        <div class="latest-grid">
            <!-- Article 1 -->
            <div class="latest-card">
                <img src="{{ asset('images/neonarc.png') }}" alt="Article 1" class="latest-card-image">
                <div class="latest-card-content">
                    <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="latest-card-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="latest-card">
                <img src="{{ asset('images/foodarc.png') }}" alt="Article 2" class="latest-card-image">
                <div class="latest-card-content">
                    <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="latest-card-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="latest-card">
                <img src="{{ asset('images/tropicarc.png') }}" alt="Article 3" class="latest-card-image">
                <div class="latest-card-content">
                    <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="latest-card-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="latest-card">
                <img src="{{ asset('images/streetsarc.png') }}" alt="Article 4" class="latest-card-image">
                <div class="latest-card-content">
                    <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="latest-card-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <button>←</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>→</button>
        </div>
    </section> 

    <section class="hubungi-section" id="hubungi">
        <h2>HUBUNGI KAMI</h2>
        <h3>KANTOR PUSAT</h3>
        <div class="hubungi-info">
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>
        <div class="hubungi-buttons">
            <button class="btn-lokasi">LOKASI KAMI</button>
            <button class="btn-pesan">KIRIM PESAN</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>