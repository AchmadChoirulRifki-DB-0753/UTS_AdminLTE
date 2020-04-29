<!DOCTYPE html>
<html>
<head>
	<title>Input Data Anggota Baru</title>
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
	<a href="index_anggota.php">Lihat Data</a>
	<br/>
	<h3>Input Data Baru</h3>
	<form method="post" action="input-aksi-anggota.php">
		<div class="table-users">
		<table>
			<tr>
				<td>Kode Dosen :</td>
				<td><input type="text" name="kode_dosen" placeholder="Masukkan Kode"></td>					
			</tr>	
			<tr>
				<td>Nama Dosen :</td>
				<td><input type="text" name="nama_dosen" placeholder="Masukkan Nama"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah">
				</td>					
			</tr>				
		</table>
	</div>
	</form>
</body>
</html>