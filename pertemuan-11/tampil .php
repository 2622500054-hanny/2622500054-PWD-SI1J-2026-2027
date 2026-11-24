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
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kontak - 2622500054</title>
</head>
<body>
    <h1>Data Kontak yang Tersimpan</h1>

    <?php if (count($dataKontak) > 0): ?>
        <?php foreach ($dataKontak as $data): ?>
            <hr>
            <p>Nama: <?= bersihkan($data["nama"]); ?></p>
            <p>Email: <?= bersihkan($data["email"]); ?></p>
            <p>Telepon: <?= bersihkan($data["telepon"]); ?></p>
            <p>Pesan: <?= bersihkan($data["pesan"]); ?></p>
            <p>Tanggal: <?= bersihkan($data["created_at"]); ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Belum ada data kontak yang tersimpan.</p>
    <?php endif; ?>

    <hr>
    <p><a href="form.php">Kembali ke Formulir</a></p>
</body>
</html>