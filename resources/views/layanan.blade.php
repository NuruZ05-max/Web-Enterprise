<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami - Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       html {
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

        /* Layanan Page Styles */
        .layanan-hero {
            margin-top: 70px;
            min-height: 60vh;
            background: url('{{ asset("images/gatescambride.png") }}') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 100px;
        }

        .layanan-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(107,45,135,0.7) 0%, rgba(74,144,226,0.7) 100%);
        }

        .layanan-hero h1 {
            position: relative;
            z-index: 1;
            color: white;
            font-size: 56px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .layanan-content-section {
            max-width: 1500px;
            margin: 80px auto;
            padding: 0 50px;
        }

        .layanan-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .layanan-item {
            position: relative;
            height: 450px;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .layanan-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .layanan-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .layanan-item-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                rgba(107,45,135,0.85) 0%, 
                rgba(107,45,135,0.75) 15%, 
                rgba(74,144,226,0.6) 40%, 
                rgba(74,144,226,0.4) 60%, 
                transparent 80%
            );
            display: flex;
            align-items: flex-end;
            padding: 35px;
        }

        .layanan-item-overlay::before {
            content: '';
            position: absolute;
            top: 35px;
            left: 35px;
            width: 2px;
            height: calc(100% - 140px);
            background: rgba(255, 255, 255, 0.4);
        }

        .layanan-item h3 {
            position: relative;
            color: white;
            font-size: 30px;
            font-weight: 300;
            margin: 0;
            z-index: 2;
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

        footer p {
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .layanan-grid {
                grid-template-columns: repeat(2, 1fr);
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

            .layanan-hero {
                padding-left: 30px;
                min-height: 40vh;
            }

            .layanan-hero h1 {
                font-size: 36px;
            }

            .layanan-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .layanan-item {
                height: 350px;
            }

            .layanan-item h3 {
                font-size: 24px;
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
                <a href="{{ url('/') }}#artikel">Artikel</a>
                <a href="{{ url('/') }}#hubungi">Hubungi Kami</a>
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

    <!-- Hero Section -->
    <section class="layanan-hero">
        <h1>LAYANAN KAMI</h1>
    </section>

    <!-- Layanan Content Section -->
    <section class="layanan-content-section">
        <div class="layanan-grid">
            <!-- Layanan 1: Studi S1 - Bachelor -->
            <div class="layanan-item">
                <img src="{{ asset('images/bachelor.png') }}" alt="Studi S1">
                <div class="layanan-item-overlay">
                    <h3>Studi S1 - Bachelor</h3>
                </div>
            </div>

            <!-- Layanan 2: Studi S2 - Master -->
            <div class="layanan-item">
                <img src="{{ asset('images/master.png') }}" alt="Studi S2">
                <div class="layanan-item-overlay">
                    <h3>Studi S2 - Master</h3>
                </div>
            </div>

            <!-- Layanan 3: Kursus Bahasa Asing -->
            <div class="layanan-item">
                <img src="{{ asset('images/kursus.png') }}" alt="Kursus">
                <div class="layanan-item-overlay">
                    <h3>Kursus Bahasa Asing</h3>
                </div>
            </div>

            <!-- Layanan 4: Studi S3 - Ph.D -->
            <div class="layanan-item">
                <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3">
                <div class="layanan-item-overlay">
                    <h3>Studi S3 - Ph.D</h3>
                </div>
            </div>

            <!-- Layanan 5: Study Tour -->
            <div class="layanan-item">
                <img src="{{ asset('images/studytour.png') }}" alt="Study Tour">
                <div class="layanan-item-overlay">
                    <h3>Study Tour</h3>
                </div>
            </div>

            <!-- Layanan 6: Ausbildung -->
            <div class="layanan-item">
                <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
                <div class="layanan-item-overlay">
                    <h3>Ausbildung</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section (sama seperti di home) -->
    <section class="hubungi-section" id="hubungi" style="margin-top: 120px;">
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