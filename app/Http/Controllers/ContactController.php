<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman Hubungi Kami
     */
    public function index()
    {
        return view('hubungi');
    }

    /**
     * Proses form Hubungi Kami
     */
    public function store(Request $request)
    {
        // === 1. Validasi input ===
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'telepon' => 'required|string|max:20',
            'pesan' => 'required|string|min:10',
            'g-recaptcha-response' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'telepon.required' => 'Nomor telepon wajib diisi',
            'pesan.required' => 'Pesan wajib diisi',
            'pesan.min' => 'Pesan minimal 10 karakter',
            'g-recaptcha-response.required' => 'Verifikasi reCAPTCHA wajib dilakukan',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // === 2. Verifikasi reCAPTCHA v2 (pakai try/catch) ===
        try {
            $secret = config('services.recaptcha.secret_key') ?? env('RECAPTCHA_SECRET');

            // handle cacert similar to previous implementation
            $options = [];
            $envPath = env('CACERT_PATH');
            if (!empty($envPath) && file_exists($envPath)) {
                $options['verify'] = $envPath;
            } elseif (file_exists(base_path('cacert.pem'))) {
                $options['verify'] = base_path('cacert.pem');
            } else {
                Log::warning('No cacert.pem found; HTTP client will skip SSL verification. Configure CACERT_PATH or php.ini.');
                $options['verify'] = false; // last-resort for local dev only
            }

            $response = Http::withOptions($options)->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $secret,
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $result = $response->json();

            // log result for debugging
            Log::info('reCAPTCHA verification response', is_array($result) ? $result : ['response' => $result]);

            if (empty($result['success']) || $result['success'] !== true) {
                return response()->json([
                    'success' => false,
                    'message' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.',
                    'error_codes' => $result['error-codes'] ?? []
                ], 400);
            }
        } catch (\Exception $e) {
            Log::error('reCAPTCHA Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan pada verifikasi reCAPTCHA.'
            ], 500);
        }

        // === 3. Simpan pesan ke database ===
        try {
            ContactMessage::create([
                'name' => $request->input('nama'),
                'email' => $request->input('email'),
                'company' => $request->input('perusahaan'),
                'phone' => $request->input('telepon'),
                'message' => $request->input('pesan'),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.'
            ]);
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan. Silakan coba lagi nanti.'
            ], 500);
        }
    }

    // alias untuk kompatibilitas route lama
    public function submit(Request $request)
    {
        return $this->store($request);
    }

    // alias send untuk route yang menunjuk ke send()
    public function send(Request $request)
    {
        return $this->store($request);
    }

    // tetap sediakan verifyRecaptcha jika ada pemanggilan lain — tetapi store sudah meng-handle verifikasi
    private function verifyRecaptcha($token, $remoteIp = null)
    {
        $secret = config('services.recaptcha.secret_key') ?? env('RECAPTCHA_SECRET');

        $options = [];
        $envPath = env('CACERT_PATH');
        if (!empty($envPath) && file_exists($envPath)) {
            $options['verify'] = $envPath;
        } elseif (file_exists(base_path('cacert.pem'))) {
            $options['verify'] = base_path('cacert.pem');
        } else {
            Log::warning('No cacert.pem found; HTTP client will skip SSL verification. Configure CACERT_PATH or php.ini.');
            $options['verify'] = false;
        }

        $response = Http::withOptions($options)->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secret,
            'response' => $token,
            'remoteip' => $remoteIp,
        ]);

        return $response->json();
    }
}