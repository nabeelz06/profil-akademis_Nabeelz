# Profil Akademis Mandiri — PBKK Pertemuan 2

Aplikasi profil akademis pribadi, dibangun sebagai Tugas Mandiri mata kuliah
**Pemrograman Berbasis Kerangka Kerja (PBKK)** — Pertemuan 2: *Instalasi Proyek
Laravel & Routing Dasar*, Departemen Teknik Informatika, FTEIC, Institut
Teknologi Sepuluh Nopember (ITS).

**Penulis:** Muhammad Nabil Fauzan (NRP 5025241024)

## Daftar Rute

| HTTP Verb | URI                          | Nama Rute           | Deskripsi                                     |
|-----------|------------------------------|----------------------|------------------------------------------------|
| GET       | `/`                          | `home`               | Halaman beranda & sambutan                     |
| GET       | `/mahasiswa/{nrp}`           | `mahasiswa.profil`   | Detail profil mahasiswa (regex 10 digit)       |
| GET       | `/agent/{tema?}`             | `agent.ide`          | Ide platform Agentic AI (parameter opsional)   |
| GET       | `/hitung-ipk/{ipk1}/{ipk2}`  | `ipk.hitung`         | Kalkulator rata-rata IPK otomatis              |
| GET       | `*` (tidak cocok rute lain)  | —                     | Halaman 404 kustom lewat `Route::fallback()`   |

## Ketentuan Tugas yang Dipenuhi

- Seluruh rute didefinisikan dengan `->name()`.
- `Route::get('/mahasiswa/{nrp}', ...)->where('nrp', '[0-9]{10}')` membatasi NRP hanya menerima kombinasi 10 digit angka.
- `Route::fallback()` menampilkan halaman 404 kustom (`resources/views/errors/404.blade.php`) untuk URL yang tidak cocok dengan rute manapun.

## Menjalankan Proyek Secara Lokal

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000` di browser.

## Struktur

Seluruh rute didefinisikan di `routes/web.php` (menggunakan Closure, sesuai
materi Pertemuan 2). Tampilan ada di `resources/views/`, memakai satu layout
bersama di `resources/views/layouts/app.blade.php`.
