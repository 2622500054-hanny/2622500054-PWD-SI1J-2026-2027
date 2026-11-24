<?php include "koneksi.php"; ?>
<h2>Data Kontak</h2>
<a href="form.php">+ Tambah Data</a><br><br>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Nama</th><th>Email</th><th>Semester</th><th>Tanggal</th><th>Jenis</th><th>Minat</th><th>Prodi</th><th>Pesan</th></tr>
<?php
$data = mysqli_query($koneksi, "SELECT * FROM tbl_kontak_2622500054");
while($d = mysqli_fetch_array($data)){
    echo "<tr><td>".$d['id']."</td><td>".$d['nama']."</td><td>".$d['email']."</td><td>".$d['semester']."</td><td>".$d['tanggal']."</td><td>".$d['jenis_pesan']."</td><td>".$d['minat']."</td><td>".$d['prodi']."</td><td>".$d['pesan']."</td></tr>";
}
?>
</table>