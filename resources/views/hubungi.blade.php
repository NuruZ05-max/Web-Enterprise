<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        * html { scroll-behavior: smooth; }
        * { margin: 0; padding: 0; box-sizing: border-box; }

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
        
        /* Hero Section */
        .hubungi-hero {
            margin-top: 70px;
            min-height: 60vh;
            background: url('{{ asset("images/hbmsm.png") }}') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 100px;
        }

        .hubungi-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(107,45,135,0.7) 0%, rgba(74,144,226,0.7) 100%);
        }

        .hubungi-hero h1 {
            position: relative;
            z-index: 1;
            color: white;
            font-size: 56px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Form Section */
        .form-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 50px;
        }

        .form-section h2 {
            font-size: 32px;
            color: #555;
            margin-bottom: 60px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px 60px;
            margin-bottom: 40px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            padding: 15px 20px;
            border: none;
            border-bottom: 1px solid #ddd;
            background: #fafafa;
            font-size: 15px;
            color: #333;
            transition: all 0.3s;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-bottom-color: #6b2d87;
            background: white;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #ccc;
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
        }

        .btn-submit {
            background: white;
            color: #6b2d87;
            border: 2px solid #6b2d87;
            padding: 15px 60px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #6b2d87 0%, #4a90e2 100%);
            color: white;
            border-color: transparent;
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(107,45,135,0.3);
        }

        /* Location Section */
        .location-section {
            max-width: 1200px;
            margin: 100px auto 80px;
            padding: 0 50px;
        }

        .location-section h2 {
            font-size: 32px;
            color: #555;
            margin-bottom: 60px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .location-item {
            margin-bottom: 60px;
        }

        .location-item h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .location-item p {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            margin: 8px 0;
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

            .hubungi-hero {
                min-height: 40vh;
                padding-left: 30px;
            }

            .hubungi-hero h1 {
                font-size: 36px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .form-group.full-width {
                grid-column: 1;
            }

            .form-actions {
                justify-content: center;
            }

            .btn-submit {
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
                <a href="{{ url('/tentang') }}">Tentang Kami</a>
                <a href="{{ url('/layanan') }}">Layanan Kami</a>
                <a href="{{ url('/artikel') }}">Artikel</a>
                <a href="{{ url('/hubungi') }}" class="active">Hubungi Kami</a>
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
    <section class="hubungi-hero">
        <h1>HUBUNGI KAMI</h1>
    </section>

    <!-- Form Kirim Pesan -->
    <section class="form-section">
        <h2>KIRIM PESAN</h2>

        <!-- Perbaiki form: id contactForm, method POST ke route hubungi.kirim -->
        <form id="contactForm" method="POST" action="{{ route('hubungi.kirim') }}">
            @csrf

            <div id="contact-success" style="display:none; color:green; margin-bottom:16px;"></div>
            <div id="contact-error" style="display:none; color:red; margin-bottom:16px;"></div>

            <div class="form-grid">
                <!-- Nama -->
                <div class="form-group">
                    <label for="nama">Nama*</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">E-Mail*</label>
                    <input type="email" id="email" name="email" placeholder="Alamat E-mail Anda" required>
                </div>

                <!-- Perusahaan -->
                <div class="form-group">
                    <label for="perusahaan">Perusahaan / Organisasi</label>
                    <input type="text" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan / organisasi">
                </div>

                <!-- Telepon -->
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="tel" id="telepon" name="telepon" placeholder="Nomor telepon Anda">
                </div>

                <!-- Isi Pesan -->
                <div class="form-group full-width">
                    <label for="pesan">Isi Pesan*</label>
                    <textarea id="pesan" name="pesan" placeholder="Isi pesan Anda ..." required></textarea>
                </div>
            </div>

            <div class="col-md-6 mb-3 mb-md-0">
                <div id="recaptcha-error" style="display:none;color:red;margin-bottom:8px;">Mohon selesaikan reCAPTCHA.</div>
                <div class="g-recaptcha" data-sitekey="6Lf05gMsAAAAAFFgLrTQoJWHjMlKizgGFe2SJS1h"></div>
            </div>

            <!-- Submit Button -->
            <div class="form-actions">
                <button type="submit" id="submitBtn" class="btn-submit">KIRIM PESAN</button>
            </div>
        </form>
    </section>

    <!-- Location Section -->
    <section class="location-section">
        <h2>LOKASI KAMI</h2>

        <!-- Kantor Pusat -->
        <div class="location-item">
            <h3>KANTOR PUSAT</h3>
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>

        <!-- Kantor Cabang -->
        <div class="location-item">
            <h3>KANTOR CABANG</h3>
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>

    <!-- Bootstrap JS -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const recaptchaError = document.getElementById('recaptcha-error');
        const contactSuccess = document.getElementById('contact-success');
        const contactError = document.getElementById('contact-error');

        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            // reCAPTCHA check
            const recaptchaResponse = grecaptcha.getResponse();
            if (!recaptchaResponse) {
                recaptchaError.style.display = 'block';
                recaptchaError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                setTimeout(() => recaptchaError.style.display = 'none', 5000);
                return;
            }

            submitBtn.disabled = true;
            submitBtn.textContent = 'Mengirim...';

            const formData = new FormData(contactForm);
            formData.append('g-recaptcha-response', recaptchaResponse);

            try {
                const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const resp = await fetch(contactForm.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': token,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await resp.json();

                if (resp.ok && data.success) {
                    contactSuccess.textContent = data.message || 'Pesan berhasil dikirim.';
                    contactSuccess.style.display = 'block';
                    contactError.style.display = 'none';
                    contactForm.reset();
                    grecaptcha.reset();
                } else {
                    contactError.textContent = data.message || (data.errors ? Object.values(data.errors).flat().join(' ') : 'Terjadi kesalahan.');
                    contactError.style.display = 'block';
                    contactSuccess.style.display = 'none';
                }
            } catch (err) {
                contactError.textContent = 'Gagal mengirim pesan. Silakan coba lagi.';
                contactError.style.display = 'block';
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'KIRIM PESAN';
            }
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>