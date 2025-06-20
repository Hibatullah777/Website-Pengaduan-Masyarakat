<?php
require '../koneksi.php';

if (!isset($_POST['id_pengaduan']) || empty($_POST['id_pengaduan'])) {
    die("Error: ID Pengaduan tidak boleh kosong.");
}

if (!isset($_POST['tgl_tanggapan']) || empty($_POST['tgl_tanggapan'])) {
    die("Error: Tanggal tanggapan tidak boleh kosong.");
}

if (!isset($_POST['tanggapan']) || empty($_POST['tanggapan'])) {
    die("Error: Tanggapan tidak boleh kosong.");
}

if (!isset($_POST['id_petugas']) || empty($_POST['id_petugas'])) {
    die("Error: ID Petugas tidak boleh kosong.");
}


$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$st = 'selesai';

// Eksekusi query
$sql = mysqli_query($koneksi, "INSERT INTO tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) 
VALUES ('$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')");

$update_st = mysqli_query($koneksi, "UPDATE pengaduan SET status = '$st' WHERE id_pengaduan = '$id_pengaduan'");

if ($sql && $update_st) {
    echo "<script>alert('Data Sudah Ditanggapi'); window.location = 'admin.php?url=tanggapan';</script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}


?>
