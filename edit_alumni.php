<?php 
include'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body { 
		background-image: url(bs4.jpg);
		background-size: 100%; 
		}
</style>
	<br>
	<title>Edit Data</title>
	<link rel="stylesheet" href="./style.css">
</head>
<div align="center">
    <h2 align="center">Edit Data</h2>

	<?php
	$kode_makul = $_GET['kode_makul'];
	$sql = mysqli_query($koneksi,"select * from kuliah where kode_makul='$kode_makul'");
	while($tampil = mysqli_fetch_array($sql)){
		?>

		<form method="post" action="edit-aksi-alumni.php">
			<div class="table-users">
			<table align="center" style="padding-bottom: 5px">
				<tr>			
					<td>Kode :</td>
					<td>:</td>
					<td>
						<input type="text" name="kode_makul" value="<?php echo $tampil['kode_makul']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jabatan :</td>
					<td>:</td>
					<td><input type="text" name="nama_makul" value="<?php echo $tampil['nama_makul']; ?>"></td>	
				</tr>
				<tr>
					<td>Berapa kali :</td>
					<td>:</td>
					<td><input type="text" name="sks" value="<?php echo $tampil['sks']; ?>"></td>	
				</tr>
				<tr>
					<td>Kode Dosen :</td>
					<td>:</td>
					<td><input type="text" name="kode_dosen" value="<?php echo $tampil['kode_dosen']; ?>"></td>	
				</tr>
				<tr>
					<td>Nama :</td>
					<td>:</td>
					<td><input type="text" name="ruang" value="<?php echo $tampil['ruang']; ?>"></td>	
				</tr>
				<tr>
					<td>Waktu Lulus:</td>
					<td>:</td>
					<td><input type="text" name="waktu" value="<?php echo $tampil['waktu']; ?>"></td>	
				</tr>
			</table>
		</div>
			<center>
				<button style="align-content: center;" >Ubah Data</button>
				<a href="index_alumni.php" ><button style="align-content: center;">Keluar</button></a>
			</center>
		</form>
	<?php 
	}
	?>
	</div>
</body>
</html>