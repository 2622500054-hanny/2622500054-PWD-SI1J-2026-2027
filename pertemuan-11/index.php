<?php
require_once("fungsi.php");
require_once("koneksi.php"); // P11

// P11: Mengambil data kontak dari basis data menggunakan operasi READ.
$sql = "SELECT * FROM tbl_kontak_2622500054";
$hasil = mysqli_query($koneksi, $sql);

// P11: Memeriksa keberhasilan kueri SELECT.
if (!$hasil) {
    die("Kueri SELECT gagal dijalankan.");
}

// P11: Mengambil hasil kueri sebagai larik asosiatif.
$dataKontak = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
    $dataKontak[] = $baris;
}

// P11: Pengujian sementara hasil pengambilan data.
/* echo "<pre>";
var_dump($dataKontak);
echo "</pre>"; */

// P6: PHP dasar dan pemrograman sisi peladen
// Bagian 1: Variabel dan konstanta
$nim = "2622500054";
$namaMahasiswa = "HANNY ARFA";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$semester = 3;
$ipk = 3.75;
$statusAktif = true;
$catatanTambahan = null;
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "hannyarfa";

// Bagian 2: Operator
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = $semester >= 1 && $semester <= $batasSemester;
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";

// Bagian 3: Percabangan if-elseif-else
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}
$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

// Bagian 4: Percabangan switch-case-default
switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan proses bisnis";
        break;
    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;
    default:
        $fokusProgramStudi = "Belum ditentukan";
}

// P9: Larik terindeks untuk menyimpan teknologi web yang dipelajari.
$teknologiWeb = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

