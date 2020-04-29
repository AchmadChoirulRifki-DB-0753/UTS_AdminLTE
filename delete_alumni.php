<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$kode_makul   = $_GET['kode_makul'];
// query SQL untuk insert data
$query="DELETE from kuliah where kode_makul='$kode_makul'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index_alumni.php");
?>