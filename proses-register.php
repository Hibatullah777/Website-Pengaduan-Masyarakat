<?php
$nik         = $_POST['nik'];
$nama        = $_POST['nama'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$telp        = $_POST['telp'];

include 'koneksi.php';

$cek_nik = mysqli_query($koneksi, "SELECT nik FROM masyarakat WHERE nik='$nik'");
if (mysqli_num_rows($cek_nik) > 0) {
    echo "<script>alert('NIK sudah terdaftar, gunakan NIK lain.'); window.location.assign('register.php');</script>";
    exit;
}
$sql = "INSERT INTO masyarakat(nik, nama, username, password, telp) 
        VALUES('$nik','$nama','$username','$password','$telp')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index.php');</script>";
} else {
    echo "<script>alert('Anda Gagal Mendaftar.'); window.location.assign('register.php');</script>";
}
?>