<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang - Inaklug</title>
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
        nav a.active { /* Menambahkan .active untuk halaman tentang */
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

        /* Penyesuaian untuk halaman Tentang Kami */
        .tentang-hero {
            margin-top: 70px;
            min-height: 60vh;
            background: url('{{ asset("images/studytour.png") }}') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tentang-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(107,45,135,0.7) 0%, rgba(59,75,168,0.7) 50%, rgba(74,144,226,0.7) 100%);
        }

        .tentang-hero h1 {
            position: relative;
            z-index: 1;
            color: white;
            font-size: 48px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }

        .profil-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 50px;
        }

        .profil-section h2 {
            font-size: 2.1rem; /* Menggunakan ukuran font dari h2 di halaman home */
            font-weight: 600;
            color: #333;
            margin-bottom: 2.4rem;
            text-align: center; /* Menyelaraskan dengan gaya halaman home */
        }

        .profil-section p {
            font-size: 1.3rem; /* Menyelaraskan dengan gaya halaman home */
            line-height: 1.8;
            color: #555;
            text-align: justify; /* Menjaga teks rapi */
            max-width: 1100px;
            margin: 0 auto 15px auto;
        }

        .visi-misi-section {
            max-width: 1400px;
            margin: 80px auto;
            padding: 0 50px;
        }

        .visi-misi-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 60px; /* ✅ Perbesar gap antar card */
            margin-top: 50px;
        }

        .visi-card, .misi-card {
            background: transparent; /* ✅ Hilangkan background putih */
            border-radius: 0; /* ✅ Hilangkan border radius card */
            overflow: visible; /* ✅ Ubah dari hidden */
            box-shadow: none; /* ✅ Hilangkan shadow card */
            display: flex;
            flex-direction: column;
            gap: 25px; /* ✅ Jarak antara gambar dan content */
        }

        .visi-image, .misi-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px; /* ✅ Border radius di gambar saja */
            box-shadow: 0 4px 20px rgba(0,0,0,0.1); /* ✅ Shadow di gambar */
        }

        .visi-content, .misi-content {
            padding: 0; /* ✅ Hilangkan padding, karena tidak ada background */
            background: transparent;
        }

        .visi-content h3, .misi-content h3 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: left; /* ✅ Rata kiri untuk judul */
        }

        .visi-content p, .misi-content p {
            font-size: 18px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
            text-align: justify; /* ✅ Rata kanan-kiri untuk paragraf */
        }

        .btn-layanan {
            display: inline-block;
            margin: 50px auto 0 auto;
            background: white;
            color: #6b2d87;
            border: 2px solid #6b2d87;
            padding: 15px 60px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s;
            text-transform: uppercase;
        }

        .btn-layanan:hover {
            background: linear-gradient(135deg, #6b2d87 0%, #4a90e2 100%);
            color: white;
            border-color: transparent;
        }

        .text-center {
            text-align: center;
            margin-top: 40px; /* ✅ Tambah margin top untuk button */
        }

        @media (max-width: 768px) {
            .visi-misi-container {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            .visi-image, .misi-image {
                height: 250px;
            }
            
            .visi-content h3, .misi-content h3 {
                font-size: 26px;
                text-align: center; /* Center di mobile */
            }
            
            .visi-content p, .misi-content p {
                font-size: 16px;
            }
        }

        /* Section Hubungi Kami (Mengambil sepenuhnya dari kode pertama) */
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

        /* Footer (Mengambil sepenuhnya dari kode pertama) */
        footer {
            background: linear-gradient(135deg, #4a1a5c 0%, #2d4a8a 100%);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        footer p {
            margin: 0;
        }

        /* Responsive (Mengambil sepenuhnya dari kode pertama, dengan penyesuaian untuk Tentang page) */
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

            .tentang-hero h1 {
                font-size: 32px;
                padding: 0 20px;
            }

            .visi-misi-container {
                grid-template-columns: 1fr;
            }

            .hubungi-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn-lokasi, .btn-pesan {
                width: 100%;
                max-width: 300px;
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
    <a href="{{ url('/tentang') }}" class="active">Tentang Kami</a>
    <a href="{{ url('/layanan') }}#layanan">Layanan Kami</a>
    <a href="{{ url('/artikel') }}#artikel">Artikel</a>
    <a href="{{ url('/hubungi') }}#hubungi">Hubungi Kami</a>

    <div class="search-box">
        <form class="search-form" role="search">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="search-icon" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            <input class="search-input" type="search" placeholder="Ketik pencarian">
        </form>
    </div>

    <a href="#" class="btn-daftar">DAFTAR ON-LINE</a>
</nav>


        </div>
    </header>

    <section class="tentang-hero">
        <h1>TENTANG KAMI</h1>
    </section>

    <section class="profil-section">
        <h2>PROFIL</h2>
        <p>
            Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional 
            yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak 
            muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
        </p>
    </section>

    <section class="visi-misi-section">
        <div class="visi-misi-container">
            <div class="visi-card">
                <img src="{{ asset('images/visi.png') }}" alt="Visi" class="visi-image">
                <div class="visi-content">
                    <h3>VISI</h3>
                    <p>
                        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional 
                        untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa 
                        depan yang tangguh, mandiri, dan profesional
                    </p>
                </div>
            </div>

            <div class="misi-card">
                <img src="{{ asset('images/misi.png') }}" alt="Misi" class="misi-image">
                <div class="misi-content">
                    <h3>MISI</h3>
                    <p>
                        Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan tinggi di lebih 
                        dari 25 negara maju di dunia dengan layanan yang profesional
                    </p>
                    <p>
                        Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari 
                        berbagai aspek, baik aspek sosial, budaya, maupun pendidikan
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ url('/layanan') }}#layanan" class="btn-layanan">LAYANAN KAMI</a>
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

    <footer>
        <p>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>
</body>
</html>