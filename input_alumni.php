<!DOCTYPE html>
<html>
<head>
	<title>Input Data Alumni</title>
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
	<a href="index_alumni.php">Lihat Data</a>
	<br/>
	<h3>Input Data Baru</h3>
	<form method="post" action="input-aksi-alumni.php">
		<div class="table-users">
		<table>
			<tr>
				<td>Kode :</td>
				<td><input type="text" name="kode_makul" placeholder="Masukkan Kode"></td>					
			</tr>	
			<tr>
				<td>Jabatan :</td>
				<td><input type="text" name="nama_makul" placeholder="Masukkan Nama"></td>					
			</tr>		
			<tr>
				<td>Berapa kali :</td>
				<td><input type="text" name="sks" placeholder="Masukkan SKS"></td>					
			</tr>	
			<tr>
				<td>Kode Dosen :</td>
				<td><input type="text" name="kode_dosen" placeholder="Masukkan Kode Dosen"></td>					
			</tr>	
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="ruang" placeholder="Masukkan Ruang"></td>					
			</tr>	
			<tr>
				<td>Waktu Lulus :</td>
				<td><input type="text" name="waktu" placeholder="Masukkan Waktu"></td>					
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