<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {


        case 'verifikasi-pengaduan':
        include 'verifikasi-pengaduan.php';
        break;

        case 'detail-pengaduan':
          include 'detail-pengaduan.php';
          break;
        
    }
}else{
    echo "Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.<br>";
    echo "Anda Login Sebagai : <h2><b>".$_SESSION['nama_petugas']; 
    
    require '../koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan ");
    $cek = mysqli_num_rows($sql);    
    {

    ?>
    <br>
    <br>

        <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php
} 
}
?>