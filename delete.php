<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nim   = $_GET['nim'];
// query SQL untuk insert data
$query="DELETE from mahasiswa where nim='$nim'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index2.php");
?>