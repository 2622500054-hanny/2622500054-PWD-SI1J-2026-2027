<?php
$nim = "2622500054";
$namaMahasiswa = "Hanny Arfa";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$semester = 1;
$ipk = 3.75;
$statusAktif = true;
$catatanTambahan = null;
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<title>Profil Mahasiswa</title>
</head>
<body>
<header>
<h1>Profil Mahasiswa</h1>
<nav>
<ul>
<li><a href="#home">Beranda</a></li>
<li><a href="#about">Tentang</a></li>
<li><a href="#contact">Kontak</a></li>
</ul>
</nav>
</header>

<main>
<section id="home">
<h2>Selamat Datang</h2>
<p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah <strong><?php echo NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p>
<img src="img/img/foto_profil.jpeg" alt="Foto profil Hanny Arfa" width="180" style="border-radius: 5px;" />
</section>

<section id="about">
<h2>Tentang Saya</h2>
<h3>Profil Singkat</h3>
<p>NIM: <?php echo $nim; ?></p>
<p>Program Studi: Sistem Informasi (SI)</p>
<p>Semester: <?php echo $semester; ?></p>
<p>IPK: <?php echo $ipk; ?></p>
<p>Status: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
<h3>Target Belajar</h3>
<ol>
<li>Memahami sintaks dasar PHP.</li>
<li>Menggunakan variabel dan konstanta.</li>
<li>Menerapkan operator dan percabangan.</li>
<li>Menggunakan perulangan for dan while.</li>
<li>Belum dipetakan</li>
</ol>
</section>

<section id="contact">
<h2>Kontak</h2>
<p>Kunjungi profil GitHub saya.</p>
<form>
<label>Nama Lengkap</label><br>
<input type="text" placeholder="Masukkan nama lengkap" /><br><br>
<label>Email</label><br>
<input type="email" placeholder="nama@email.com" /><br><br>
<button type="submit">Kirim</button>
</form>
</section>
</main>
</body>
</html>