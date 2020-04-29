<?php
include ("koneksi.php");
?>

<html>
<head>
	<title>DATA ALUMNI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body { 
		background-image: url(bs4.jpg);
		background-size: 100%; 
		}
</style>
	<br>
	<h2 align="center">DATA ALUMNI</h2>
	<br>
	<table border="1px" align="center" bgcolor="yellow">
		<tr align="center" bgcolor="greenyellow">
			<th>No.</th>
			<th>Kode</th>
			<th>Jabatan</th>
			<th>Masa Jabatan</th>
			<th>Nama Alumni</th>
			<th>Waktu Lulus</th>
			<th>Aksi</th>
		</tr>
	<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM kuliah join dosen on kuliah.kode_dosen=dosen.kode_dosen");
		$no = 1;
		while ($tampil =mysqli_fetch_array($sql)){
			?>
		<tr bgcolor="white">
			<td><?php echo $no;?>					    </td>
			<td><?php echo $tampil['kode_makul'];?>		</td>
			<td><?php echo $tampil['nama_makul'];?>		</td>
			<td><?php echo $tampil['sks'];?>		    </td>
			<td><?php echo $tampil['nama_dosen'];?>		</td>
			<td><?php echo $tampil['waktu'];?>		    </td>
			<td>
				<a href="edit_alumni.php?kode_makul=<?php echo $tampil['kode_makul']; ?>"><img src="edit.png" width="20px" height="20px"/></a>
				<a href="delete_alumni.php?kode_makul=<?php echo $tampil['kode_makul']; ?>"><img src="hapus.png" width="20px" height="20px"/></a>
			</td>
		</tr>
	<?php
		$no++;
			}
	?>
	</table>
	<br>
	<div align="center">
	<a href="input_alumni.php" ><input type="submit" class="tombol_login" value="INPUT DATA ALUMNI">
	<a href="index.html" ><input type="submit" class="tombol_login" value="LOGOUT">
</body>
</html>