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
                    <td>X</td>
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