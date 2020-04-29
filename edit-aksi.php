<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon =$_POST['telepon'];

$sql	= 'UPDATE mahasiswa SET nama="'.$nama.'", alamat="'.$alamat.'", telepon="'.$telepon.'" where nim="'.$nim.'"';
$query	= mysqli_query($koneksi,$sql);

header("location:index2.php");

?>