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