<?php
$namaMahasiswa = "Hanny Arfa";
$namaMatakuliah = "Pemrograman Web Dasar";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil Mahasiswa</title>
</head>
<body>
    <img src="img/img/foto_profil.jpeg" width="180" style="border-radius: 50%; display: block; margin-bottom: 10px;">
    <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah <strong><?php echo $namaMatakuliah; ?></strong>.</p>
</body>
<div style="display: flex; gap: 15px; margin-top: 20px;">
  <div style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; width: 200px;">
    <h3>Tentang Saya</h3>
    <p>Halo, saya <?php echo $namaMahasiswa; ?></p>
  </div>
  <div style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; width: 200px;">
    <h3>Daftar Tugas</h3>
    <p>Pertemuan 1 sampai 7</p>
  </div>
  <div style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; width: 200px;">
    <h3>Kontak</h3>
    <p>NIM: 2622500054<br>Kelas: SI1J</p>
  </div>
</div>
</html>