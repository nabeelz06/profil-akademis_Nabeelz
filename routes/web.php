<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Tugas Mandiri PBKK - Pertemuan 2
| Aplikasi Profil Akademis Mandiri
| Muhammad Nabil Fauzan - 5025241024
| S1 Teknik Informatika - Institut Teknologi Sepuluh Nopember
|
*/

// 1. Rute Home - sambutan & profil singkat
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Rute Detail Profil Mahasiswa (parameter wajib + validasi regex 10 digit)
Route::get('/mahasiswa/{nrp}', function (string $nrp) {
    $daftarMahasiswa = require base_path('resources/data/mahasiswa.php');

    if (! array_key_exists($nrp, $daftarMahasiswa)) {
        abort(404, 'Data mahasiswa dengan NRP tersebut tidak ditemukan.');
    }

    return view('mahasiswa', ['mhs' => $daftarMahasiswa[$nrp]]);
})->where('nrp', '[0-9]{10}')->name('mahasiswa.profil');

// 3. Rute Ide Platform Agentic AI (parameter opsional)
Route::get('/agent/{tema?}', function (?string $tema = null) {
    $temaDefault = 'General Assistant Agent';
    $temaDipakai = $tema ?: $temaDefault;

    $penjelasanTema = [
        'traceability' => 'Agent yang membantu menelusuri dan memverifikasi rantai pasok mineral/logam tanah jarang secara otomatis, memastikan setiap batch tervalidasi sesuai regulasi.',
        'edukasi'      => 'Agent yang membantu mahasiswa menyusun rencana belajar, merangkum materi kuliah, dan mengingatkan deadline tugas secara otomatis.',
        'organisasi'   => 'Agent yang membantu pengurus organisasi menjadwalkan kegiatan, menyusun draf proposal, dan memantau progres program kerja.',
        'keuangan'     => 'Agent yang membantu mencatat arus kas organisasi maupun pribadi serta memberi peringatan dini atas pengeluaran yang tidak wajar.',
    ];

    $deskripsi = $penjelasanTema[strtolower($temaDipakai)]
        ?? 'Sebuah agent AI serba guna yang membantu berbagai kebutuhan sehari-hari, mulai dari riset singkat hingga otomatisasi tugas administratif.';

    return view('agent', [
        'tema'      => $temaDipakai,
        'deskripsi' => $deskripsi,
        'isDefault' => is_null($tema),
    ]);
})->name('agent.ide');

// 4. Rute Kalkulator IPK Otomatis
Route::get('/hitung-ipk/{ipk1}/{ipk2}', function (string $ipk1, string $ipk2) {
    if (! is_numeric($ipk1) || ! is_numeric($ipk2)) {
        return view('hitung-ipk', [
            'error' => 'Parameter IPK wajib berupa angka. Contoh: /hitung-ipk/3.75/3.60',
        ]);
    }

    $nilai1 = (float) $ipk1;
    $nilai2 = (float) $ipk2;
    $rataRata = round(($nilai1 + $nilai2) / 2, 2);

    return view('hitung-ipk', [
        'ipk1'     => number_format($nilai1, 2),
        'ipk2'     => number_format($nilai2, 2),
        'rataRata' => number_format($rataRata, 2),
    ]);
})->name('ipk.hitung');

// Rute Fallback - halaman tidak ditemukan (404)
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
