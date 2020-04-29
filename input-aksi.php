<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$sql = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', telepon='$telepon'";
mysqli_query($koneksi, $sql);

header("location:index2.php");
?>