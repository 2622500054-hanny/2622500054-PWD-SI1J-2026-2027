<?php include "koneksi.php"; ?>
<h2>Form Kontak - Hanny</h2>
<form method="POST" action="simpan.php">
    Nama: <input type="text" name="nama" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Semester: <input type="number" name="semester" value="1"><br><br>
    Tanggal: <input type="date" name="tanggal" value="2026-11-20"><br><br>
    Jenis Pesan:
    <select name="jenis_pesan">
        <option>Peringatan</option>
        <option>Pertanyaan</option>
    </select><br><br>
    Minat:
    <select name="minat">
        <option>Web</option>
        <option>Mobile</option>
        <option>Data</option>
    </select><br><br>
    Prodi:
    <select name="prodi">
        <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
    </select><br><br>
    Pesan:<br>
    <textarea name="pesan">Semangat beraktivitas</textarea><br><br>
    <button type="submit">Simpan</button>
</form>
<br>
<a href="tampil.php">Lihat Data</a>