<?php
	//mysql_connect("localhost", "root", "");
	//mysql_select_db();
	$host	= "localhost";
	$user	= "root";
	$pass	= "";

	$koneksi = mysqli_connect($host, $user, $pass);
	mysqli_select_db($koneksi, "basis_data");
?>