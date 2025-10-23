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
    font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif
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

nav a:hover {
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


.hero {
    margin-top: 70px;
    min-height: calc(100vh - 70px);
    height: auto;
    position: relative;
    overflow: hidden;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(107,45,135,0.1) 0%, rgba(59,75,168,0.1) 40%, transparent 70%);
}

.hero-content {
    position: relative;
    z-index: 10;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 50px;
    min-height: calc(100vh - 70px);
    display: flex;
    align-items: flex-end;
    padding-bottom: 60px;
}

.hero-text {
    max-width: 450px;
    background: linear-gradient(135deg, rgba(107,45,135,0.9) 0%, rgba(59,75,168,0.85) 50%, rgba(74,144,226,0.8) 100%);
    padding: 50px 40px;
    border-radius: 0px;
    max-width: 900px;
    position: relative;
    padding-left: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
}

.hero-text::before {
            content: '';
            position: absolute;
            left: 35px;
            top: 0;
            width: 1px;
            height: 80%;
            background: white;
            opacity: 50%;
}

.hero-text h1 {
    color: white;
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    line-height: 1.5;
    flex: 1;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.dropdown-container {
    background: transparent;
    color: white;
    padding: 20px 48px;
    padding-right: 60px;
    border: 1.5px solid white;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 1000;
    display: inline-flex;
    align-items: center;
    gap: 30px;
    transition: all 0.3s;
    white-space: nowrap;
    margin-left: 35px;
    text-transform: uppercase;
    font-size:23px;
    position: relative;
}

.dropdown-container:hover {
    background: rgba(255,255,255,0.3);
}

.dropdown-container select {
    background: transparent;
    border: none;
    outline: none;
    color: white;
    font-weight: bold;
    font-size: 14px;
    cursor: pointer;
}

.dropdown-container select option {
    color: #333;
    background: white;
}


/* Section Tentang Kami */
.tentang-section {
    max-width: 1400px;
    margin: 80px auto;
    padding: 30px 50px;
    text-align: center;
}

.tentang-section h2 {
    font-size: 2.1rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 2.4rem;
    text-align: center;
}

.tentang-section p {
    font-size: 1.3rem;
    line-height: 1.8;
    color: #555;
    text-align: center;
    max-width: 1100px;
    margin: 0 auto;
}

/* Section Layanan Kami */
.layanan-section {
    max-width: 1400px;
    margin: 80px auto;
    padding: 0 50px;
}

.layanan-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 50px;
}

.layanan-card {
    position: relative;
    height: 320px;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s;
}

.layanan-card:hover {
    transform: translateY(-10px);
}

.layanan-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.layanan-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(107,45,135,0.7) 0%, rgba(74,144,226,0.7) 10%, transparent 80%);
    display: flex;
    align-items: flex-end;
    padding: 25px 35px;
}

.layanan-card h3 {
    color: white;
    font-size: 28px;
    font-weight: 200;
    margin-bottom: 5.1rem;
    text-align: center;
    font-family: 'Ubuntu', sans-serif;
    padding-left: 15px;
}

.layanan-title::before {
    content: '';
    position: absolute;
    bottom: 0;  
    left: 0;
    right: 0;
    width: 2px;  
    height: 100%;  
    background: white;
    background: rgba(255, 255, 255, 0.3);
}

/* Section Mitra */
.mitra-section {
    max-width: 1400px;
    margin: 80px auto;
    padding: 0 50px;
}

.mitra-section h2 {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-bottom: 50px;
}

