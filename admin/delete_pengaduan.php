<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from pengaduan where id_pengaduan='$id' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data berhasil Dihapus');
        window.location='admin.php?url=lihat_pengaduan';
    </script>
    <?php
}
?>