<?php
include('../../config/config.php');
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pembayaran : <?= $_POST['nim']; ?></h3>
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
                    <th>Pembayaran</th>
                    <th>Keterangan</th>
                    <th>Tanggal Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $total = 0;
                $nim = $_POST['nim'];
                $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE nim='$nim'");
                while ($mhs = mysqli_fetch_array($query)) {
                    $no++
                ?>
                    <tr>
                        <td width='4%'><?= $no; ?></td>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['nim']; ?></td>
                        <td class="text-right"><?= number_format($mhs['pembayaran']) . ',-'; ?></td>
                        <td><?= $mhs['keterangan']; ?></td>
                        <td><?= $mhs['tgl_bayar']; ?></td>
                    </tr>
            </tbody>
        <?php
                    $total += $mhs['pembayaran'];
                } ?>
        <tfoot>
            <tr>
                <th colspan="3">Jumlah</th>
                <th class="text-right"><?= 'Rp. ' . number_format($total) . ',-'; ?></th>
                <th colspan="2">Tanggal Bayar</th>
            </tr>
        </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>