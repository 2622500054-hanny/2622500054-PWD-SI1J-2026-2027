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
</html>