<?php 
include 'koneksi.php';

$kode_dosen = $_POST['kode_dosen'];
$nama_dosen = $_POST['nama_dosen'];

$sql	= 'UPDATE dosen SET nama_dosen="'.$nama_dosen.'" where kode_dosen="'.$kode_dosen.'"';
$query	= mysqli_query($koneksi,$sql);

header("location:index_anggota.php");

?>