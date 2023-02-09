<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$smt = $_GET['semester'];
$query = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa (id,nama,nim,semester) VALUES ('','$nama','$nim','$smt')");
header('location:../index.php?page=data-mahasiswa');
?>