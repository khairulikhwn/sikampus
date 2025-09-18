<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="update/update_data.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama"
                                    value="<?= $view['nama']; ?>">
                                <input type="hidden" class="form-control" name="id" value="<?= $view['id']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="number" class="form-control" placeholder="NIM" name="nim"
                                    value="<?= $view['nim']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Semester</label>
                                <select class="custom-select" id="inputGroupSelect01" name="semester">
                                    <option value="<?= $view['semester']; ?>" selected>
                                        <?= $view['semester']; ?>
                                    </option>
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
                        <div class="col-sm-6">
                            <label for="formFile" class="form-label">Upload Foto</label>
                            <input name="foto" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <img width="100px" class="rounded mx-auto d-block" src="dist/img/foto/<?= $view['foto']; ?>"
                            alt="foto">
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            </div>
        </div>
    </div>
    </form>
    </div>
    <!-- /.card-body -->
    </div>
    </div>
</section>