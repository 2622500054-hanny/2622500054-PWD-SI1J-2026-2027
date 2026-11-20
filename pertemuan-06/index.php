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
const PROFIL_GITHUB = "2622500054-hanny";

$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;

if ($semester < 3) {
  $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
  $keteranganSemester = "Semester menengah";
} else {
  $keteranganSemester = "Semester akhir";
}

$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : "Lainnya";

switch ($programStudi) {
  case "SI":
    $fokusProgramStudi = "Sistem informasi dan proses bisnis";
    break;
  default:
    $fokusProgramStudi = "Belum ditentukan";
}
?>
<!doctype html>
<html>
<head><title>Profil Hanny Arfa</title></head>
<body>
  <h1>Selamat Datang</h1>
  <p>Halo, saya <b><?php echo $namaMahasiswa; ?></b>. Saya belajar <b><?php print NAMA_MATA_KULIAH; ?></b> tahun <?php echo $tahunAkademik; ?>.</p>

  <h2>Profil Singkat</h2>
  <p>NIM: <?php echo $nim; ?></p>
  <p>Prodi: <?php echo $namaProdi; ?></p>
  <p>Status: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
  <p>Sisa semester: <?php echo $sisaSemester; ?></p>
  <p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
  <p>Fokus: <?php echo $fokusProgramStudi; ?></p>
  <p>IPK: <?php echo number_format($ipk, 2, ',', '.'); ?></p>
  <p>Catatan: <?php echo $catatanTambahan === null ? "Belum ada" : $catatanTambahan; ?></p>

  <h2>Target Belajar</h2>
  <ol>
  <?php
  for ($i = 1; $i <= 5; $i++) {
    echo "<li>Target ke-" . $i . "</li>";
  }
  ?>
  </ol>

  <h2>Semester</h2>
  <ol>
  <?php
  $nomor = 1;
  while ($nomor <= 3) {
    echo "<li>Semester " . $nomor . "</li>";
    $nomor++;
  }
  ?>
  </ol>

  <p>Kunjungi <a href="https://github.com/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.</p>

  <form action="index.php" method="get">
    <input type="text" placeholder="Nama">
    <button>Kirim</button>
  </form>

  <p>&copy; <?= date("Y") ?> <?= $namaMahasiswa ?> [<?= $nim ?>]</p>
</body>
</html>
<script src="script.js"></script>
</body>
</html>