<?php
include('../../conf/config.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$smt = $_POST['semester'];
//nama foto//
$nama_file = $_FILES['foto']['name'];
// echo $nama_file;

//lokasi foto//
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/'.$nama_file);
$query = mysqli_query($koneksi,"UPDATE tb_mahasiswa SET nama='$nama',nim='$nim',semester='$smt',foto='$nama_file' WHERE id='$id'");
header('location:../index.php?page=data-mahasiswa');
?>