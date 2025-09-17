<?php
include('../../config/config.php');
$id = $_GET['id'];
// $nama = $_GET['nama'];
// $nim = $_GET['nim'];
// $smt =  $_GET['semester'];
$query = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id='$id'");
header('Location: ../index.php?page=data-mahasiswa');
