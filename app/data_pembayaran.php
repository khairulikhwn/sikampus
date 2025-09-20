<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Mahasiswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                                while ($mhs = mysqli_fetch_array($query)) {
                                    $no++
                                ?>
                                <tr>
                                    <td width='4%'><?= $no; ?></td>
                                    <td><?= $mhs['nama']; ?></td>
                                    <td><?= $mhs['nim']; ?></td>
                                    <td><?= $mhs['semester']; ?></td>
                                    <td>
                                        <a class="view-pembayaran btn btn-warning" data-nama="<?= $mhs['nama']; ?>"
                                            data-nim="<?= $mhs['nim']; ?>">View
                                            Pembayaran</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                                } ?>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- view data pembayaran -->
                <div id="hasil-view-pembayaran">

                </div>
                <?php // include('view/view-data-pembayaran.php'); 
                ?>
                <!-- view data pembayaran -->
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->



<!-- /.modal-view-data -->
<div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
                <div class="modal-body" id="hasil-view-data">

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
function hapus_data(data_id) {
    // alert('ok');

    Swal.fire({
        title: "Apakah Anda Yakin Menghapus?",
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: "Hapus",
        confirmButtonColor: "#dc3545",
        // denyButtonText: `Don't save`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location = ("delete/hapus_data.php?id=" + data_id);
        }
    });
}
</script>