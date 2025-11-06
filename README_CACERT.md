Setup: cacert.pem (Windows dev) — why and how

Masalah

Di Windows development environment, PHP/cURL sering gagal memverifikasi sertifikat HTTPS karena tidak menemukan file CA bundle (`cacert.pem`). Error tipikal: `cURL error 60: SSL certificate problem: unable to get local issuer certificate` saat memanggil https://www.google.com/recaptcha/api/siteverify.

Solusi langkah demi langkah

1) Unduh `cacert.pem` ke root project (direkomendasikan)

- Jalankan PowerShell pada root project dan eksekusi skrip berikut:

```powershell
# dari folder project
.\scripts\download-cacert.ps1
```

Skrip akan mengunduh file `cacert.pem` ke folder root proyek.

2) Set path di .env (opsional tetapi direkomendasikan)

Tambahkan baris berikut ke file `.env`:

```
CACERT_PATH="C:\\full\\path\\to\\project\\cacert.pem"
RECAPTCHA_SECRET=your_recaptcha_secret_here
```

Ganti path sesuai lokasi sebenarnya. Perhatikan bahwa di Windows path menggunakan backslash; di .env Anda dapat menulis ganda `\\` atau gunakan path dengan forward slash `C:/path/to/project/cacert.pem`.

3) Konfigurasi php.ini (direkomendasikan)

Edit `php.ini` (yang dipakai oleh web server atau PHP CLI) dan set:

```
curl.cainfo = "C:\\full\\path\\to\\project\\cacert.pem"
openssl.cafile = "C:\\full\\path\\to\\project\\cacert.pem"
```

Lalu restart web server / PHP-FPM / artisan serve.

4) Controller sudah diperbarui

`app/Http/Controllers/ContactController.php` sudah diperbarui untuk:
- menggunakan `CACERT_PATH` dari `.env` jika ada,
- fallback ke `base_path('cacert.pem')` jika file ada di root project,
- bila tidak ada, akan menonaktifkan verifikasi SSL sementara (hanya untuk pengembangan) dan menulis peringatan ke log.

Catatan keamanan

- Jangan menonaktifkan verifikasi SSL di production. Pastikan `curl.cainfo`/`openssl.cafile` dikonfigurasi atau `CACERT_PATH` menunjuk ke file cacert yang valid di server produksi.

Troubleshooting

- Jika masih muncul error, periksa log Laravel (`storage/logs/laravel.log`) untuk pesan peringatan.
- Pastikan PHP yang digunakan oleh web server adalah yang Anda edit `php.ini`-nya (cek `phpinfo()` atau `php -i`).
- Untuk Windows, jalankan skrip PowerShell di elevated prompt jika perlu hak tulis.
