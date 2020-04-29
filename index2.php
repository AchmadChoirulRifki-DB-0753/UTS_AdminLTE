<?php
include ("koneksi.php");
?>

<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body { 
		background-image: url(bs1.jpg);
		background-size: 100%; 
		}
</style>

	<br>
	<h2 align="center">Data Pengurus Dewan</h2>
	<br>
	<table border="1px" align="center" bgcolor="white">
		<tr align="center" bgcolor="skyblue">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
		$no = 1;
		while ($tampil =mysqli_fetch_array($sql)){
			?>
		<tr bgcolor="orange">
			<td><?php echo $no;?>					</td>
			<td><?php echo $tampil['nim'];?>		</td>
			<td><?php echo $tampil['nama'];?>		</td>
			<td><?php echo $tampil['alamat'];?>		</td>
			<td><?php echo $tampil['telepon'];?>	</td>
			<td>
				<a href="edit.php?nim=<?php echo $tampil['nim']; ?>"><img src="edit.png" width="20px" height="20px"/></a>
				<a href="delete.php?nim=<?php echo $tampil['nim']; ?>"><img src="hapus.png" width="20px" height="20px"/></a>
			</td>
		</tr>
	<?php
		$no++;
			}
	?>
	</table>
	<br>
	<div align="center">
	<a href="input.php" ><input type="submit" class="tombol_login" value="INPUT DATA PENGURUS">
	<a href="index.html" ><input type="submit" class="tombol_login" value="LOGOUT">
</body>
</html>