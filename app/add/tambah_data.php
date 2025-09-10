<?php
include('../../config/config.php');
// $id = $_GET['id'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$smt =  $_GET['semester'];
$query = mysqli_query($koneksi, "INSERT INTO tb_mahasiswa (nama,nim,semester) VALUES ('$nama','$nim','$smt')");
header('Location: ../index.php?page=data-mahasiswa');
