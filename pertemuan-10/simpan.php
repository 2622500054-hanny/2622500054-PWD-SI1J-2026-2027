<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$semester = $_POST['semester'];
$tanggal = $_POST['tanggal'];
$jenis_pesan = $_POST['jenis_pesan'];
$minat = $_POST['minat'];
$prodi = $_POST['prodi'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO tbl_kontak_2622500054 (nama, email, semester, tanggal, jenis_pesan, minat, prodi, pesan) VALUES ('$nama','$email','$semester','$tanggal','$jenis_pesan','$minat','$prodi','$pesan')";
mysqli_query($koneksi, $sql);
header("Location: tampil.php");
?>