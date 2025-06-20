<?php
require '../koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Konversi ke integer untuk keamanan

    // Update status menjadi 'selesai'
    $sql = mysqli_query($koneksi, "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$id'");

    if ($sql) {
        header("Location: petugas.php?url=verifikasi-pengaduan");
        exit(); // Hentikan eksekusi setelah redirect
    } else {
        echo "Error: " . mysqli_error($koneksi); // Debugging jika query gagal
    }
}
?>
