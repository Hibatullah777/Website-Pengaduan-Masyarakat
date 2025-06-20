<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
    </div>
    <div class="card-body" style="font-size: 15px">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tgl Pengaduan</th>
                        <th>NIK</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <?php
                    include '../koneksi.php';
                    $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan where status='0'"); 
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                </tfoot>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['tgl_pengaduan']; ?></td>
                        <td><?= $data['nik']; ?></td>
                        <td><?= $data['isi_laporan']; ?></td>
                        <td><img src="../foto/<?= $data['foto']; ?>" width="100"></td>
                        <td><?= $data['status']; ?></td>
                        <td>
                            <!-- Tombol Detail & Verifikasi -->
                            <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan'] ?>&verifikasi=true" 
                               class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-5">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="text"> Detail & Verifikasi </span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
// Proses ubah status menjadi 'proses' jika tombol ditekan
if (isset($_GET['id']) && isset($_GET['verifikasi'])) {
    $id = $_GET['id'];
    $update = mysqli_query($koneksi, "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$id'");

    if ($update) {
        // Redirect ke halaman detail setelah update berhasil
        echo "<script>window.location.href='?url=detail-pengaduan&id=$id';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
