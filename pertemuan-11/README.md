# Pertemuan 11 - Pemrograman Web Dasar
Nama: HANNY ARFA
NIM: 2622500054
Program Studi: SI

## B. Persiapan Pengembangan P11
- Menyalin artefak pertemuan-10 ke pertemuan-11 sebagai baseline tanpa mengubah artefak P10.
- Struktur direktori pertemuan-11/: index.php, fungsi.php, koneksi.php, script.js, style.css, README.md, db_pwd_2622500054.sql, img/foto_profil.jpeg
- Lingkungan: Laragon, layanan Apache dan MySQL berjalan.
- Basis data: db_pwd_2622500054, tabel: tbl_kontak_2622500054
- Pemeriksaan tabel: 9 atribut yaitu id, nama, email, semester, tanggal, jenis_pesan, minat, prodi, dan pesan. Data kontak dapat ditampilkan melalui tab Browse.

## D. Membuat Berkas Koneksi PHP-MySQL
- Berkas koneksi.php dibuat pada direktori pertemuan-11/ sejajar dengan index.php.
- Parameter koneksi: Host localhost, Username root, Password "", Database db_pwd_2622500054.
- Menggunakan mysqli_report(MYSQLI_REPORT_OFF) dan mysqli_connect().
- Jika koneksi gagal: die("Koneksi ke basis data gagal.")
- Pengujian kegagalan koneksi: jika parameter salah, pesan kegagalan ditampilkan. Setelah diperbaiki, koneksi berhasil.

## E. Mengintegrasikan Koneksi ke Halaman Utama
- index.php memuat berkas menggunakan:
  require_once("fungsi.php");
  require_once("koneksi.php");
- session_start() dimatikan pada P11.
- Variabel $koneksi tersedia setelah koneksi.php dimuat.
- Pengujian: halaman utama dapat diakses tanpa menampilkan pesan Koneksi ke basis data gagal.

## F. Mengambil Data dari Basis Data Menggunakan Operasi READ
- Kueri: SELECT * FROM tbl_kontak_2622500054
- Menjalankan kueri: $hasil = mysqli_query($koneksi, $sql);
- Pemeriksaan: jika !$hasil, die("Kueri SELECT gagal dijalankan.")
- Mengambil hasil: 
  $dataKontak = [];
  while ($baris = mysqli_fetch_assoc($hasil)) {
      $dataKontak[] = $baris;
  }
- Pengujian var_dump($dataKontak) dilakukan sementara, kemudian diberi komentar agar tidak menjadi keluaran aplikasi.
- Hasil pemeriksaan: $dataKontak berisi data dengan indeks asosiatif sesuai nama kolom tabel.

## G. Menampilkan Data Basis Data pada Halaman Web
- Penyajian data session pada P10 digantikan dengan data $dataKontak.
- Menampilkan data menggunakan perulangan foreach terhadap $dataKontak.
- Setiap atribut ditampilkan dengan fungsi bersihkan() untuk htmlspecialchars(). Khusus pesan menggunakan nl2br(bersihkan($data["pesan"])).
- Menangani kondisi tidak ada data:
  Jika count($dataKontak) > 0, tampilkan perulangan foreach. Jika tidak, tampilkan "Belum ada data kontak yang tersimpan."

## H. Ekspor Basis Data
- Berkas db_pwd_2622500054.sql berada di dalam direktori pertemuan-11/.
- Berisi perintah pembuatan tabel tbl_kontak_2622500054 serta perintah yang memuat data kontak.

## Pengujian Akhir
1. Tabel tbl_kontak_2622500054 pada db_pwd_2622500054 memiliki data kontak.
2. Akses aplikasi melalui localhost/2622500054-PWD-SI1J-2026-2027-main/pertemuan-11/
3. Seluruh data kontak ditampilkan pada bagian Data Kontak dari Basis Data.
4. Nilai setiap atribut sesuai dan pesan dengan pergantian baris ditampilkan sesuai formatnya.