.mitra-logos {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.mitra-logo {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 150px;
    transition: transform 0.3s;
}

.mitra-logo:hover {
    transform: translateY(-5px);
}

.mitra-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

/* Section Konsultasi */
.konsultasi-banner {
    max-width: 1400px;
    margin: 80px auto;
    padding: 0 50px;
}

.konsultasi-box {
    background: linear-gradient(135deg, #6b2d87 0%, #4a90e2 100%);
    border-radius: 15px;
    padding: 40px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.konsultasi-text h2 {
    color: white;
    font-size: 32px;
    margin-bottom: 10px;
}

.konsultasi-text p {
    color: white;
    font-size: 16px;
}

.btn-konsultasi {
    background: white;
    color: #6b2d87;
    border: none;
    padding: 15px 40px;
    border-radius: 30px;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
}

.btn-konsultasi:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 20px rgba(255,255,255,0.3);
}

/* Section Artikel */
.artikel-section {
    max-width: 1400px;
    margin: 80px auto;
    padding: 0 50px;
}

.artikel-section h2 {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-bottom: 50px;
}

.artikel-cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.artikel-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}

.artikel-card:hover {
    transform: translateY(-10px);
}

.artikel-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.artikel-card h3 {
    padding: 20px 25px;
    font-size: 20px;
    color: #333;
    text-align: center;
}

.btn-artikel {
    display: block;
    margin: 0 auto;
    background: white;
    color: #6b2d87;
    border: 2px solid #6b2d87;
    padding: 12px 50px;
    border-radius: 30px;
    font-weight: bold;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s;
}

.btn-artikel:hover {
    background: #6b2d87;
    color: white;
}

/* Section Hubungi Kami */
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

    .hero-text h1 {
        font-size: 24px;
    }

    .hero-text h2 {
        font-size: 20px;
    }

    .hero-text {
        max-width: 350px;
    }

    .layanan-cards {
        grid-template-columns: 1fr;
    }

    .mitra-logos {
        grid-template-columns: repeat(2, 1fr);
    }

    .konsultasi-box {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }

    .artikel-cards {
        grid-template-columns: 1fr;
    }

    .hubungi-buttons {
        flex-direction: column;
        align-items: center;
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
                <a href="#artikel">Artikel</a>
                <a href="#hubungi">Hubungi Kami</a>
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

    <!-- Hero Section -->
    <section class="hero" id="home" style="background: url('{{ asset('images/picgedung.png') }}') center/cover no-repeat;">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-text">
                <h1>INGIN KULIAH DAN BERKARIR <br> DI LUAR NEGERI ? </h1>
                <div class="dropdown-container">
                    <select>
                        <option>SELENGKAPNYA</option>
                        <option>LAYANAN KONSULTASI</option>
                        <option>PROGRAM BEASISWA</option>
                        <option>PANDUAN APLIKASI</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="tentang-section" id="tentang">
        <h2>TENTANG KAMI</h2>
        <p>
            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah <br> 
            memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan <br>
            wisata dan berkarir di negara maju di dunia.
        </p>
    </section>

    <!-- Layanan Kami Section -->
    <section class="layanan-section" id="layanan">
        <h2 style="text-align: center; font-size: 36px; color: #333; margin-bottom: 20px;">LAYANAN KAMI</h2>
        <div class="layanan-cards">
            <div class="layanan-card">
                <img src="{{ asset('images/bachelor.png') }}" alt="Studi S1">
                <div class="layanan-overlay">
                    <h3>Studi S1 - Bachelor</h3>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/master.png') }}" alt="Studi S2">
                <div class="layanan-overlay">
                    <h3>Studi S2 - Master</h3>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3">
                <div class="layanan-overlay">
                    <h3>Studi S3 - Ph.D</h3>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/kursus.png') }}" alt="Kursus">
                <div class="layanan-overlay">
                    <h3>Kursus Bahasa Asing</h3>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/studytour.png') }}" alt="Study Tour">
                <div class="layanan-overlay">
                    <h3>Study Tour</h3>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
                <div class="layanan-overlay">
                    <h3>Ausbildung</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Mitra Kami Section -->
    <section class="mitra-section">
        <h2>MITRA KAMI</h2>
        <div class="mitra-logos">
            <div class="mitra-logo">
                <img src="{{ asset('images/aviation.jpg') }}" alt="424 Aviation">
            </div>
            <div class="mitra-logo">
                <img src="{{ asset('images/Adrew.png') }}" alt="St Andrews College">
            </div>
            <div class="mitra-logo">
                <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
            </div>
            <div class="mitra-logo">
                <img src="{{ asset('images/studygroup.png') }}" alt="Study Group">
            </div>
        </div>
    </section>

    <!-- Konsultasi Banner -->
    <section class="konsultasi-banner">
        <div class="konsultasi-box">
            <div class="konsultasi-text">
                <h2>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h2>
                <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
            </div>
            <button class="btn-konsultasi">MULAI KONSULTASI</button>
        </div>
    </section>

    <!-- Artikel Section -->
    <section class="artikel-section" id="artikel">
        <h2>ARTIKEL TERBARU</h2>
        <div class="artikel-cards">
            <div class="artikel-card">
                <img src="{{ asset('images/studijerman.png') }}" alt="Artikel 1">
                <h3>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h3>
            </div>
            <div class="artikel-card">
                <img src="{{ asset('images/korona.png') }}" alt="Artikel 2">
                <h3>Uni Eropa Menghadapi Virus Korona</h3>
            </div>
            <div class="artikel-card">
                <img src="{{ asset('images/bahasajerman.png') }}" alt="Artikel 3">
                <h3>Belajar Bahasa Jerman Bersama Goethe Insistut</h3>
            </div>
            <div class="artikel-card">
                <img src="{{ asset('images/gatescambride.png') }}" alt="Artikel 4">
                <h3>Apa Itu Gates Cambridge? Yuk Cari Tahu</h3>
            </div>
        </div>
        <button class="btn-artikel">ARTIKEL LAINNYA</button>
    </section>

    <!-- Hubungi Kami Section -->
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
    <footer>
        <p>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>
</body>
</html>
