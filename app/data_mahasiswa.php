<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button>
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
                                        <a href="index.php?page=edit-data&&id=<?= $mhs['id']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <a onclick="hapus_data(<?= $mhs['id']; ?>)"
                                            class="btn btn-danger btn-sm">Hapus</a>
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
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- /.modal -->

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NIM" name="nim" required>
                        </div>
                        <div class="col">
                            <select class="custom-select" id="inputGroupSelect01" name="semester">
                                <option selected>Pilih...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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