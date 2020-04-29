<!DOCTYPE html>
<html>
<head>
	<title>Input Data Pengurus Baru</title>
	<link rel="stylesheet" href="./style.css">
</head>
<style type="text/css">
	body { 
		background-image: url(bs3.jpg);
		background-size: 100%; 
		}
</style>
	<div align="center">
	<br/>
	<a href="index2.php">Lihat Data</a>
	<br/>
	<h3>Input Data Baru</h3>
	<form method="post" action="input-aksi.php">
		<div class="table-users">
		<table>
			<tr>
				<td>NIM :</td>
				<td><input type="number" name="nim" placeholder="Hanya Angka"></td>					
			</tr>	
			<tr>
				<td>Nama Mahasiswa :</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>					
			</tr>	
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>					
			</tr>	
			<tr>
				<td>Telepon :</td>
				<td><input type="text" name="telepon" placeholder="Masukkan No Telepon"></td>					
			</tr>
			</div>	
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah">
				</td>					
			</tr>				
		</table>
	</form>
</body>
</html>