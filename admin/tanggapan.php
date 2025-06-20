<?php
ob_start();
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$id = $_GET['id'] ?? ''; // Pastikan $id selalu ada

// Jika ID kosong, redirect ke halaman lain
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>window.location.href='admin.php';</script>";
    exit;
}

include '../koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($query);
?>

<div class="card shadow">
    <div class="card-header">
        Tanggapan
        <a href="?url=verifikasi-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>

    <div class="card-body">
        <form action="simpan-tanggapan.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-4">
                <label style="font-size: 15px">ID Pengaduan</label>
                <input type="text" name="id_pengaduan" value="<?php echo $id; ?>" class="form-control" readonly>
            </div>

            <div class="form-group cols-sm-4">
                <label style="font-size: 15px">Tgl Tanggapan</label>
                <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
            </div>

            <div class="form-group cols-sm-6">
                <label style="font-size: 15px">Tulis Tanggapan</label>
                <textarea class="form-control" rows="7" name="tanggapan" required></textarea>
            </div>

            <div class="form-group cols-sm-6">
                <label style="font-size: 15px">ID Petugas</label>
                <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas'] ?? ''; ?>" class="form-control" readonly>
            </div>

            <input type="submit" class="btn btn-primary btn-user" value="Tanggapi!">
        </form>
    </div>
</div>
