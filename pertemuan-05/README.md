# Pertemuan 05 - PWD

**Nama:** Hanny Arfa
**NIM:** 2622500054
**Prodi:** Sistem Informasi 1J

## Deskripsi
Proyek ini adalah kelanjutan dari Pertemuan 04. Pada Pertemuan 05 fokus pada JavaScript untuk navigasi responsif dan validasi form sisi klien.

## Fitur P5 (Sesuai Modul Hal 56-63)

### 1. Navigasi Responsif (Hamburger Menu)
- Tombol `.nav-toggle` dengan id `navToggle` (&#9776;)
- `getElementById` untuk mengambil tombol dan menu `navMenu`
- `addEventListener("click")` untuk klik hamburger
- `classList.toggle("nav-open")` untuk buka/tutup menu
- `setAttribute("aria-expanded")` untuk aksesibilitas
- CSS: `#navMenu { display:none; }` dan `#navMenu.nav-open { display:flex; }`
- Media Query `@media (min-width:768px)` menu otomatis horizontal dan tombol hamburger hilang

### 2. Validasi Form Sisi Klien
Form menggunakan `novalidate` jadi validasi browser dimatikan, semua lewat JS.
- `event.preventDefault()` mencegah form refresh
- Urutan validasi: Nama 3-50 karakter (trim), Email pakai regex `/^[^\s@]+@[^\s@]+\.[^\s@]+$/`, Semester 1-14 (cek kosong dulu karena Number("")=0), Tanggal wajib isi, Radio jenis_pesan wajib pilih (`:checked`), Checkbox minat minimal 1 (`querySelectorAll`), Select prodi tidak boleh "", Pesan tidak boleh kosong dan max 300 karakter.
- Jika gagal -> `return` dan tampilkan pesan di `#formFeedback` dengan class `form-feedback-error`
- Jika lolos semua -> tampilkan "Form berhasil divalidasi." dengan class `form-feedback-success`
- Catatan: Ini hanya validasi, bukan simpan ke database (baru di P6).

### 3. Feedback
- `reset` event dan `input` event menghapus pesan feedback.

## Struktur File