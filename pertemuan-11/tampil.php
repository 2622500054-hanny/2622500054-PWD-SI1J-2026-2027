<?php
require_once("koneksi.php");
require_once("fungsi.php");

$query = mysqli_query($koneksi, "SELECT * FROM kontak ORDER BY id DESC");
?>
<h1>Data Kontak yang Tersimpan</h1>
<a href="form.php">Kembali ke Form</a>
<hr>

<?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <p>
        Nama: <?= bersihkan($row["nama"] ?? "") ?><br>
        Email: <?= bersihkan($row["email"] ?? "") ?><br>
        Semester: <?= bersihkan($row["semester"] ?? "") ?><br>
        Tanggal: <?= bersihkan($row["tanggal"] ?? "") ?><br>
        Jenis Pesan: <?= bersihkan($row["jenis_pesan"] ?? "") ?><br>
        Minat: <?= bersihkan($row["minat"] ?? "") ?><br>
        Prodi: <?= bersihkan($row["prodi"] ?? "") ?><br>
        Pesan: <?= bersihkan($row["pesan"] ?? "") ?>
    </p>
    <hr>
<?php } ?>