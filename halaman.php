<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;
        case 'lihat-pengaduan':
            include 'lihat-pengaduan.php';
            break;
        case 'detail-pengaduan':
            include 'detail-pengaduan.php';
            break;
        case 'lihat-tanggapan':
            include 'lihat-tanggapan.php';
            break;
        default:
            echo "Halaman Tidak Ditemukan";
            break;
    }
} else {
    echo "Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.<br>";

    if(isset($_SESSION['nama'])){
        echo "Anda Login Sebagai : " . $_SESSION['nama'];
    } else {
        echo "Anda belum login.";
    }
}
