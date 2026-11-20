# Pertemuan 07 - Pengenalan Formulir HTML dan Metode HTTP

**Nama:** Hanny Arfa  
**NIM:** 2622500054  
**Program Studi:** Sistem Informasi (SI)  
**Mata Kuliah:** Pemrograman Web Dasar

## Tujuan
Memahami cara kerja formulir HTML dan metode HTTP GET dan POST, serta menerapkan validasi data formulir di sisi klien dan sisi peladen dengan PHP.

## Deskripsi
Pada pertemuan ini, halaman profil mahasiswa dari Pertemuan 06 dikembangkan dengan formulir kontak yang sudah berfungsi penuh:

- **Formulir di `index.php` (POST):**
    - Input: nama, email, semester, tanggal kunjungan, jenis pesan (radio), topik yang diminati (checkbox `minat[]`), program studi (select), dan pesan.
    - Validasi JavaScript di `script.js` sebelum pengiriman (nama 3-50 karakter, format email, semester 1-14, tanggal wajib, jenis pesan, minimal satu minat, prodi, pesan maks 300 karakter).
    - Validasi PHP di sisi peladen dengan `filter_var()` untuk email dan semester, serta pemeriksaan nilai yang diizinkan untuk jenis pesan, program studi, dan minat.
    - Menggunakan pola **PRG (Post-Redirect-Get)** dengan `session_start()`, `$_SESSION`, `header('Location: index.php')`, dan `exit` agar data tidak terkirim ulang saat refresh.
    - Data yang valid ditampilkan kembali di bagian "Data yang Diterima Peladen" dengan `htmlspecialchars()` dan `nl2br()`.
    - Atribut `name` ditambahkan pada semua input agar dapat dikirim ke peladen.
    - Atribut `novalidate` digunakan pada form agar validasi bawaan browser tidak menutupi validasi JavaScript dan PHP.

- **Demo GET di `indexGet.php`:**
    - Formulir menggunakan `method="get"` dan `action="indexGet.php"`.
    - Nilai `nama` dari `$_GET` ditampilkan dengan `htmlspecialchars()`.
    - Digunakan untuk membandingkan bahwa data GET terlihat di URL, sedangkan data POST tidak terlihat di URL.

## Cara Menjalankan
1. Jalankan server PHP lokal dari folder `pertemuan-07`, contoh: `php -S localhost:8000`
2. Buka `http://localhost:8000/index.php` untuk formulir POST.
3. Buka `http://localhost:8000/indexGet.php` untuk demo GET.
4. Isi formulir dengan data lengkap lalu klik Kirim.
5. Coba kirim formulir kosong untuk melihat pesan kesalahan validasi.
6. Refresh halaman setelah kirim untuk memastikan data tidak terkirim ulang (PRG).

## Struktur File
- `index.php` - Halaman utama dengan formulir POST, validasi PHP, session, dan PRG.
- `indexGet.php` - Halaman demo formulir GET.
- `script.js` - Validasi formulir di sisi klien dan toggle navigasi.
- `style.css` - Gaya tampilan halaman.
- `img/foto-profil.jpg` - Foto profil mahasiswa.

## Hasil Pengujian
- Formulir kosong menampilkan pesan kesalahan dari validasi JavaScript dan PHP.
- Email tidak valid ditolak oleh validasi JavaScript dan PHP.
- Semester di luar 1-14 ditolak oleh validasi JavaScript dan PHP.
- Formulir valid menampilkan kembali data yang dikirim pada bagian "Data yang Diterima Peladen".
- Setelah kirim, refresh halaman tidak mengirim ulang data (PRG berhasil).
- Pada `indexGet.php`, data yang dikirim terlihat di URL (GET), sedangkan pada `index.php` data tidak terlihat di URL (POST).