<?php 
include 'koneksi.php';

$kode_dosen = $_POST['kode_dosen'];
$nama_dosen = $_POST['nama_dosen'];

$sql = "INSERT INTO dosen SET kode_dosen='$kode_dosen', nama_dosen='$nama_dosen'";
mysqli_query($koneksi, $sql);

header("location:index_anggota.php");
?>