function tebal($teks)
{
    return "<strong>" . bersihkan($teks) . "</strong>";
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Profil Mahasiswa</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
<div class="header-top">
<h1>Profil Mahasiswa</h1>
<button class="nav-toggle" id="navToggle" type="button" aria-label="Buka navigasi" aria-controls="navMenu" aria-expanded="false">&#9776;</button>
</div>
<nav>
<ul id="navMenu">
<li><a href="#home">Beranda</a></li>
<li><a href="#about">Tentang</a></li>
<li><a href="#contact">Kontak</a></li>
</ul>
</nav>
</header>
<main>
<section id="home">
<h2>Selamat Datang</h2>
<p>Halo, saya <?= tebal($namaMahasiswa); ?>. Saya sedang mempelajari matakuliah <strong><?= bersihkan(NAMA_MATA_KULIAH); ?></strong> pada tahun akademik <?= bersihkan($tahunAkademik); ?>.</p>
<img src="foto_profil.jpeg" alt="Foto profil HANNY ARFA" />
</section>
<section id="about">
<h2>Tentang Saya</h2>
<article>
<h3>Profil Singkat</h3>
<p>Program Studi: <?= bersihkan($namaProdi . " (" . $programStudi . ")"); ?></p>
<p>Fokus program studi: <?= bersihkan($fokusProgramStudi); ?></p>
<p>Status mahasiswa: <?= $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
<p>Semester: <?= bersihkan($semester . " (" . $keteranganSemester . ")"); ?></p>
<p>Sisa semester hingga batas: <?= bersihkan($sisaSemester); ?></p>
<p>Pemeriksaan rentang semester: <?= bersihkan($statusSemester); ?></p>
<p>IPK: <?= number_format($ipk, 2, ',', '.'); ?></p>
<p>Catatan tambahan: <?= $catatanTambahan === null ? "Belum ada" : bersihkan($catatanTambahan); ?></p>
<h3>Target Belajar (Perulangan for)</h3>
<ol>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Target belajar ke-" . $i . ": ";
    switch ($i) {
        case 1: echo "Memahami sintaks dasar PHP."; break;
        case 2: echo "Menggunakan variabel dan konstanta."; break;
        case 3: echo "Menerapkan operator dan percabangan."; break;
        case 4: echo "Menggunakan perulangan for dan while."; break;
        default: echo "Belum dipetakan"; break;
    }
    echo "</li>";
}
?>
</ol>
<h3>Teknologi Web yang Dipelajari</h3>
<p>Teknologi pertama yang dipelajari: <?= bersihkan($teknologiWeb[0]); ?></p>
<p>Daftar teknologi yang dipelajari:</p>
<ul>
<?php foreach ($teknologiWeb as $teknologi): ?>
<li><?= bersihkan($teknologi); ?></li>
<?php endforeach; ?>
</ul>
<h3>Semester (Perulangan while):</h3>
<ol>
<?php
$nomorSemester = 1;
while ($nomorSemester <= 3) {
    echo "<li>Semester " . $nomorSemester . "</li>";
    $nomorSemester++;
}
?>
</ol>
</article>
</section>
<section id="contact">
<h2>Kontak</h2>
<p>Kunjungi <a target="_blank" href="https://github.com/<?= bersihkan(PROFIL_GITHUB); ?>">profil GitHub saya</a>.</p>
<form id="contactForm" class="js-contact-form" data-validation="contact" action="index.php" method="post" novalidate>
<div class="form-group">
<label for="nama">Nama Lengkap</label><br />
<input class="input-form" type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" minlength="3" maxlength="50" required />
</div>
<div class="form-group">
<label for="email">Email</label><br />
<input class="input-form" type="email" id="email" name="email" placeholder="nama@email.com" required />
</div>
<div class="form-group">
<label for="semester">Semester</label><br />
<input class="input-form" type="number" id="semester" name="semester" min="1" max="14" required />
</div>
<div class="form-group">
<label for="tanggal">Tanggal Kunjungan</label><br />
<input class="input-form" type="date" id="tanggal" name="tanggal" required />
</div>
<div class="form-group">
<p>Jenis Pesan</p>
<input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" required />
<label for="pertanyaan">Pertanyaan</label>
<input type="radio" id="saran" name="jenis_pesan" value="saran" />
<label for="saran">Saran</label>
</div>
<div class="form-group">
<p>Topik yang Diminati</p>
<input type="checkbox" id="minat-html" name="minat[]" value="HTML" />
<label for="minat-html">HTML</label>
<input type="checkbox" id="minat-css" name="minat[]" value="CSS" />
<label for="minat-css">CSS</label>
</div>
<div class="form-group">
<label for="prodi">Program Studi</label><br />
<select class="input-form" id="prodi" name="prodi" required>
<option value="">-- Pilih Program Studi --</option>
<option value="SI">Sistem Informasi</option>
<option value="TI">Teknik Informatika</option>
</select>
</div>
<div class="form-group">
<label for="pesan">Pesan</label><br />
<textarea class="input-form" id="pesan" name="pesan" maxlength="300" placeholder="Tulis pesan Anda" required></textarea>
</div>
<button type="submit">Kirim</button>
<button type="reset">Batal</button>
<p class="form-feedback" data-form-feedback aria-live="polite"></p>
</form>
<article id="hasilKontak" class="submission-result" aria-live="polite">
<h3>Data Kontak dari Basis Data</h3>
<?php if (count($dataKontak) > 0): ?>
<?php foreach ($dataKontak as $data): ?>
<section>
<p><strong>ID:</strong> <?= bersihkan($data["id"]); ?></p>
<p><strong>Nama:</strong> <?= bersihkan($data["nama"]); ?></p>
<p><strong>Email:</strong> <?= bersihkan($data["email"]); ?></p>
<p><strong>Semester:</strong> <?= bersihkan($data["semester"]); ?></p>
<p><strong>Tanggal Kunjungan:</strong> <?= bersihkan($data["tanggal"]); ?></p>
<p><strong>Jenis Pesan:</strong> <?= bersihkan($data["jenis_pesan"]); ?></p>
<p><strong>Topik yang Diminati:</strong> <?= bersihkan($data["minat"]); ?></p>
<p><strong>Program Studi:</strong> <?= bersihkan($data["prodi"]); ?></p>
<p><strong>Pesan:</strong> <?= nl2br(bersihkan($data["pesan"])); ?></p>
</section>
<?php endforeach; ?>
<?php else: ?>
<p>Belum ada data kontak yang tersimpan.</p>
<?php endif; ?>
</article>
</section>
</main>
<footer>
<p>&copy; <?= date("Y"); ?> <?= bersihkan($namaMahasiswa); ?> [<?= bersihkan($nim); ?>]</p>
</footer>
<script src="script.js"></script>
</body>
</html>