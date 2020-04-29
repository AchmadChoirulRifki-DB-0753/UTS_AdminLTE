<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$kode_dosen   = $_GET['kode_dosen'];
// query SQL untuk insert data
$query="DELETE from dosen where kode_dosen='$kode_dosen'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index_anggota.php");
?>